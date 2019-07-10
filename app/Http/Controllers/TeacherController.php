<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use App\Teacher;

class TeacherController extends Controller {

    public function add_teacher() {
        return view('frontEnd.teacher.add_teacher');
    }

    public function save_teacher(Request $request) {
        $data = array();
        $data['teacher_name'] = $request->teacher_name;
        $data['education'] = $request->education;
        $data['phone_number'] = $request->phone_number;
        $data['emailaddress'] = $request->emailaddress;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(10);
            $text = strtolower($image->getClientOriginalName());
            $image_full_name = $image_name . '.' . $text;
            $uploadPath = 'public/teacherImage/';
            $image_url = $uploadPath . $image_full_name;
            $success = $image->move($uploadPath, $image_full_name);
            if ($success) {
                $data['image'] = $image_url;
                DB::table('teachers')->insert($data);
                return redirect('/add-teacher')->with('message', 'Teacher Create Successfully');
            } else {
                $data['image'] = $image_url;
                DB::table('teachers')->insert($data);
                return redirect('/add-teacher')->with('message', 'Teacher Create Successfully');
            }
        }
    }

    public function teacher_list() {
        $teachers = DB::table('teachers')
                ->select('*')
                ->get();
        return view('frontEnd.teacher.teacher_list', ['teachers' => $teachers]);
    }

    public function edit_teacher($id) {
        $teachers = DB::table('teachers')
                ->select('*')
                ->where('id', $id)
                ->first();
        return view('frontEnd.teacher.edit_teacher', ['teachers' => $teachers]);
    }

    public function update_teacher(Request $request) {
        $data = array();
        $id = $request->id;
        $data['teacher_name'] = $request->teacher_name;
        $data['education'] = $request->education;
        $data['phone_number'] = $request->phone_number;
        $data['emailaddress'] = $request->emailaddress;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(10);
            $text = strtolower($image->getClientOriginalName());
            $image_full_name = $image_name . '.' . $text;
            $uploadPath = 'public/teacherImage/';
            $image_url = $uploadPath . $image_full_name;
            $success = $image->move($uploadPath, $image_full_name);

            if ($success) {
                $data['image'] = $image_url;
                DB::table('teachers')
                        ->where('id', $id)
                        ->update($data);
                unlink($request->old_image);
                return redirect('/teacher-list')->with('message', 'Teacher Update Successfully');
            } else {
                $data['image'] = $image_url;
                DB::table('teachers')
                        ->where('id', $id)
                        ->update($data);
                return redirect('/teacher-list')->with('message', 'Teacher Update Successfully');
            }
        }
        DB::table('teachers')
                ->where('id', $id)
                ->update($data);
        return redirect('/teacher-list')->with('message', 'Teacher Update Successfully');
    }

    public function teacher_delete($id) {
        DB::table('teachers')
                ->where('id', $id)
                ->delete();
        return redirect('/teacher-list')->with('message', 'Teacher Delete Successfully');
    }

}
