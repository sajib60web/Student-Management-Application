<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Department;

class BookController extends Controller {

    public function add_book() {
        $departments = Department::all();
        return view('frontEnd.book.add_book', ['departments' => $departments]);
    }

    public function save_book(Request $request) {
        $data = Array();
        $data['subject_name'] = $request->subject_name;
        $data['departmentId'] = $request->departmentId;
        $data['author_name'] = $request->author_name;
        $data['total_book'] = $request->total_book;

        DB::table('books')->insert($data);
        return redirect('/add-book')->with('message', 'Class Routing Create Successfully');
    }

    public function book_list() {
        $books = DB::table('books')
                ->join('departments', 'books.departmentId', '=', 'departments.id')
                ->select('books.*', 'departments.full_name')
                ->get();
        return view('frontEnd.book.book_list', ['books' => $books]);
    }

    public function edit_book($id) {
        $departments = Department::all();
        $books = DB::table('books')
                ->select('*')
                ->where('id', $id)
                ->first();
        return view('frontEnd.book.edit_book', ['departments' => $departments, 'books' => $books]);
    }

    public function update_book(Request $request) {
        $data = array();
        $id = $request->id;
        $data['subject_name'] = $request->subject_name;
        $data['departmentId'] = $request->departmentId;
        $data['author_name'] = $request->author_name;
        $data['total_book'] = $request->total_book;

        DB::table('books')
                ->where('id', $id)
                ->update($data);
        return redirect('/book-list')->with('message', 'Book Update Successfully');
    }
    public function book_delete($id) {
        DB::table('books')
                ->where('id', $id)
                ->delete();
        return redirect('/book-list')->with('message', 'Book Delete Successfully');
    }
}
