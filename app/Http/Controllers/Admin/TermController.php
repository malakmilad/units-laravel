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
use Vinkla\Hashids\Facades\Hashids;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terms = Term::with('media', 'taxonomy')->paginate(3);
        return view('admin.term.index', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $taxonomies = Taxonomy::all();
        $media = Media::all();
        return view('admin.term.create', compact('taxonomies', 'media'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTermRequest $request)
    {
        $media = Media::where("full-path", $request->url)->get()->toArray();
        Term::create([
            'media_id' => $media[0]['id'],
            'taxonomy_id' => $request->taxonomy_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);
        return redirect()->route('terms.index')->with(['success' => 'Term Created Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($id);
        return view('admin.term.show', compact('term'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($id);
        $taxonomies = Taxonomy::all();
        $media = Media::all();
        return view('admin.term.edit', compact('term', 'taxonomies', 'media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTermRequest $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($id);
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
        $id = Hashids::decode($encryptedId)[0];
        $term = Term::findOrFail($id);
        $term->delete();
        return redirect()->route('terms.index')->with(['success' => 'Term Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Term::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
