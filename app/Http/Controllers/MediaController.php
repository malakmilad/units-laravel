<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaRequest;
use App\Models\Media;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::paginate(5);
        return view('admin.media.index', compact('media'));
    }
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $media = Media::paginate(5);
    //     return view('media.index', compact('media'));
    // }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaRequest $request)
    {
        if ($request->hasFile('featured_image')) {
            $featured_images = $request->file('featured_image');
            foreach ($featured_images as $image) {
                $image_name = $image->getClientOriginalName();
                $title = pathinfo($image_name, PATHINFO_FILENAME);
                $image->move(Media::MEDIA_PATH, $image_name);
                Media::create([
                    'featured_image' => $image_name,
                    'title' => $title,
                    'alternative_text' => '',
                    'caption' => '',
                    'description' => '',
                ]);
            }
            return redirect()->route('media.index')->with(['success' => 'Media Created Successfully']);
        }
    }
    /**
     * Show the form for showing the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $media = Media::findOrFail($id);
        return view('admin.media.show', compact('media'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $media = Media::findOrFail($id);
        return view('admin.media.edit', compact('media'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $media = Media::findOrFail($id);
        $media->update([
            'title' => $request->title,
            'alternative_text' => $request->alternative_text,
            'caption' => $request->caption,
            'description' => $request->description,
        ]);
        return redirect()->route('media.index')->with(['success' => 'Media Updated Successfully']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($encryptedId)
    {
        $id = Hashids::decode($encryptedId)[0];
        $media = Media::findOrFail($id);
        $media->delete();
        return redirect()->route('media.index')->with(['success' => 'Media Deleted Successfully']);
    }
}
