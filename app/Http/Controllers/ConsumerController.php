<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Models\Consumer;
use App\Models\Service;
use App\Models\Producer;
use App\Models\Work;
use App\Models\Time;
use App\Models\Area;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo session('username').'3<br/>'; //debug
        //echo session('password').'4<br/>'; //debug
        //echo session('usertype').'5<br/>'; //debug 
        $t = Consumer::where('username',session('username'))->first();
        if(is_null($t) || session('usertype') !=='consumer'){
            return redirect()->action('LoginController@getStart');
        }

        //我选择的
        $services_s2 = Service::where('cid',$t->id)->where(function($query){
            $query->where('status','2');
        })->get();
        $services_s2 = $this->services_s2_id_2_name($services_s2);

        //服务中的
        $services_s3 = Service::where('cid',$t->id)->where(function($query){
            $query->where('status','3');
        })->get(); 
        $services_s3 = $this->services_s3_id_2_name($services_s3);

        //刚发布的
        $services_s1 = Service::where('status',1)->get();
        $services_s1 = $this->services_s1_id2name($services_s1);
        //dd($services_s1); //debug
        //未评价的
        $services_s3_c0 = Service::where('cid',$t->id)->where(function($query){
            $query->where('status',4)->where(function($query){
                $query->where('pcomment',0);
            });
        })->get();
        $services_s3_c0 = $this->services_s3_c0_id_2_name($services_s3_c0);

        //已完成的
        $services_s3_c1 = Service::where('cid',$t->id)->where(function($query){
            $query->where('status',4)->where(function($query){
                $query->where('pcomment',1);
            });
        })->get();
        $services_s3_c1 = $this->services_s3_c1_id_2_name($services_s3_c1);


        $data=[
            'username' => $t->name,
            'services_s2' => $services_s2,
            'services_s3' => $services_s3,
            'services_s1' => $services_s1,
            'services_s3_c0' =>  $services_s3_c0,
            'services_s3_c1' => $services_s3_c1,
        ];

        return view('consumer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumer.reg');
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

        if($inputs['password'] !==$inputs['passwordconform'] && $inputs['password']!== null ){
            //this function will redo with javascript 
            return view('producer.reg',['msg'=>'两次密码不一致，或密码为空！']);
        }else{
            $user = new Consumer;
            $user->name = $inputs['name'];
            $user->gender = $inputs['gender'];
            $user->username = $inputs['username'];
            $user->password = $inputs['password'];
            $user->email = $inputs['email'];
            $user->phone = $inputs['phone'];
            $user->privateprotected = $inputs['privateprotected'];
            $user->about = $inputs['aboutme'];
            if($user->save())
                return view('producer.reg',['msg'=>'注册成功，请登录到系统！']);
            else
                return view('producer.reg',['msg'=>'注册失败，请稍后再试！']);
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

    public function getModifyPW(){
        return view('consumer.modifypw');
    }

    public function getModifyMe(){
        //should get the information and return to the view
        return view('consumer.modifyme');
    }

    //this method provide information for producer about the consumer.
    public function getShow($id){
        return view('consumer.show');
    }

    //this method create a form to post a comment, of course it's for a producer
    //maybe this method is not belong to this controller
    //but i can not configure a really better way
    //id is the work-item id
    public function getCommentForm($id){
        //although this method is not at the best place.
        //but ...
        return view('consumer.addcomment');
    }

    private function  services_s1_id2name($arr=[]){
        $station=[];
        foreach($arr as $item){
             $tp = Producer::where('id',$item->pid)->first();
            $station[]=[

                'id' => $item->id,
                'work' => Work::where('id',$item->workid)->first()->name,
                'time' => Time::where('id',$item->timeid)->first()->name,
                'area' => Area::where('id',$item->areaid)->first()->name,
                'name' => Producer::where('id',$item->pid)->first()->name,
                'abtpurl'=> url('other/showp/'.$tp->id),
                'url' => url('/service/'.$item->id.'/'.session('userid')),
                'salary' => $item->salary,
                'cid' => Consumer::where('username',session('username'))->first()->id,
            ];
        }
        return $station;
    }

    private function services_s2_id_2_name($arr=[]){
        $stn = [];
        foreach($arr as $item){
            $tp = Producer::where('id',$item->pid)->first();
            $stn[]=[
                'pname' => $tp->name,
                'abtpurl'=> url('other/showp/'.$tp->id),
                'time' =>Time::where('id',$item->timeid)->first()->name,
                'work'=>Work::where('id',$item->workid)->first()->name, 
                'salary'=>$item->salary,
                'area'=>Area::where('id',$item->areaid)->first()->name,
                'cancelurl'=>url('other/cancel/'.$item->id), 
            ];
        }
        return $stn;
    }

    private function services_s3_id_2_name($arr=[]){
        $IamSotired=[];
        foreach($arr as $item){
            $tp = Producer::where('id',$item->pid)->first();
            $IamSotired[]=[
                'pname' => $tp->name,
                'abtpurl'=> url('other/showp/'.$tp->id),
                'time' =>Time::where('id',$item->timeid)->first()->name,
                'work'=>Work::where('id',$item->workid)->first()->name, 
                'salary'=>$item->salary,
                'area'=>Area::where('id',$item->areaid)->first()->name,
                'terminateurl'=>url('other/terminate/'.$item->id),  
            ];
        }
        return $IamSotired;
    }

    private function services_s3_c0_id_2_name($arr = []){
        $Iamhungery=[];
        foreach($arr as $item){
            $tp = Producer::where('id',$item->pid)->first();
            $Iamhungery[]=[
                'pname' => $tp->name,
                'abtpurl'=> url('other/showp/'.$tp->id),
                'time' =>Time::where('id',$item->timeid)->first()->name,
                'work'=>Work::where('id',$item->workid)->first()->name, 
                'salary'=>$item->salary,
                'area'=>Area::where('id',$item->areaid)->first()->name,
                'ccommenturl'=>url('other/caddcomment/'.$item->id),  
            ];
        }
        return $Iamhungery;
    }

    private function services_s3_c1_id_2_name($arr = []){
        $Ilikecoding = [];
        foreach($arr as $item){
            $tp = Producer::where('id',$item->pid)->first();
            $Ilikecoding[]=[
                'pname' => $tp->name,
                'abtpurl'=> url('other/showp/'.$tp->id),
                'time' =>Time::where('id',$item->timeid)->first()->name,
                'work'=>Work::where('id',$item->workid)->first()->name, 
                'salary'=>$item->salary,
                'area'=>Area::where('id',$item->areaid)->first()->name,
            ];
        }
        return $Ilikecoding;
    }

}
