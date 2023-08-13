<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{


    public function index(){
        $data=DB::table('contact')->get();
        return view('data',compact('data'));
    }

    public function insert(Request $request)
    {


            DB::table('contact')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message

            ]);

            return response('Stored Successfully');

    }

        public function edit($id){
        $info=DB::table('contact')->where('id',$id)->first();
            return view('edit',compact('info'));

        }
        public function delete($id){
        DB::table('contact')->where('id',$id)->delete();
//        return redirect('contact');
            return response('Deleted Successfully');

        }

//        public function deleteAll(){
//            DB::table('contact')->delete();
//            return response('All Deleted Successfully');
//
//
//        }

    public function deleteAllTruncate(){
        DB::table('contact')->truncate();
        return response('All Deleted Successfully');


    }
    }
