<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaxonomyRequest;
use App\Http\Requests\UpdateTaxonomyRequest;
use App\Models\Media;
use App\Models\Taxonomy;
use App\Models\Type;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class TaxonomyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxonomies = Taxonomy::with('media', 'type')->get();
        return view('admin.taxonomy.index', compact('taxonomies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $media = Media::all();
        return view('admin.taxonomy.create', compact('types', 'media'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaxonomyRequest $request)
    {
        Taxonomy::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $request->media_id,
            'type_id' => $request->type_id,
        ]);
        return redirect()->route('taxonomies.index')->with(['success' => 'Taxonomy Created Successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($id);
        return view('admin.taxonomy.show', compact('taxonomy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {

        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($id);
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
        $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($id);
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
        $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($id);
        $taxonomy->delete();
        return redirect()->route('taxonomies.index')->with(['success' => 'Taxonomy Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Taxonomy::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
