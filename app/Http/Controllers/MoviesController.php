<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\categoryModel;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class MoviesController extends Controller
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

       return view('movies.index', compact('movies','category', 'type'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = DB::table('category')->get();
        $type = DB::table('type')->get();
        return view('movies.create', compact('category', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,movies $movies)
    {
        //
        $request->validate([
            // 'mov_id' => 'required',
            'mov_video' => 'required',
            'mov_title' => 'required',
            'mov_dec' => 'required',
            'mov_cat' => 'required',
            'mov_type' => 'required',
            'image' => 'required',
        ]);
        $input = $request->all();
        $movies->mov_id = IdGenerator::generate(['table' => 'movies', 'field' => 'mov_id', 'length' => 5, 'prefix' => 'MOV']);
        $movies->mov_video = $request->mov_video;
        $movies->mov_title = $request->mov_title;
        $movies->mov_dec = $request->mov_dec;
        $movies->mov_cat = $request->mov_cat;
        $movies->mov_type = $request->mov_type;
        
        $path = $request->file('image');
       $image = $path->getClientOriginalName();
       $path->move(public_path('image/'), $image);
       $movies->image = $image;

        $movies->save();

        return redirect()->route('movies.index')
                        ->with('success','Movies created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(movies $movies)
    {
        //
        $movies= movies::find($id);
        return view('movies.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        //
        
        $movies = Movies::findOrFail($id);
        $category = DB::table('category')->get();
        $type = DB::table('type')->get();
    return view('movies.edit', compact('movies','category', 'type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'mov_video' => 'required',
            'mov_title' => 'required',
            'mov_dec' => 'required',
            'mov_cat' => 'required',
            'mov_type' => 'required',
            'image' => 'nullable|image'
        ]);

        $movie = Movies::findOrFail($id);
        $movie->mov_video = $request->input('mov_video');
        $movie->mov_title = $request->input('mov_title');
        $movie->mov_dec = $request->input('mov_dec');
        $movie->mov_cat = $request->input('mov_cat');
        $movie->mov_type = $request->input('mov_type');

        $path = $request->file('image');
       $image = $path->getClientOriginalName();
       $path->move(public_path('image/'), $image);
       $movie->image = $image;

        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movies $movies, $id)
    {
        //
        $movies = Movies::find($id);
    if ($movies) {
        $movies->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }
    return redirect()->route('movies.index')->with('error', 'Movie not found');
    }
}
