<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use DB;

class StudentPaymentController extends Controller {

    public function add_student_payment() {
        $departments = Department::all();
        return view('frontEnd.studentPayment.add_student_payment', ['departments' => $departments]);
    }

    public function save_student_payment(Request $request) {
        // return $request->all();
        // exit();
        $data = array();
        $data['roll_id'] = $request->roll_id;
        $data['current_date'] = $request->current_date;
        $data['name'] = $request->name;
        $data['departmentId'] = $request->departmentId;
        $data['month'] = $request->month;
        $data['month_rate'] = $request->month_rate;
        $data['total'] = $request->total;
        $data['payment'] = $request->payment;
        $data['description'] = $request->description;
        $data['sub_total'] = $request->sub_total;
        $data['due'] = $request->due;
        $data['mode'] = $request->mode;
        $data['date'] = $request->date;

        DB::table('student_payments')->insert($data);
        return redirect('/add-student-payment')->with('message', 'Student Payment Create Successfully');
    }

    public function student_payment_list() {
        $student_payments = DB::table('student_payments')
                ->join('departments', 'student_payments.departmentId', '=', 'departments.id')
                ->select('student_payments.*', 'departments.full_name')
                ->get();
        return view('frontEnd.studentPayment.student_payment_list', [
            'student_payments' => $student_payments
        ]);
    }

    public function edit_student_payment($id) {
        $departments = Department::all();
        $student_payments = DB::table('student_payments')
                ->select('*')
                ->where('id', $id)
                ->first();
        return view('frontEnd.studentPayment.edit_student_payment', [
            'departments' => $departments,
            'student_payments' => $student_payments
        ]);
    }

    public function update_student_payment(Request $request) {
        $data = array();
        $id = $request->id;
        $data['roll_id'] = $request->roll_id;
        $data['current_date'] = $request->current_date;
        $data['name'] = $request->name;
        $data['departmentId'] = $request->departmentId;
        $data['month'] = $request->month;
        $data['month_rate'] = $request->month_rate;
        $data['total'] = $request->total;
        $data['payment'] = $request->payment;
        $data['description'] = $request->description;
        $data['sub_total'] = $request->sub_total;
        $data['due'] = $request->due;
        $data['mode'] = $request->mode;
        $data['date'] = $request->date;

        DB::table('student_payments')
                ->where('id', $id)
                ->update($data);
        return redirect('/student-payment-list')->with('message', 'Student Payment Update Successfully');
    }

    public function view_student_payment($id) {
        $departments = Department::all();
        $student_payments = DB::table('student_payments')
                ->select('*')
                ->where('id', $id)
                ->first();
        return view('frontEnd.studentPayment.view_student_payment', [
            'departments' => $departments,
            'student_payments' => $student_payments
        ]);
    }

    public function payment($id) {
        $departments = Department::all();
        $student_payments = DB::table('student_payments')
                ->select('*')
                ->where('id', $id)
                ->first();
        return view('frontEnd.studentPayment.payment', [
            'departments' => $departments,
            'student_payments' => $student_payments
        ]);
    }

    public function payment_detalis() {
        return view('frontEnd.studentPayment.payment_detalis');
    }

}
