<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\admission;
use App\Models\Admin;

class Authcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    
    {

        $userinfo=admission::where('email','=',session('LoggedUser'))->first();
        $factinfo=Admin::where('email','=',session('LoggedUser'))->first();

        if(session()->has('LoggedUser') )
        {
            if(session('LoggedUser')=='admin')
            {
              if($request->path()!='auth/register' && $request->path()!='admin/admindashboard' && $request->path()!='admin/studentview' && $request->path()!='admin/facultyview'&& $request->path()!='edit/{id}/edit'&& $request->path()!='delete/{id}/delete'&& $request->path()!='editstudent/{id}/edit'&& $request->path()!='/delete/{id}')
                {

                   return back();
                }

            }
              else if($factinfo)
            {
                if($request->path()!='admin/dashboard' && $request->path()!='editstudent/{id}/edit'&& $request->path()!='delete/{id}' && $request->path()!='admin/studentview')
                {
                    return back();
                }

            }
             else
            {
                if($request->path()!='home')
                {
                    return back();
                }

            }



        }
   else
        {
            if($request->path()!='/' && $request->path()!='student/slogin'&& $request->path()!='auth/login'
            && $request->path()!='about' && $request->path()!='contact' && $request->path()!='teacher'
            && $request->path()!='facilities' && $request->path()!='student/admissionform' )
            {
                return redirect('/')->with ('fail','You must be logged in');
            }

        }
        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }

       // return $next($request);
    }

   