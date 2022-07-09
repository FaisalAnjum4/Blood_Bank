<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMSBlood;
use App\Models\UMSinfo;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{

    function homepage(){
        return view("forall");

    }

    function signupok(){
        $user = UMSBlood::where('id',session()->get('logged'))->first();
        if($user){
            session()->put('logged',$user->id);
                return redirect()->route('dashboard');
       
        }
        else
         {
            return view("signupin");
         }

    }

    function signupvalidateok(Request $req){
        $this->validate($req,
            [
                "name"=>"required",
                "phone"=>"required",
                "email"=>"required|unique:user,email",
                "batch"=>"required",
                "address"=>"required",
                'password' => 'required|min:6',
                //"conf_password"=>"required|same:password",
                "gender"=>"required",
            ],
            [
                "name.required"=>"Please provide your name",
                "password.min"=>"Minimum 6 characters",
                "password.regex"=>"Must contains a UPPERCASE, a lowercase, and digit",
                "email.unique"=>"This email is already exists",
                //"id.regex"=>"Id must be in integer",
                //"name.regex"=>"Only alphabetic",
                //"password.regex"=>"Password minimum 8 characters, contains a uppercase, a lowercase, a number & a special character"
            ]);
            $customer = new UMSBlood();
            $customer->name = $req->name;
            $customer->batch =$req->batch;
            $customer->address =$req->address;
            $customer->phone =$req->phone;
            $customer->email =$req->email;
            $customer->password = $req->password;
            $customer->gender = $req->gender;
            $customer->save();
            //session()->flash('msg','successfull');
            //return back();
            return redirect()->route("loginpageok");
           
    }
    function loginok(){
        
        $user = UMSBlood::where('id',session()->get('logged'))->first();
        if($user){
            session()->put('logged',$user->id);
                return redirect()->route('dashboard');
       
        }
        else
         {
            return view("login");
         }
       
        }

        function loginSubmit(Request $req){
            $this->validate($req,
                [
                 
                    "email"=>"required|exists:user,email",
                    'password' => 'required|exists:user,password',
                    
                ],
                [
                    "email.required"=>"Please provide your email",
                    "email.exists"=>"The email is incorrect",
                    //"nasme.regex"=>"Only alphabetic",
                    //"password.regex"=>"Password minimum 8 characters, contains a uppercase, a lowercase, a number & a special character"
                ]);
                $user =UMSBlood::where('email',$req->email)
                ->where('password',$req->password)->first();

                
            if($user){
                //session()->flash('msg','User Exists');
                session()->put('logged',$user->id);
                return redirect()->route('dashboard');
            //return "<h1>okay</h1>";
        }
            else {
              session()->flash('msg','User not valid');
            return back();
            } 
               
        }
    
        function dashboard(){
        
            $user=session()->get('logged');
            $myupdate=DB::table('info')
            ->join('user','info.u_id','=','user.id')
            ->where('user.id',$user)
            ->select('info.*','user.*')
            ->paginate(7);
            
            return view('dashboard')->with('allinfos',$myupdate);
   
    }

    function dashboardSubmit(Request $req){
        
        $this->validate($req,
            [
             
            
                'bloodgroup' => 'required',
                
                'date'=>'required',
                'disorder'=>'required',
                
            ],
            [
                //"email.required"=>"Please provide your email",
                //"email.exists"=>"The email is incorrect",
                //"nasme.regex"=>"Only alphabetic",
                //"password.regex"=>"Password minimum 8 characters, contains a uppercase, a lowercase, a number & a special character"
            ]);
            $user=session()->get('logged');
            $info = new UMSinfo();
            $info->bloodgroup =$req->bloodgroup;
            $info->disorder =$req->disorder;
            $info->date =$req->date; 
            $info->u_id =$user;
            $info->save();
            return redirect()->route('dashboard');

            
                                          
           
    }
    function view(){
         //   return view('view')->with('allinfos',$allinfo);
    
            $allinfo=DB::table('info')
            ->join('user','info.u_id','=','user.id')
            //->where('products.S_id',$user)
            ->select('info.*','user.*')
            ->paginate(7);
            
            return view('view')->with('allinfos',$allinfo);
        }

        function search(Request $req){

            $allinfo=DB::table('info')
            ->join('user','info.u_id','=','user.id')
            ->where('name','like','%'.$req->input('searchbox').'%')
            ->orwhere('bloodgroup','like','%'.$req->input('searchbox').'%')
            ->orwhere('date','like','%'.$req->input('searchbox').'%')
            ->orwhere('address','like','%'.$req->input('searchbox').'%')
            ->orwhere('batch','like','%'.$req->input('searchbox').'%')
            ->select('info.*','user.*')
            ->paginate(7);
            
            return view('view')->with('allinfos',$allinfo);
            
        }

       /* function myupdate(){
            $user=session()->get('logged');
                $myupdate=DB::table('info')
                ->join('user','info.u_id','=','user.id')
                ->where('user.id',$user)
                ->select('info.*','user.*')
                ->paginate(7);
                
                return view('dashboard')->with('allinfos',$myupdate);
            }
*/
            public function destroy($i_id) {
                UMSinfo::destroy($i_id);
                 return redirect()->route('dashboard');
             }





}
