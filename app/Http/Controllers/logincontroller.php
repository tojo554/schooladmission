<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\admission;
use Illuminate\Support\Facades\Hash;
class logincontroller extends Controller
{
    
    function login()
    {
       return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function admindashboard(){
      return view('admin.admindashboard');
    }

    function index(){
        return view('index');
    }
    function contact(){
      return view('contact');
    }
    function about(){
      return view('about');
    }
    function teacher(){
      return view('teacher');
    }
    function blog(){
      return view('blog');
    }
    function facilities(){
      return view('facilities');
    }
    
    public function applicationview()
    {
     $admission=admission::all();
    // $data=['LoggedUserinfo'=>Admin::where('id','=',session('loggeduser'))->first()];
     return view('admin.facstudentview',compact('admission'));
     }

     public function studentview()
     {
      $admission=admission::all();
     // $data=['LoggedUserinfo'=>Admin::where('id','=',session('loggeduser'))->first()];
      return view('admin.studentview',compact('admission'));
      }


     public function facultyview()
    {
         $admin=admin::all();
           // $data=['LoggedUserinfo'=>Admin::where('id','=',session('loggeduser'))->first()];
         return view('admin.facultyview',compact('admin'));
    }
   
         function save(Request $request)

         {
           //validate requests
           $request->validate([
            'name'=>'required',
            'email'=>'required|email| unique:admins',
            'subject'=>'required',
            'phoneno'=>'required|min:10|max:10 |unique:admins',
            'qualification'=>'required',
            'password'=>'required|min:5',
            'facphoto'=>'required'
         ]);  
       
      
          //Insert data into database

          $admin = new Admin();
          $admin->name =$request->name;
          $admin->email =$request->email;
          $admin->subject=$request->subject;
          $admin->phoneno =$request->phoneno;
          $admin->qualification=$request->qualification;
          $admin->password=Hash::make($request->password);

          if($request->hasfile('facphoto')){
            $file=$request->file('facphoto');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/facphotos/', $filename);
            $admin->facphoto=$filename;
 
         } else{
             return $request;
             $admin->facphoto='';
         }

            $save = $admin->save();

        if($save)
            {
                return back()->with('success','New User has been successfully added to database');
            }
        else
          {
                return back()->with('fail','Something went wrong,try again later');
          }

    }
      function check(Request $request){
          //validate requests
          $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5'
          ]);
              $userInfo = Admin::where('email','=',$request->email)->first();

          if($request->email=='admin@gmail.com' && $request->password=='admin')
            {
              $request->session()->put('LoggedUser','admin');
              return redirect('/admin/admindashboard');
            }
        else
        {
          if(!$userInfo)
              {
               return back()->with('fail','We do not recognize your email address');
             }
             else
              {
                  //check password
                  if(Hash::check($request->password, $userInfo->password))
                   {
                   $request->session()->put('LoggedUser',$userInfo->email);
                   return redirect('admin/dashboard');                                     //change
                   }
                 else
                  {
                    return back()->with('fail','Invalid User');
                   } 
               }
             }
         }
          function logout()
           {
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/');
            }
            else
            {
              return redirect('/');
            }
            
        }

          function dashboard(){
              $data = ['LoggedUserInfo'=>Admin::where('email','=',session('LoggedUser'))->first()];
              return view('admin.dashboard',$data);
            }




          
          function edit($id)
            { 
            $admin=admin::find($id);
            return view('admin.facultyeditview',compact('admin')); 
            }  
         
         public function update(Request $request, $id)
          {
          $admin=admin::find($id);

           /* 'name'=>'required',
            'email'=>'required|email ',
            'subject'=>'required',
            'password'=>'required|min:5|max:12'  */

          $admin->name =$request->name;
          $admin->email =$request->email;
          $admin->subject=$request->subject;
          $admin->phoneno =$request->phoneno;
          $admin->qualification=$request->qualification;


          // if($request->hasfile('pimage'))         
          // { $file = $request->file('pimage');            
          //    $extension = $file->getClientOriginalextension();             
          //    $file->move(public_path('assets/project_img'),$extension);             $prod->pimage=$extension;         }

          // $admin->password=Hash::make($request->password);
          if($request->hasfile('facphoto')){
            $file=$request->file('facphoto');
            $extension=$file->getClientOriginalExtension();
            // $filename=time() . '.' . $extension;
            $file->move('uploads/facphotos/', $extension);
            $admin->facphoto=$extension;
              } 
            

            $admin->save();
  
          return redirect('/admin/facultyview');
         }

         function deleteview($id)
         {
          $admin=admin::find($id);
          return view('admin.facultydeleteview',compact('admin'));
         }
         
         function destroy($id)
         {
          $admin=admin::find($id);
          $admin->delete();
          return redirect('/admin/facultyview');
         }

    }