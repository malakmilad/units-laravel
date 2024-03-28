<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTermRequest;
use App\Http\Requests\UpdateTermRequest;
use App\Models\Media;
use App\Models\Taxonomy;
use App\Models\Term;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($tax)
    {
        $taxonomy = Taxonomy::findOrFail($tax);
        $terms = $taxonomy->terms()->get();
        return view('admin.term.index', compact('terms', 'taxonomy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tax)
    {
        $taxonomy = Taxonomy::findOrFail($tax);
        $terms = Term::get();
        return view('admin.term.create', compact('taxonomy', 'terms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTermRequest $request)
    {
        $media = Media::where("full-path", $request->url)->get()->toArray();
        $media_id = !empty($media) ? $media[0]['id'] : null;
        $subTerm_id = !(empty($request->sub_term_id)) ? $request->sub_term_id : null;
        Term::create([
            'media_id' => $media_id,
            'taxonomy_id' => $request->taxonomy_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'sub_term_id' => $subTerm_id,
        ]);
        return redirect()->route('terms.index', ['taxonomy' => $request->taxonomy_id])->with(['success' => 'Term Created Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($encryptedId);
        return view('admin.term.show', compact('term'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId, $tax)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $taxonomy = Taxonomy::findOrFail($tax);
        $term = Term::findOrFail($encryptedId);
        $media = Media::get();
        return view('admin.term.edit', compact('term', 'taxonomy', 'media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTermRequest $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($encryptedId);
        $term->update([
            'media_id' => $request->media_id,
            'taxonomy_id' => $request->taxonomy_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);
        return redirect()->route('terms.index')->with(['success' => 'Term Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($encryptedId);
        $term->delete();
        return redirect()->route('terms.index')->with(['success' => 'Term Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Term::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    public function filter(Request $request,$tax)
    {
        $taxonomy = Taxonomy::findOrFail($tax);
        $query = $taxonomy->terms();
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
