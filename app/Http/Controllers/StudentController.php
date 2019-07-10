<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use App\Department;

class StudentController extends Controller {

    public function add_student() {
        $departments = Department::all();
        return view('frontEnd.student.add_student', ['departments' => $departments]);
    }

    public function save_student(Request $request) {

        $data = array();
        $data['departmentId'] = $request->departmentId;
        $data['fullName'] = $request->fullName;
        $data['roll_id'] = $request->roll_id;
        $data['semester'] = $request->semester;
        $data['date'] = $request->date;
        $data['phone_number'] = $request->phone_number;
        $data['emailaddress'] = $request->emailaddress;
        $data['gender'] = $request->gender;
        $data['guardian_name'] = $request->guardian_name;
        $data['guardian_phone'] = $request->guardian_phone;
        $data['address'] = $request->address;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(10);
            $text = strtolower($image->getClientOriginalName());
            $image_full_name = $image_name . '.' . $text;
            $uploadPath = 'public/studentImage/';
            $image_url = $uploadPath . $image_full_name;
            $success = $image->move($uploadPath, $image_full_name);
            if ($success) {
                $data['image'] = $image_url;
                DB::table('students')->insert($data);
                return redirect('/add-student')->with('message', 'Students Create Successfully');
            } else {
                $data['image'] = $image_url;
                DB::table('students')->insert($data);
                return redirect('/add-student')->with('message', 'Students Create Successfully');
            }
        }
    }

    public function student_list() {
        $students = DB::table('students')
                ->join('departments', 'students.departmentId', '=', 'departments.id')
                ->select('students.*', 'departments.full_name')
                ->get();
        return view('frontEnd.student.student_list', ['students' => $students]);
    }

    public function edit_student($id) {
        $students = DB::table('students')
                ->select('*')
                ->where('id', $id)
                ->first();
        $departments = DB::table('departments')
                ->select('*')
                ->get();
        return view('frontEnd.student.edit_student', [
            'students' => $students,
            'departments' => $departments
        ]);
    }

    public function update_student(Request $request) {
        $data = array();
//        return $request->all();
//        exit();
        $id = $request->id;
        $data['departmentId'] = $request->departmentId;
        $data['fullName'] = $request->fullName;
        $data['roll_id'] = $request->roll_id;
        $data['semester'] = $request->semester;
        $data['date'] = $request->date;
        $data['phone_number'] = $request->phone_number;
        $data['emailaddress'] = $request->emailaddress;
        $data['gender'] = $request->gender;
        $data['guardian_name'] = $request->guardian_name;
        $data['guardian_phone'] = $request->guardian_phone;
        $data['address'] = $request->address;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(10);
            $text = strtolower($image->getClientOriginalName());
            $image_full_name = $image_name . '.' . $text;
            $uploadPath = 'public/studentImage/';
            $image_url = $uploadPath . $image_full_name;
            $success = $image->move($uploadPath, $image_full_name);

            if ($success) {
                $data['image'] = $image_url;
                DB::table('students')
                        ->where('id', $id)
                        ->update($data);
                unlink($request->old_image);
                return redirect('/student-list')->with('message', 'Students Update Successfully');
            } else {
                $data['image'] = $image_url;
                DB::table('students')
                        ->where('id', $id)
                        ->update($data);
                return redirect('/student-list')->with('message', 'Students Update Successfully');
            }
        }
        DB::table('students')
                ->where('id', $id)
                ->update($data);
        return redirect('/student-list')->with('message', 'Students Update Successfully');
    }

    public function student_delete($id) {
        DB::table('students')
                ->where('id', $id)
                ->delete();
        return redirect('/student-list')->with('message', 'Students Delete Successfully');
    }

}
