<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\admissioncontroller;

Route::get('',function()
{
    return view('welcome');
});




//Route::get('/pricing',[logincontroller::class,'pricing'])->name('pricing');
//Route::get('/blog',[logincontroller::class,'blog'])->name('blog');


        //admins Routes

Route::post('/auth/save',[loginController::class,'save'])->name('auth.save');
Route::post('/auth/check',[loginController::class,'check'])->name('auth.check');
Route::get('/admin/logout',[logincontroller::class,'logout'])->name('auth.logout');


Route::post('/updatefaculty/{id}',[loginController::class,'update']);

Route::post('/destroyfaculty/{id}',[loginController::class,'destroy']);
   
    
              //admission routes


Route::post('/student/save',[admissioncontroller::class,'save'])->name('student.save');
Route::post('/student/check',[admissioncontroller::class,'check'])->name('student.check');
Route::get('/student/logout',[admissioncontroller::class,'logout'])->name('student.logout');


Route::post('/updatestudent/{id}',[admissioncontroller::class,'update']);

Route::post('/destroystudent/{id}',[admissioncontroller::class,'destroy']);

//Route::get('/admin/viewapplication',[loginController::class , 'applicationview' ] );  //application view in fac
   

    Route::get('/editstudent/{id}/edit',[admissioncontroller::class,'edit']);  
    Route::get('/delete/{id}',[admissioncontroller::class,'deleteview']);
    Route::get('/edit/{id}/edit',[loginController::class,'edit']);   
    Route::get('/delete/{id}/delete',[loginController::class,'deleteview']);

    



    Route::get('/',[logincontroller::class,'index'])->name('index');

 
    route::group(['middleware'=>['AuthCheck']],function()
     {

    route::get('/auth/login',[LoginController::class,'login'])->name('auth.login');
    Route::get('/student/slogin',[admissioncontroller::class,'slogin'])->name('student.slogin');
    Route::get('/home',[admissioncontroller::class,'home'])->name('student.home');
    
      //template route
    Route::get('/about',[logincontroller::class,'about'])->name('about');
    Route::get('/contact',[logincontroller::class,'contact'])->name('contact');
    Route::get('/teacher',[logincontroller::class,'teacher'])->name('teacher');
    Route::get('/facilities',[logincontroller::class,'facilities'])->name('facilities');
    Route::get('/student/admissionform',[admissioncontroller::class,'admissionform'])->name('student.admissionform');


    route::get('/auth/register',[loginController::class,'register'])->name('auth.register');
   
    
    
    route::get('/admin/admindashboard',[loginController::class,'admindashboard'])->name('admin.admindashboard');
    Route::get('/admin/studentview',[loginController::class , 'studentview' ] );
    Route::get('/admin/facultyview',[loginController::class , 'facultyview' ] );
    

     
    route::get('/admin/dashboard',[loginController::class,'dashboard']);
    
     });
    
    
                //Student middleware

  // route::group(['middleware'=>['studentcheck']],function()
  // {


    

  // });
