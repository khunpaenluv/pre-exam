<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    function index(){
        $studens=DB::table('studens')->get();
    return view('about',compact('studens'));
    }
    function create(){
        return view('form');
    }
    function insert(Request $request){
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|max:50',

        ],
        [
            'name.required'=>'กรุณากรอกข้อมูล',
            'email.required'=>'กรุณากรอกข้อมูล'
        ]
        );
        $data=[
            'name'=>$request->name,
            'email'=>$request->email
        ];
        DB::table('studens')->insert($data);
        return redirect('/about');
    }
    function edit($id){
        $studens=DB::table('studens')->where('id',$id)->first();
        return view('edit',compact('studens'));
    }
    function update(Request $request,$id){
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|max:50',

        ],
        [
            'name.required'=>'กรุณากรอกข้อมูล',
            'email.required'=>'กรุณากรอกข้อมูล'
        ]
        );
        $data=[
            'name'=>$request->name,
            'email'=>$request->email
        ];
        DB::table('studens')->where('id',$id)->update($data);
        return redirect('/about');
    }
    function delete($id){
        DB::table('studens')->where('id',$id)->delete();
        return redirect('/about');
    }
}
