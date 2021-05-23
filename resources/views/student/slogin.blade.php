<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color:powderblue;"> 
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
    <a class="navbar-brand" href="/" >Home</a>
    <a class="navbar-brand" href="{{ route('student.admissionform')}}" >New Application</a>
    </div>
    </nav>
 <div class="bg-image"
  style=" background-image: url('https://images.pexels.com/photos/2835436/pexels-photo-2835436.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    height: 100vh; width:  " >
<div class="container">
        <div class="row">
         <br><br><br>

        </div>
		<div class="row" style="margin: top 200px;">
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            <div class="col col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 col-xxl-6">
                <b><center><h2>Login || Student </h2></center></b>
				<form action="{{ route('student.check') }}" method="post">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail')}}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                     <label><b>Email</b></label>
                     <input type="text" class="form-control" name="email" placeholder="Enter email address" values="{{ old('email') }}">
                     <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                 </div>
                 <div class="form-group">
                     <label><b>Password</b></label>
                     <input type="password" class="form-control" name="password" placeholder="Enter the password" values="{{ old('password') }}">
                     <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                 </div>
                 <br>
                 <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                  <br>
                 
                  <a href="{{ route('student.admissionform')}}">I didn't submitted an application, Apply New </a>
                </div>
                </form>
             </div>
             <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
             
        </div
   </div>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   </body>
   </html>
