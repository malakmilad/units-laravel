<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Type;
use Vinkla\Hashids\Facades\Hashids;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::paginate(3);
        return view('admin.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        Type::create([
            'name' => $request->name,
        ]);
        return redirect()->route('types.index')->with(['success' => 'Type Created Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($id);
        return view('admin.type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($id);
        return view('admin.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($id);
        $type->update([
            'name' => $request->name,
        ]);
        return redirect()->route('types.index')->with(['success' => 'Type Updated Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($encryptedId)
    {
        // $id = decrypt($encryptedId);
        $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect()->route('types.index')->with(['success' => 'Type Deleted Successfully']);
    }
}
