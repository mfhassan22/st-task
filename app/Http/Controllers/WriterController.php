<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    //
    public function list(){

        return view('writer/writers',['writers'=>Writer::all()]);
    }

    public function booksByAuthor(Request $request,$id){
        $books=Book::where('writer_id',$id)->get();
        return view('writer/writerBooks',['books'=>$books]);
    }
}
