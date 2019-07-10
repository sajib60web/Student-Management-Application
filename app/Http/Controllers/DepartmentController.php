<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use App\Department;

class DepartmentController extends Controller {

    public function add_Department() {
        return view('frontEnd.Department.add_Department');
    }

    public function save_Department(Request $request) {
        $department = new Department();
        $department->short_name = $request->short_name;
        $department->full_name = $request->full_name;
        $department->department_code = $request->department_code;
        $department->save();
        Session::flash('message', 'User Create Successfully');
        return Redirect::to('/add-Department');
    }

    public function department_List() {
        $departments = Department::all();
        return view('frontEnd.department.department_list', ['departments' => $departments]);
    }

    public function edit_Department($id) {
        $departments = Department::find($id);
        return view('frontEnd.department.edit_department', ['departments' => $departments]);
    }

    public function update_Department(Request $request) {
        $department = Department::find($request->departmentId);
        $department->short_name = $request->short_name;
        $department->full_name = $request->full_name;
        $department->department_code = $request->department_code;
        $department->save();
        Session::flash('message', 'Department Update Successfully');
        return Redirect::to('/department-List');
    }

    public function department_delete($id) {
        DB::table('departments')
                ->where('id', $id)
                ->delete();
        Session::flash('message', 'Department Delete Successfully');
        return Redirect::to('/department-List');
    }

}
