<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Input;
use App\Models\Work;
use App\Models\Time;
use App\Models\Area;
use App\Models\Producer; 
use App\Models\Consumer;

class ServiceController extends Controller
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
        //dd($inputs); //debug
        $t = new Service;
        $t->workid = $inputs['workid'];
        $t->timeid = $inputs['timeid'];
        $t->areaid = $inputs['areaid'];
        $t->salary = $inputs['salary'];
        $t->email = $inputs['email'];
        $t->phone = $inputs['phone'];
        $t->about = $inputs['other'];
        $t->status = 1;
        $t->cid = -1;
        $t->pid = $inputs['pid'];
        $t->pcomment = 0;
        $t->ccomment = 0;

//------------------------------------------------------------------------------------
        //这一部分数据是视图需要，顾提供之，免报错, 毕竟插入数据库后，返回的页面
        //还是之前那个页面是最好的选择，于是乎，不可避免的在此进行查询。
        $works = Work::all();
        $times = Time::all();
        $areas = Area::all();

        $producer = Producer::where('username',session('username'))->first();
        if(is_null($producer) || session('usertype') !=='producer'){
            return redirect()->action('LoginController@getStart');
        }
//--------------------------------------------------------------------------------------
        if($t->save()){
            $msg = '发布成功，3秒后自动跳转';
            $type="refresh";
            $value="3;url=".url('/producer');

            $data=[
            'works' => $works,
            'times' => $times,
            'areas' => $areas,
            'pid' => $producer->id,
            'msg' => $msg,
        ];
            return response()->view('producer.create',$data)->header($type,$value);
        }else{
            $msg = '发布失败，请稍后再试，3秒后自动跳转';
            $type="refresh";
            $value="3;url=".url('/producer');

            $data=[
            'works' => $works,
            'times' => $times,
            'areas' => $areas,
            'pid' => $producer->id,
            'msg' => $msg,
        ];
            return response()->view('producer.create',$data)->header($type,$value);
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
        echo "hello world"; //debug;
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
        $inputs = Input::all();
        $ts_ = Service::where('id',$inputs['id'])->first();
        if(is_null($ts_)){
            //以后打算整个404page，替换一下
            return redirect()->action('LoginController@getStart');
        }

        $ts_->status = $inputs['status'];
        if(isset($inputs['cid'])){
            $ts_->cid = $inputs['cid'];
        }

        if(isset($inputs['a']) && $ts_->save()){// 说明是消费者订阅工作
            $data = $this->construct_arr_for_update($id);
            return response()->view('consumer.getDetail',['data'=>$data])->header('refresh','3;'.url('/consumer'));
        }
        if(isset($inputs['b']) && $ts_->save()){//服务提供者去服务
            $data = $this->construct_arr_for_update($id);
            return response()->view('producer.toWork',['data'=>$data])->header('refresh','3;'.url('/producer'));
        }
        if(isset($inputs['c']) && $ts_->save()){//消费者取消选择
            $data = $this->construct_arr_for_update($id);
            return response()->view('consumer.ccancel',['data'=>$data])->header('refresh','3;'.url('/consumer'));
        }
        if(isset($inputs['d']) && $ts_->save()){//消费者结束雇佣，单方面完成交易
             $data = $this->construct_arr_for_update($id);
            return response()->view('consumer.getDetail',['data'=>$data])->header('refresh','3;'.url('/login/start'));
        }

        
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

    public function getDetail($sid,$cid){

       if($this->check_($sid,$cid)){

            $ts = Service::where('id',$sid)->first();
            $tp = Producer::where('id',$ts->pid)->first();
            $data=[
                'id' => $sid,
                'name' => $tp->name,
                'work' => Work::where('id',$ts->workid)->first()->name,  
                'time' => Time::where('id',$ts->timeid)->first()->name,   
                'salary' => $ts->salary,
                'area' => Area::where('id',$ts->areaid)->first()->name,
                'about' => $ts->about,
                'aboutproducerurl' => url('other/showp/'.$ts->pid),
                'abtpurl' =>url('other/showp/'.$ts->pid),
                'phone' => $ts->phone,
                'email' => $ts->email,
            ];
            return view('consumer.getDetail',['data'=>$data]);
       }else{
            //如果非法途径进入，这从定向到个人主页！
            return redirect()->action('LoginController@getStart');
       }   
    }

    private function check_($sid,$cid){
        //看service 是否有效
        $ts = Service::where('id',$sid)->first();
        if(is_null($ts)){
            $ts = false;
        }else{
            if($ts->status === 1){
                $ts = true;
            }else{
                $ts = false;
            }
        }
        //看consumer 是否冒用别人id
        $tc = Consumer::where('id',$cid)->first();
        if(is_null($tc)){
            $ts = false;
        }else{
            if($tc->id === session('userid')){
                $tc = true;
            }else{
                $tc = false;
            }
            
        }
        return ($ts && $tc);
    }

    //this method for producer to work{actually update the status of service}
    //use /other/towork/{sid}
    public function toWork($sid){
        //first,check the $sid,whether it is a valid number
        if(!$this->check_sid($sid,2)){
            return redirect()->action('LoginController@getStart');
        }
        $t_ = Service::where('id',$sid)->first();

        $t_c = Consumer::where('id',$t_->cid)->first();
        $data=[
                'cname' => $t_c->name,
                'abtcurl' => url('other/showc/'.$t_c->id),
                'work' => Work::where('id',$t_->workid)->first()->name,
                'time' => Time::where('id',$t_->timeid)->first()->name,
                'salary' =>$t_->salary,
                'area' => Area::where('id',$t_->areaid)->first()->name,
                'id' => $sid,
                'about' => $t_->about,
                'phone' => $t_->phone,
                'email' => $t_->email,
        ];
        return view('producer.toWork',['data'=>$data]);
    }

    private function check_sid($sid,$status){
        $t0 = Service::where('id',$sid)->first();
        if(is_null($t0)){

            return false;
        }
        
        if($t0->status !== $status){
            return false;
        }

        if(session('userid') !== $t0->pid){
            return false;
        }

        return true;

    }

    private function construct_arr_for_update($id){
        //-------------------------------------------------------------------
            //或许聘请成功跳的刚才页面是比较好的选择，gu为那个视图提供数据
            $ts = Service::where('id',$id)->first();
            $tp = Producer::where('id',$ts->pid)->first();
            $tc = Consumer::where('id',$ts->cid)->first();
            if(is_null($tc)){
                $cname="x"; //debug fix
            }else{
                $cname=$tc->name;
            }
        //--------------------------------------------------------------------
                $data=[
                'id' => $ts->id,
                'name' => $tp->name,
                'cname' => $cname,
                'work' => Work::where('id',$ts->workid)->first()->name,  
                'time' => Time::where('id',$ts->timeid)->first()->name,   
                'salary' => $ts->salary,
                'area' => Area::where('id',$ts->areaid)->first()->name,
                'about' => $ts->about,
                'aboutproducerurl' => url('other/showp/'.$ts->pid),
                'abtpurl' =>url('other/showp/'.$ts->pid),
                'abtcurl' =>url('other/showc/'.$ts->cid),
                'phone' => $ts->phone,
                'email' => $ts->email,
                'msg' => '操作成功，三秒后自动跳转！',
                ];
                return $data;
                   
    }

    //this method for consumer to cancel a deal
    //other/cancel/{sid}
    public function cCancel($id){
       $sinfo = Service::where('id',$id)->first();
       $pinfo = Producer::where('id',$sinfo->pid)->first();
       $winfo = Work::where('id',$sinfo->workid)->first();
       $tinfo = Time::where('id',$sinfo->timeid)->first();
       $data=[
            'id' => $id,
            'name' =>$pinfo->name,
            'abtpurl'=>url('/other/showp/'.$pinfo->id),
            'area' =>Area::where('id',$sinfo->areaid)->first()->name,
            'work' =>$winfo->name,
            'time' =>$tinfo->name,
            'salary'=>$sinfo->salary,
            'phone'=>$sinfo->phone,
            'email'=>$sinfo->email,
            'about'=>$sinfo->about,
       ];
       return view('consumer.ccancel',['data'=>$data]);
    }

    //this method for consumer to terminate a deal
    //
    public function cTerminate($id){
        $sinfo = Service::where('id',$id)->first();
        $pinfo = Producer::where('id',$sinfo->pid)->first();
        $winfo = Work::where('id',$sinfo->workid)->first();
        $tinfo = Time::where('id',$sinfo->timeid)->first();
        $data=[
            'id' => $id,
            'name' =>$pinfo->name,
            'abtpurl'=>url('/other/showp/'.$pinfo->id),
            'area' =>Area::where('id',$sinfo->areaid)->first()->name,
            'work' =>$winfo->name,
            'time' =>$tinfo->name,
            'salary'=>$sinfo->salary,
            'phone'=>$sinfo->phone,
            'email'=>$sinfo->email,
            'about'=>$sinfo->about,
       ];
       return view('consumer.cterminate',['data'=>$data]);
    }


}
