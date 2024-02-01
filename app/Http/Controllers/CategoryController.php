<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("categories.index",compact("categories"));
    }

    public function create(){
        return view("categories.create");
    }

    public function store(Request $request){
        // dd($request->except("_token"));
        Category::create($request->except("_token"));
        return redirect("/categories")->with("success","null");
    }

    public function edit($id){
        
        $category = Category::find($id);
        return view("categories.update",compact(["category"]));

    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->update($request->except("_token"));
        return redirect("/categories")->with("success","null");
    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect("/categories")->with("success","null");
    }

    public function showBooks($id)
    {
    $category = Category::findOrFail($id);
    $books = Book::where('category_id', $id)->get();

    return view('books.index', compact('category', 'books'));
    }
    public function showBooksall()
    {
    $category = Category::all();
    $books = Book::all();

    return view('books.index', compact('category', 'books'));
    }
    //
}
