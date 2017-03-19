<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Consumer;
use App\Models\Producer;
use Cookie;

class LoginController extends Controller
{
    public function getStart(){
        if(session('username') != null){
            switch(session('usertype')){
                case 'producer':
                    return redirect()->action('ProducerController@index');
                    break;
                case 'consumer':
                    return redirect()->action('ConsumerController@index');
                    break;
                case 'admin':
                    return redirect()->action('AdminController@index');
                    break;
            }
        }
        return view('login');
    }

    public function postCheck(Request $request){

    	$inputs = $request->all();
    	if(isset($inputs['rememberme'])){
    		//查询数据库，并设置cookie到客户端
    		if($this->isProducer($inputs,true)){
    			$value="3;url=".url('/producer');
    			return response()->view('login',['msg'=>'登录成功，3秒后进行跳转'])->header('refresh', $value);
    		}else if($this->isConsumer($inputs,true)){
    			$value="3;url=".url('/consumer');
    			return response()->view('login',['msg'=>'登录成功，3秒后进行跳转'])->header('refresh', $value);
    		}else if($this->isAdmin($inputs,true)){
    			$value="3;url=".url('/admin');
    			return response()->view('login',['msg'=>'登录成功，3秒后进行跳转'])->header('refresh', $value);
    		}else {
    			//在数据库中，找不到正确的记录!
    			return  view('login',['msg'=>"账号或密码错误！"]);
    		}
    		
    		
    	}else{
    		//仅查询数据库，不设置cookie到客户端
    		if($this->isProducer($inputs)){
    			return redirect()->action('ProducerController@index');
    		}else if($this->isConsumer($inputs)){
    			return redirect()->action('ConsumerController@index');
    		}else if($this->isAdmin($inputs)){
    			return redirect()->action('AdminController@index');
    		}else{
    			//在数据库中，找不到正确的记录!
    			return  view('login',['msg'=>"账号或密码错误！"]);
    		}	
    	}
    }

    private function isProducer($arg=[],$setcookie=false){
    	$t = Producer::where('username',$arg['username'])->first();
    	if(is_null($t)){
    		return false;
    	}
    	if($t->password === $arg['password']){
    		if($setcookie){
    			echo "已经设置cookie了"; //debug
    			Cookie::forever('username', $arg['username']);
    			Cookie::forever('password', $arg['password']);
    		}
    		echo "登录成了producer"; ////debug
    		//set sessions
    		session(['username' =>  $arg['username']]);
    		session(['password' =>  $arg['password']]);
    		session(['usertype' =>  'producer']);
            $tid = Producer::where('username',$arg['username'])->first()->id;
            session(['userid' =>  $tid]);
    		return true;
    	}
    	return false;

    }
    private function isConsumer($arg=[],$setcookie=false){
    	$t = Consumer::where('username',$arg['username'])->first();
    	if(is_null($t)){
    		return false;
    	}
    	if($t->password === $arg['password']){
    		if($setcookie){
    			echo "已经设置cookie了"; //debug
    			Cookie::forever('username', $arg['username']);
    			Cookie::forever('password', $arg['password']);
    		}
    		echo "登录成了consumer"; //debug
    		//set sessionssession(['username' =>  $arg['username']]);
    		session(['username' =>  $arg['username']]);
    		session(['password' =>  $arg['password']]);
    		session(['usertype' =>  'consumer']);
            $tid = Consumer::where('username',$arg['username'])->first()->id;
            session(['userid' =>  $tid]);
    		return true;
    	}
    	return false;
    }
    private function isAdmin($arg=[],$setcookie=false){
    	$t = Admin::where('username',$arg['username'])->first();
    	if(is_null($t)){
    		return false;
    	}
    	if($t->password === $arg['password']){
    		if($setcookie){
    			echo "已经设置cookie了"; //debug
    			Cookie::forever('username', $arg['username']);
    			Cookie::forever('password', $arg['password']);
    		}
    		echo "登录成了admin"; //debug
    		//set sessions
    		session(['username' =>  $arg['username']]);
    		session(['password' =>  $arg['password']]);
    		session(['usertype' =>  'admin']);
            $tid = Admin::where('username',$arg['username'])->first()->id;
            session(['userid' =>  $tid]);
    		return true;
    	}
    	return false;
    }

    public function getLogout(Request $request){
        $request->session()->forget('username');
        $request->session()->forget('password');
        $request->session()->forget('usertype');
        return redirect()->action('LoginController@getStart');
    }



}
