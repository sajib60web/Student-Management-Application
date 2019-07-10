<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use App\ClassRoom;

class ClassRoomController extends Controller {

    public function add_class_room() {
        return view('frontEnd.classRoom.add_class_room');
    }

    public function save_class_room(Request $request) {
        $classRoom = new ClassRoom();
        $classRoom->class_room_number = $request->class_room_number;
        $classRoom->class_room_site = $request->class_room_site;
        $classRoom->class_room_type = $request->class_room_type;
        $classRoom->save();
        Session::flash('message', 'Class Room Create Successfully');
        return Redirect::to('/add-class-room');
    }

    public function class_room_List() {
        $classRooms = ClassRoom::all();
        return view('frontEnd.classRoom.class_room_List', ['classRooms' => $classRooms]);
    }

    public function edit_classRoom($id) {
        $classRooms = ClassRoom::find($id);
        return view('frontEnd.classRoom.edit_classRoom', ['classRooms' => $classRooms]);
    }

    public function update_class_room(Request $request) {
        $classRoom = ClassRoom::find($request->classRoomsId);
        $classRoom->class_room_number = $request->class_room_number;
        $classRoom->class_room_site = $request->class_room_site;
        $classRoom->class_room_type = $request->class_room_type;
        $classRoom->save();
        Session::flash('message', 'Class Room Update Successfully');
        return Redirect::to('/class-room-List');
    }

    public function classRoom_delete($id) {
        DB::table('class_rooms')
                ->where('id', $id)
                ->delete();
        Session::flash('message', 'Class Room Update Successfully');
        return Redirect::to('/class-room-List');
    }

}
