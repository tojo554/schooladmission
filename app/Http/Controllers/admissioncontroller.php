<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admission;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class admissioncontroller extends Controller
{
    function slogin()
    {
        return view('student.slogin');
    }
    function admissionform()
    {
        return view('student.admissionform');
    }
    function table()
    {
        $admission=admission::all();
        // $data=['LoggedUserinfo'=>Admin::where('id','=',session('loggeduser'))->first()];
         return view('table',compact('admission'));
    }

    public function applicationview()
    {
     $admission=admission::all();
     $data = ['LoggedUserInfo'=>admission::where('id','=',session('LoggedUser'))->first()];
     return view('admin.facstudentview',$data);
     }


    function save(Request $request)
    {
        //return $request->input();

         //validate request
         $request->validate([
            'name'=>'required',
            'fathername'=>'required',
            'mothername'=>'required',
            'address'=>'required',
            'pincode'=>'required|min:6|max:6',
            'phoneno'=>'required|min:10|max:10',
            'email'=>'required|email|unique:admissions',
            'dateofbirth'=>'required',
            'class'=>'required',
            'gender'=>'required' 
         ]); 
   
           //Insert data into database
           $admission = new admission();
           $admission ->name =$request->name;
           $admission ->fathername =$request->fathername;	
           $admission ->mothername =$request->mothername;
           $admission ->address =$request->address;
           $admission ->pincode =$request->pincode;
           $admission ->phoneno =$request->phoneno;
           $admission ->email =$request->email;
           $admission ->dateofbirth =$request->dateofbirth;
           $admission ->class =$request->class;
           $admission->gender =$request->gender;
           //$admission ->status $request->status;
           $save= $admission->save();

            if($save)
            {   
                return back()->with('success','Application successfully added ');
            }
            else
            {  
                return back()->with('fail','Something went wrong , try again later');

            }
           
     }
            function check(Request $request)
         {
                   //validate requests
                 $request->validate([
                 'email'=>'required|email',
                 'password'=>'required' ]);


                 $userInfo = admission::where('email','=',$request->email)->first();
              
                 if(!$userInfo)
                {
                    return back()->with('fail','We do not recognize email address');
                }   
                else
            {
                        //check password

                    if (($request->password  == $request->email ))                           //&&($userInfo->email))
                    {
                      $request->session()->put('LoggedUser',$userInfo->email);
                      
                      return redirect('/home');                                             //change page
                    }
              else
                    {
                        return back()->with('fail','Invalid User');
                    } 
            
          }
         
      } 
      function logout()
           {
            if(session()->has('LoggedUser'))
            {
                session()->pull('LoggedUser');
                return redirect('/');
            }
          }
       function home()
    {
        $data = ['LoggedUserInfo'=>admission::where('email','=',session('LoggedUser'))->first()];
        return view('student.home',$data);
    }

    function edit($id)
         {
            
            $admission=admission::find($id);
            return view('admin.studenteditview',compact('admission'));
           
         }  

     function update(Request $request, $id)
         {
          $admission=admission::find($id);

             $admission ->name =$request->name;
        //   $admission ->fathername =$request->fathername;	
        //   $admission ->mothername =$request->mothername;
        //   $admission ->address =$request->address;
        //   $admission ->pincode =$request->pincode;
        //   $admission ->phoneno =$request->phoneno;
             $admission ->email =$request->email;
        //   $admission ->dateofbirth =$request->dateofbirth;
        //   $admission ->class =$request->class;
        //   $admission->gender =$request->gender;
             $admission ->status =$request->status;
  
             $admission->save();
             
             $admission=array(
                'name'=> $request->name,
                'email'=>$request->email,
                'status' =>$request->status
            );
    
            Mail::to($admission['email'])->send(new SendMail($admission));

  
            return redirect('/admin/studentview');
          
         }
         function deleteview($id)
         {
          $admission=admission::find($id);
          return view('admin.studentdeleteview',compact('admission'));
         }
         
         function destroy($id)
         {
          $admission=admission::find($id);
          $admission->delete();
          return redirect('/admin/studentview');
         }


}            