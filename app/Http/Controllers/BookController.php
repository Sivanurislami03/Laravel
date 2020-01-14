<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index()
    {
    	$book = Book::all();
    	return $book;
    }

    public function create($jdl)
    {
    	$book = new Book();
    	$book->title = "How to be a Good Programmer";
    	$book->publisher = "Assalaam Studio";
    	$book->pages = 100;
    	$book->date = Carbon::now();
    	$book->price = 150000;
    	$book->status = false;
    	$book->synopsis = "Lorem Ipsum";
    	$book->save();
    	return $book; 
    }

    public function show($id)
    {
    	$book = Book::find($id);
    	return $book;
    }

    public function edit($id, $jdl)
    {
    	$book = Book::find($id);
    	$book->title = $jdl;
    	$book->publisher = "Assalaam Studio";
    	$book->pages = 100;
    	$book->date = Carbon::now();
    	$book->price = 150000;
    	$book->status = false;
    	$book->synopsis = "Lorem Ipsum";
    	$book->save();
    	return $book; 
    }

    public function delete($id)
    {
    	$book = Book::find($id);
    	$book->delete();
    	return $book;
    }

    public function latihan1()
    {
    	$a = Book::select('')->take(3)->get();
    	return $a;
    }
}
