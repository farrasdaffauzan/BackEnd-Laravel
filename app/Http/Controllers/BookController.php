<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view("books.index",compact("books"));
    }

    public function create(){
        return view("books.create");
    }
    public function store(Request $request){
        // dd($request->except("_token"));
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'required|string',
            'release_year' => 'required|integer|min:1980|max:2021',
            'price' => 'required|string',
            'total_page' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $thickness = ($request->total_page <= 100) ? 'tipis' : (($request->total_page <= 200) ? 'sedang' : 'tebal');
        $request->merge(['thickness' => $thickness]);

        Book::create($request->except("_token"));
        return redirect("/books")->with("success","null");
    }

    public function edit($id){
        $books = Book::find($id);
        return view("books.update",compact(["books"]));
    }

    public function update(Request $request, $id){
        Book::find($id)->update($request->except("_token"));
        return redirect("/books")->with("success","null");
    }

    public function destroy($id){
        Book::find($id)->delete();
        return redirect("/books")->with("success","null");
    }
    
    //
}
