<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use App\Models\Media;
use App\Models\Taxonomy;
use App\Models\Term;
use App\Models\Type;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {

        $type = Type::findOrFail($type);
        $taxonomies = $type->taxonomies;
        // $blogs = $type->blogs()->with('media', 'taxonomies')->paginate(3);
        //?another solution
        // $blogs = Blog::join('blog_type', 'blogs.id', '=', 'blog_type.blog_id')
        //     ->where('blog_type.type_id', $type->id)
        //     ->with('media', 'taxonomies')
        //     ->get();
        return view('admin.blog.index', compact('taxonomies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($type)
    {
        $type = Type::findOrFail($type);
        $taxonomies = $type->taxonomies()->get();
        return view('admin.blog.create', compact('taxonomies', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $terms = $request->term_id;
        $types = $request->type_id;
        $media = Media::where("full-path", $request->url)->get()->toArray();
        $media_id = !empty($media) ? $media[0]['id'] : null;
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $media_id,
        ]);
        $blog->types()->attach($types);
        $blog->terms()->attach($terms);
        return redirect()->route('blogs.index', ['type' => $request->type_id])->with(['success' => 'Blogs Created Successfully']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($encryptedId);
        return view('admin.blog.show', compact('blog'));
    }
    public function edit($encryptedId, $type)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($type);
        $blog = Blog::findOrFail($encryptedId);
        $media = Media::all();
        $taxonomies = Taxonomy::all();
        return view('admin.blog.edit', compact('blog', 'media', 'taxonomies', 'type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $encryptedId)
    {
        // dd($request);
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($encryptedId);
        $type = $request->type_id;
        $taxonomies = $request->taxonomy_id;
        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' => $request->media_id,
        ]);
        $blog->taxonomies()->sync($taxonomies);
        $blog->types()->sync($type);
        return redirect()->route('blogs.index', ['type' => $type])->with(['success' => 'Blogs Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $blog = Blog::findOrFail($encryptedId);
        $blog->taxonomies()->detach();
        $blog->delete();
        return redirect()->route('blogs.index', ['type'])->with(['success' => 'Blog Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    public function fetchTerms($tax)
    {
        $taxonomy = Taxonomy::findOrFail($tax);
        $terms = Term::where('taxonomy_id', $taxonomy->id)->get();
        return response()->json($terms);
    }
    public function filter(Request $request, $type)
    {
        $type = Type::findOrFail($type);
        $query = $type->blogs()->with('terms');
        $search = $request->input('search.value');
        $orderDir = $request->input('order.0.dir');
        $orderName = $request->input('order.0.name');
        $perPage = $request->input('length');
        $start = $request->input('start');
        $page = ($start / $perPage) + 1;
        $query->paginate($perPage, ['*'], 'page', $page);
        $columns = count($request->input('columns'));
        for ($i = 0; $i < $columns; $i++) {
            $filter = $request->input("columns.$i.search.value");
            if ($filter) {
                $query->whereHas('terms', function ($q) use ($filter) {
                    $q->where('term_id', $filter);
                });

            }
        }
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
