<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Producer;
use Input;
use App\Models\Work;
use App\Models\Time;
use App\Models\Area;
use App\Models\Service;
use App\Models\Consumer;


class ProducerController extends Controller
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
        $t = Producer::where('username',session('username'))->first();
        if(is_null($t) || session('usertype') !=='producer'){
            return redirect()->action('LoginController@getStart');
        }

        //刚发布的
        $services_s1 = Service::where('pid',$t->id)->where(function($query){
            $query->where('status','1');
        })->get();
        $services_s1 = $this->id_2_name($services_s1);

        //选择我的
        $services_s2 = Service::where('pid',$t->id)->where(function($query){
            $query->where('status','2');
        })->get();
        $services_s2 = $this->services_s2_id_2_name($services_s2);


        $services_s3 = Service::where('pid',$t->id)->where(function($query){
            $query->where('status','3');
        })->get();
        //dd($services_s3); //debug 
        $station = [];
        foreach($services_s3 as $item){
            $station[]=[
                'id' => $item->id,
                'work' => Work::where('id',$item->workid)->first()->name,
                'time' => Time::where('id',$item->timeid)->first()->name,
                'area' => Area::where('id',$item->areaid)->first()->name,
                'salary' => $item->salary,
                'email' => $item->email,
                'phone' => $item->phone,
                'about' => $item->about,
                'status' => $this->n_2_string($item->status),
                'cid' => $item->cid,
                'cname' => Consumer::where('id',$item->cid)->first()->name,
                'pid' => $item->pid,
                'pcomment'=>$item->pcomment,
                'ccomment'=>$item->ccomment,
            ];
        }
        $services_s3=$station;
        //dd($services_s3); //debug


        $services_s4_c0 = Service::where('pid',$t->id)->where(function($query){
            $query->where('status','4')->where(function($query){
                $query->where('pcomment',0);
            });
        })->get();
        //dd($services_s4_c0); //debug
        $station = [];
        foreach($services_s4_c0 as $item){
            $station[]=[
                'id' => $item->id,
                'work' => Work::where('id',$item->workid)->first()->name,
                'time' => Time::where('id',$item->timeid)->first()->name,
                'area' => Area::where('id',$item->areaid)->first()->name,
                'salary' => $item->salary,
                'email' => $item->email,
                'phone' => $item->phone,
                'about' => $item->about,
                'status' => $this->n_2_string($item->status),
                'cid' => $item->cid,
                'cname' => Consumer::where('id',$item->cid)->first()->name,
                'pid' => $item->pid,
                'pcomment'=>$item->pcomment,
                'ccomment'=>$item->ccomment,
            ];
        }
        $services_s4_c0=$station;
        //dd($services_s4_c0); //debug

        $services_s4_c1 = Service::where('pid',$t->id)->where(function($query){
            $query->where('status','1')->where(function($query){
                $query->where('pcomment',1);
            });
        })->get();
        //dd( $services_s4_c1); //debug
        $station = [];
        foreach($services_s4_c1 as $item){
            $station[]=[
                'id' => $item->id,
                'work' => Work::where('id',$item->workid)->first()->name,
                'time' => Time::where('id',$item->timeid)->first()->name,
                'area' => Area::where('id',$item->areaid)->first()->name,
                'salary' => $item->salary,
                'email' => $item->email,
                'phone' => $item->phone,
                'about' => $item->about,
                'status' => $this->n_2_string($item->status),
                'cid' => $item->cid,
                'cname' => Consumer::where('id',$item->cid)->first()->name,
                'pid' => $item->pid,
                'pcomment'=>$item->pcomment,
                'ccomment'=>$item->ccomment,
            ];
        }
        $services_s4_c1=$station;
        //dd($services_s4_c1); //debug

        //dd($services_s1); //debug
        $data=[
            'username' => $t->name,
            'services_s1' => $services_s1,
            'services_s2' => $services_s2,
            'services_s3' => $services_s3,
            'services_s4_c0' => $services_s4_c0,
            'services_s4_c1' => $services_s4_c1,
        ];

        return view('producer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producer.reg');
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
            return view('producer.reg',['msg'=>'两次密码不一致！']);
        }else{
            $user = new Producer;
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
        return view('producer.modifypw');
    }

    public function getModifyMe(){
        //should get the information and return to the view
        return view('producer.modifyme');
    }

    public function getCreate(){
        //get something and return to the view 
        $works = Work::all();
        $times = Time::all();
        $areas = Area::all();

        $producer = Producer::where('username',session('username'))->first();
        if(is_null($producer) || session('usertype') !=='producer'){
            return redirect()->action('LoginController@getStart');
        }
        
        $data=[
            'works' => $works,
            'times' => $times,
            'areas' => $areas,
            'pid' => $producer->id,
        ];
        return view('producer.create',$data);
    }

    //this method provide information for consumer about the producer.
    public function getShow($id){
        echo $id;
        return view('producer.show');
    }

    //this method create a form to post a comment, of course it's for a producer
    //maybe this method is not belong to this controller
    //but i can not configure a really better way
    //id is the work-item id
    public function getCommentForm($id){
        //although this method is not at the best place.
        //but ...
        return view('producer.addcomment');
    }

    private function n_2_string($n){
        switch($n){
            case 1:
                return '发布';
                break;
            case 2:
                return '被选择';
                break;
            case 3:
                return '服务中';
                break;
            case 4:
                return '结束';
                break;
        }
    }

    private function id_2_name($arr=[]){
        $station = [];
        
        foreach($arr as $item){
            $temp = $item->pid;
            if( $item->cid === -1){
                $temp = 1;
            }
            $station[]=[
                'id' => $item->id,
                'work' => Work::where('id',$item->workid)->first()->name,
                'time' => Time::where('id',$item->timeid)->first()->name,
                'area' => Area::where('id',$item->areaid)->first()->name,
                'salary' => $item->salary,
                'email' => $item->email,
                'phone' => $item->phone,
                'about' => $item->about,
                'status' => $this->n_2_string($item->status),
                'cid' => $temp,
                'cname' => Consumer::where('id',$temp)->first()->name,
                'pid' => $item->pid,
                'pcomment'=>$item->pcomment,
                'ccomment'=>$item->ccomment,
            ];
        }
        return $station;
    }

    //选择我的数据，把数组转换成文字 
    private function services_s2_id_2_name($arr=[]){
        $station = [];
        foreach($arr as $item){
            $consumer = Consumer::where('id',$item->cid)->first();
            $station[]=[
                'cname' => $consumer->name ,
                'aboutconsumerurl' => url('other/showc/'.$consumer->id),
                'work' => Work::where('id',$item->workid)->first()->name,
                'time' => Time::where('id',$item->timeid)->first()->name,
                'salary' => $item->salary,
                'area' => Area::where('id',$item->areaid)->first()->name,
                'toworkurl' => url('other/towork/'.$item->id) ,
            ];
        }
        return $station;
    }

}
