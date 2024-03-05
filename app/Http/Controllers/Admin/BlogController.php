<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Media;
use App\Models\Taxonomy;
use App\Models\Type;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('media', 'taxonomies')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $media = Media::all();
        $taxonomies = Taxonomy::all();
        $types = Type::all();
        return view('admin.blog.create', compact('media', 'taxonomies', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $taxonomies = $request->taxonomy_id;
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $request->media_id,
            'type_id' => $request->type_id,
        ]);
        $blog->taxonomies()->attach($taxonomies);
        return redirect()->route('blogs.index')->with(['success' => 'Blogs Created Successfully']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', compact('blog'));
    }
    public function edit($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($id);
        $media = Media::all();
        $taxonomies = Taxonomy::all();
        $types = Type::all();
        return view('admin.blog.edit', compact('blog', 'media', 'taxonomies', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($id);
        $taxonomies = $request->taxonomy_id;
        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $request->media_id,
            'type_id' => $request->type_id,
        ]);
        $blog->taxonomies()->sync($taxonomies);
        return redirect()->route('blogs.index')->with(['success' => 'Blogs Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($id);
        $blog->taxonomies()->detach();
        $blog->delete();
        return redirect()->route('blogs.index')->with(['success' => 'Blog Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
