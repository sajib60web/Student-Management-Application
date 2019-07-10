<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Department;
use App\Book;

class IssueBookController extends Controller {

    public function add_issue_book() {
        $departments = Department::all();
        $books = Book::all();
        return view('frontEnd.book.add_issue_book', [
            'departments' => $departments,
            'books' => $books
        ]);
    }

    public function save_issue_book(Request $request) {
        $data = array();
        $data['student_name'] = $request->student_name;
        $data['roll_id'] = $request->roll_id;
        $data['phone_no'] = $request->phone_no;
        $data['departmentId'] = $request->departmentId;
        $data['bookId'] = $request->bookId;
        $data['tody_date'] = $request->tody_date;
        $data['date'] = $request->date;

        DB::table('issue_books')->insert($data);
        return redirect('/add-issue-book')->with('message', 'Issue Book Create Successfully');
    }

    public function issue_book_list() {
        $issue_books = DB::table('issue_books')
                ->join('departments', 'issue_books.departmentId', '=', 'departments.id')
                ->join('books', 'issue_books.bookId', '=', 'books.id')
                ->select('issue_books.*', 'departments.full_name', 'books.subject_name')
                ->get();
        return view('frontEnd.book.issue_book_list', ['issue_books' => $issue_books]);
    }

    public function edit_issue_book($id) {
        $departments = Department::all();
        $books = Book::all();
        $issue_books = DB::table('issue_books')
                ->select('*')
                ->where('id', $id)
                ->first();
        return view('frontEnd.book.edit_issue_book', [
            'departments' => $departments,
            'books' => $books,
            'issue_books' => $issue_books
        ]);
    }

    public function update_issue_book(Request $request) {
        $data = array();
        $id = $request->id;
        $data['student_name'] = $request->student_name;
        $data['roll_id'] = $request->roll_id;
        $data['phone_no'] = $request->phone_no;
        $data['departmentId'] = $request->departmentId;
        $data['bookId'] = $request->bookId;
        $data['tody_date'] = $request->tody_date;
        $data['date'] = $request->date;

        DB::table('issue_books')
                ->where('id', $id)
                ->update($data);
        return redirect('/issue-book-list')->with('message', 'Issue Book Update Successfully');
    }

    public function issue_book_delete($id) {
        DB::table('issue_books')
                ->where('id', $id)
                ->delete();
        return redirect('/teacher-list')->with('message', 'Issue Book Delete Successfully');
    }

}
