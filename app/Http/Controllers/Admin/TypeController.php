<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::get();
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
        // $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($encryptedId);
        return view('admin.type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($encryptedId);
        return view('admin.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, $encryptedId)
    {
        // $id = decrypt($encryptedId);
        // $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($encryptedId);
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
        // $id = Hashids::decode($encryptedId)[0];
        $type = Type::findOrFail($encryptedId);
        $type->delete();
        return redirect()->route('types.index')->with(['success' => 'Type Deleted Successfully']);
    }
    public function filter(Request $request)
    {
        $query = Type::query();
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
            $query->where('name', 'like', '%' . $search . '%');
        }
        $result = $query->get();
        $data = [
            'data' => $result,
        ];
        return response()->json($data);
    }
}
