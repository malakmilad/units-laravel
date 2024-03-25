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

use function PHPSTORM_META\type;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        $type = Type::findOrFail($type);
        // $blogs = $type->blogs()->with('media', 'taxonomies')->paginate(3);
        //?another solution
        $blogs = Blog::join('blog_type', 'blogs.id', '=', 'blog_type.blog_id')
                ->where('blog_type.type_id', $type->id)
                ->with('media', 'taxonomies')
                ->paginate(3);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($type)
    {
        $media = Media::all();
        $taxonomies = Taxonomy::all();
        $selectedType = Type::find($type);
        return view('admin.blog.create', compact('media', 'taxonomies','selectedType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $taxonomies = $request->taxonomy_id;
        $types=$request->type_id;
        $media = Media::where("full-path", $request->url)->get()->toArray();
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'media_id' =>  $media[0]['id'],
        ]);
        $blog->taxonomies()->attach($taxonomies);
        $blog->types()->attach($types);
        return redirect()->route('blogs.index', ['type' => $request->type_id])->with(['success' => 'Blogs Created Successfully']);
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
        return view('admin.blog.edit', compact('blog', 'media', 'taxonomies'));
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
        return redirect()->route('blogs.index', ['type' => $request->type_id])->with(['success' => 'Blogs Created Successfully']);
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
        return redirect()->route('blogs.index',['type'])->with(['success' => 'Blog Deleted Successfully']);
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
    public function filter(Request $request)
    {
        $query = Blog::query();
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
