<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\categoryModel;
use App\Models\TypeModel;
use App\Models\MainfrontModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
        if($search){
            $movies = movies::where('mov_id', 'LIKE', "%{$search}%")
            ->orWhere('mov_title', 'LIKE', "%{$search}%" )->simplePaginate(3);
        } else {
            $movies = movies::paginate(10);
        }
        $category = DB::table('category')->get();
        $type = DB::table('type')->get();

       return view('frontend.index.index', compact('movies','category', 'type'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MainfrontModel $mainfrontModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainfrontModel $mainfrontModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainfrontModel $mainfrontModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainfrontModel $mainfrontModel)
    {
        //
    }
}
