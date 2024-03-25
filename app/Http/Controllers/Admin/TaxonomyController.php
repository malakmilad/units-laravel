<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaxonomyRequest;
use App\Http\Requests\UpdateTaxonomyRequest;
use App\Models\Media;
use App\Models\Taxonomy;
use App\Models\Type;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TaxonomyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxonomies = Taxonomy::with('media', 'types')->get();
        return view('admin.taxonomy.index', compact('taxonomies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.taxonomy.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaxonomyRequest $request)
    {
        $types = $request->type_id;
        $media = Media::where("full-path", $request->url)->get()->toArray();
        $taxonomy = Taxonomy::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $media[0]['id'],
        ]);
        $taxonomy->types()->attach($types);
        return redirect()->route('taxonomies.index')->with(['success' => 'Taxonomy Created Successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($encryptedId);
        return view('admin.taxonomy.show', compact('taxonomy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {

        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($encryptedId);
        $types = Type::all();
        $media = Media::all();
        return view('admin.taxonomy.edit', compact('taxonomy', 'types', 'media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaxonomyRequest $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($encryptedId);
        $taxonomy->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $request->media_id,
            'type_id' => $request->type_id,
        ]);
        return redirect()->route('taxonomies.index')->with(['success' => 'Taxonomy Updated Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($encryptedId);
        $taxonomy->delete();
        return redirect()->route('taxonomies.index')->with(['success' => 'Taxonomy Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Taxonomy::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    // public function search(Request $request)
    // {
    //     $query = Taxonomy::query();
    //     // Search functionality
    //     if ($request->has('search')) {
    //         $searchTerm = $request->input('search');
    //         $query->where('title', 'like', '%' . $searchTerm . '%');
    //     }
    //     // Sorting functionality
    //     if ($request->has('sort_by') && $request->has('sort_order')) {
    //         $sortBy = $request->input('sort_by');
    //         $sortOrder = $request->input('sort_order');
    //         $query->orderBy($sortBy, $sortOrder);
    //     }
    //     // Pagination
    //     $taxonomies = $query->paginate(3)->withQueryString();
    //     return view('admin.taxonomy.index', compact('taxonomies'));
    // }
    public function filter(Request $request)
    {
        $query = Taxonomy::query();
        $search = $request->input('search.value');
        $orderDir = $request->input('order.0.dir');
        $orderName = $request->input('order.0.name');
        $perPage = $request->input('length');
        $start = $request->input('start');
        $page = ($start / $perPage) + 1;
        $query->paginate($perPage, ['*'], 'page', $page);
        if ($orderDir && $orderName) {
            $query->orderBy($orderName, $orderDir);
        }
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%');
        }
        $result = $query->get();
        $data = [
            'data' => $result,
        ];
        return response()->json($data);
    }

}
