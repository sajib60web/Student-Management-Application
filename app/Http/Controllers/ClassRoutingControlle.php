<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Department;
use App\ClassRoom;

class ClassRoutingControlle extends Controller {

    public function add_classRouting() {
        $departments = Department::all();
        $teachers = DB::table('teachers')
                ->select('*')
                ->get();
        $classRooms = ClassRoom::all();
        return view('frontEnd.classRouting.add_classRouting', [
            'departments' => $departments,
            'teachers' => $teachers,
            'classRooms' => $classRooms
        ]);
    }

    public function save_class_routing(Request $request) {
        $data = array();
        $data['starttime'] = $request->starttime;
        $data['endtime'] = $request->endtime;
        $data['daywek'] = $request->daywek;
        $data['departmentId'] = $request->departmentId;
        $data['semester'] = $request->semester;
        $data['teacherId'] = $request->teacherId;
        $data['subject_name'] = $request->subject_name;
        $data['classRoomId'] = $request->classRoomId;
        $data['techers_phone_number'] = $request->techers_phone_number;

        DB::table('class_routings')->insert($data);
        return redirect('/add-class-outing')->with('message', 'Class Routing Create Successfully');
    }

    public function class_outing_list() {
        $class_routings = DB::table('class_routings')
                ->join('departments', 'class_routings.departmentId', '=', 'departments.id')
                ->join('teachers', 'class_routings.teacherId', '=', 'teachers.id')
                ->join('class_rooms', 'class_routings.classRoomId', '=', 'class_rooms.id')
                ->select('class_routings.*', 'departments.full_name', 'teachers.teacher_name', 'class_rooms.class_room_number')
                ->get();
        return view('frontEnd.classRouting.class_outing_list', ['class_routings' => $class_routings]);
    }

    public function edit_class_routing($id) {
        $departments = Department::all();
        $teachers = DB::table('teachers')
                ->select('*')
                ->get();
        $classRooms = ClassRoom::all();
        $class_routings = DB::table('class_routings')
                ->select('*')
                ->first();
        return view('frontEnd.classRouting.edit_class_routing', [
            'departments' => $departments,
            'teachers' => $teachers,
            'classRooms' => $classRooms,
            'class_routings' => $class_routings
        ]);
    }

    public function update_class_routing(Request $request) {
        $data = array();
        $id = $request->id;
        $data['starttime'] = $request->starttime;
        $data['endtime'] = $request->endtime;
        $data['daywek'] = $request->daywek;
        $data['departmentId'] = $request->departmentId;
        $data['semester'] = $request->semester;
        $data['teacherId'] = $request->teacherId;
        $data['subject_name'] = $request->subject_name;
        $data['classRoomId'] = $request->classRoomId;
        $data['techers_phone_number'] = $request->techers_phone_number;

        DB::table('class_routings')
                ->where('id', $id)
                ->update($data);
        return redirect('/class-outing-list')->with('message', 'Class Routing Update Successfully');
    }

    public function class_routing_delete($id) {
        DB::table('class_routings')
                ->where('id', $id)
                ->delete();
        return redirect('/class-outing-list')->with('message', 'Class Routing Delete Successfully');
    }

}
