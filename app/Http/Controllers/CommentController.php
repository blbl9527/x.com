<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Consumer;
use App\Models\Producer;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = Input::all();
        // "description" => "好评！~"
        // "commentby" => "consumer"
        // "commentbyid" => "1"
        // "commentforid" => "1"
        // "serviceid" => "7"
        $ts = Service::where('id',$inputs['serviceid'])->first();
        if(is_null($ts)){
            //非法评论，调回初始地方
            return redirect()->action("LoginController@getStart"); 
        }
        if($inputs['commentby']=="consumer"){ //是消费者发起的评论
            $tc = Consumer::where('id',session('userid'))->first();
            $tp = Producer::where('id',$inputs['commentforid'])->first();
            if(($ts->pid === $tp->id) &&($ts->cid === $tc->id)){
                //此时数据无异常
                $t = new Comment;
                $t->description = $inputs['description'];
                $t->commentby = "consumer";
                $t->commentbyid = session('userid');
                $t->commentforid = $ts->pid;
                $t->serviceid = $ts->id;
                if($t->save()){
                    $ts->ccomment = 1;
                    $ts->save();
                    return redirect()->action('LoginController@getStart');
                }
            }else{

                return redirect()->action('LoginController@getStart');
            }
        }
        if($inputs['commentby']=="producer"){ //是生产者发起的评论 

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
