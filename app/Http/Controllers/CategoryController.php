<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
        if($search){
            $category = categoryModel::where('cat_id', 'LIKE', "%{$search}%")
            ->orWhere('cat_name', 'LIKE', "%{$search}%" )->simplePaginate(3);
        } else {
            $category = categoryModel::paginate(10);
        }

       return view('category.index', compact('category'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,categoryModel $category)
    {
        //
        $request->validate([
            // // 'id'=> 'required',
            'cat_name' => 'required',
            'cat_dec' => 'required',
        ]);
        $input = $request->all();
        $category->cat_id = IdGenerator::generate(['table' => 'category', 'field' => 'cat_id', 'length' => 5, 'prefix' => 'CAT']);
        $category->cat_name = $request->cat_name;
        $category->cat_dec = $request->cat_dec;
        $category->save();

        return redirect()->route('category.index')
                        ->with('success','Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoryModel $categoryModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoryModel $categoryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoryModel $categoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoryModel $categoryModel)
    {
        //
    }
}
