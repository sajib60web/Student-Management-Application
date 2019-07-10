<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use App\Admin;

session_start();

class ApplicationController extends Controller {

    public function index() {
        return view('frontEnd.loginForm.loginForm');
    }

    public function addUser() {
        return view('frontEnd.user.adduser');
    }

    public function userRegistration(Request $request) {
        $this->validate($request, [
            'admin_email' => 'email|unique:admins,admin_email'
        ]);

        $admin = new Admin();
        $admin->admin_name = $request->admin_name;
        $admin->admin_email = $request->admin_email;
        $admin->admin_password = md5($request->admin_password);
        $admin->access_lavel = $request->access_lavel;
        $admin->save();
//        $adminid = $admin->id;
//        Session::put('adminid', $admin->id);
//        Session::put('admin_name', $admin->admin_name);
        Session::flash('message', 'User Create Successfully');
        return Redirect::to('/add-User');
    }

    public function addList() {
        $users = Admin::all();
        return view('frontEnd.user.add-list', ['users' => $users]);
    }

    public function editUser($id) {
        $user_info = Admin::find($id);
        return view('frontEnd.user.edit-user', ['user_info' => $user_info]);
    }

    public function profile() {
        $user_info = Admin::find(Session::get('adminid'));
        return view('frontEnd.user.profile', ['user_info' => $user_info]);
    }

//    private function passwordUpdate(Request $request) {
//        $admin_password = md5($request->admin_password);
//        $id = $request->id;
//        $admin = DB::table('admins')
//                ->where('admin_password', $admin_password)
//                ->where('id', $id)
//                ->first();
//        $this->Update_profile($request, $admin_password);
//       
//    }

    public function Update_profile(Request $request) {
        $admin_password = md5($request->admin_password);
        $id = $request->id;
        $admin = DB::table('admins')
                ->where('admin_password', $admin_password)
                ->where('id', $id)
                ->first();
        if ($admin) {
            $user_update = Admin::find($id);
            $user_update->admin_name = $request->admin_name;
            $user_update->admin_email = $request->admin_email;
            $user_update->admin_password = md5($admin_password);
            $user_update->save();
            Session::flash('message', 'User Create Successfully');
            return Redirect::to('/profile');
        } else {
            Session::flash('message', 'Your email or password is invalid');
            return Redirect::to('/profile');
        }
    }

    public function updateUser(Request $request) {
        $user_update = Admin::find($request->userId);
        $user_update->admin_name = $request->admin_name;
        $user_update->admin_email = $request->admin_email;
        $user_update->access_lavel = $request->access_lavel;
        $user_update->save();
        Session::flash('message', 'User Create Successfully');
        return Redirect::to('/add-List');
    }

    public function userDelete($id) {
        DB::table('admins')
                ->where('id', $id)
                ->delete();
        Session::flash('message', 'User Delete Successfully');
        return Redirect::to('/add-List');
    }

    public function adminLogin(Request $request) {
        echo 'in super';
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $admin = DB::table('admins')
                ->where('admin_email', $admin_email)
                ->where('admin_password', $admin_password)
                ->first();
        if ($admin) {
            Session::put('adminid', $admin->id);
            Session::put('admin_name', $admin->admin_name);
            return Redirect::to('/dashboard');
        } else {
            Session::flash('message', 'Your email or password is invalid');
            return Redirect::to('/');
        }
    }

}
