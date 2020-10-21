<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        try {
            $book = new Books;
    
            return [
                'status'=>200,
                'books'=>$book.all()
            ];
        } catch (\Throwable $th) {
            return [
                'status'=>400,
                'error'=>$th
            ];
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $book = new Book;
            $book->title = $request->title;
            $book->sinopsis = $request->sinopsis;
            $book->author = $request->author;
            $book->gender = $request->gender;
            $book->save();

            return [
                'status'=>200,
            ];
        } catch (\Throwable $th) {
            return [
                'status'=>400,
                'error'=>$th
            ];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $book = User::find($id);
            return [
                'status'=>200,
                'book'=>$book
            ];
        } catch (\Throwable $th) {
            return [
                'status'=>400,
                'error'=>$th
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $book = User::find($request->id);
            $book[$request->column] = $request->newValue;
            $book->update();

            return [
                'status' => 200,
            ];
        } catch (\Throwable $th) {
            return [
                'status' => 400,
                'errors'=>$th
            ];
        }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return array
     */
    public function destroy($id)
    {
        try {
            $book = User::find($id);
            $book->destroy();
            return [
                'status' => 200,
            ];
        } catch (\Throwable $th) {
            return [
                'status' => 400,
                'errors'=>$th
            ];
        }     
    }
}
