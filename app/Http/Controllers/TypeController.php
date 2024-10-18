<?php

namespace App\Http\Controllers;

use App\Models\TypeModel;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
        if($search){
            $type = TypeModel::where('type_id', 'LIKE', "%{$search}%")
            ->orWhere('type_name', 'LIKE', "%{$search}%" )->simplePaginate(3);
        } else {
            $type = TypeModel::paginate(10);
        }

       return view('type.index', compact('type'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TypeModel $type)
    {
        //
        $request->validate([
            // // 'id'=> 'required',
            'type_name' => 'required',
            'type_dec' => 'required',
        ]);
        $input = $request->all();
        $type->type_id = IdGenerator::generate(['table' => 'type', 'field' => 'type_id', 'length' => 5, 'prefix' => 'TYPE']);
        $type->type_name = $request->type_name;
        $type->type_dec = $request->type_dec;
        $type->save();

        return redirect()->route('types.index')
                        ->with('success','Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeModel $typeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeModel $typeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeModel $typeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeModel $typeModel)
    {
        //
    }
}
