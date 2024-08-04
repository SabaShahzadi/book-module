<?php

namespace Modules\Blog\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Blog\App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = Book::all();
        // return view('table', compact('data'));
        return view('blog::content.book', compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('blog::content.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req): RedirectResponse
    {
        $request_data=$req->validate([
            'name' => 'required|unique:books',
            'author'=>'required',
            'date'=>'required',
            'description'=>'required',


        ]);

       $data=new Book();

       $data->name=$request_data['name'];
       $data->author_name=$request_data['author'];
       $data->publishing_date=$request_data['date'];
       $data->description=$request_data['description'];
       $data->save();
       return redirect()->back()->with('message',"Registered Successfully");
       }
    // }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book,$id)
    {

        $data = $book->where('id', $id)->first();

        return view('blog::content.form', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book,Request $req, $id): RedirectResponse
    {
        $request_data = $req->validate([
            'name' => 'required|unique:books',
            'author' => 'required',
            'date' => 'required',
            'description' => 'required',


        ]);

        $data =$book->find($id);
        $data->name = $request_data['name'];
        $data->author_name = $request_data['author'];
        $data->publishing_date = $request_data['date'];
        $data->description = $request_data['description'];
        $data->update();
        return redirect()->route('book.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book,$id)
    {
        $data=$book->find($id);
        $data->delete();
        return redirect()->route('book.index');
    }
}
