<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    
<!-- <style>
    body {
        background-image: url(https://images.pexels.com/photos/1450360/pexels-photo-1450360.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
</style> -->
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<body style="background-color:powderblue;>
    <div class="container">
    <div class="row">
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
    <a class="navbar-brand" href="/admin/admindashboard" >Back</a>
    </div>
    </nav>
    </div>

		<div class="row" style="margin-top:45px">
           <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
           <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <i><center><h2>Faculty Register </h2><br></center></i>
				<form action="{{ route('auth.save') }}" method="post"  enctype="multipart/form-data">

                @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
                @endif

            
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                <div class="form-group">
                     <label><b>Name</b></label>
                     <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name')}}">
                     <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                 </div>
                <div class="form-group">
                     <label><b>Email</b></label>
                     <input type="text" class="form-control" name="email" placeholder="Enter email address"
                     value="{{ old('email') }}">
                     <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                 </div>
                 <div class="form-group">
                     <label><b>Subject Teaching</b></label>
                     <input type="text" class="form-control" name="subject" placeholder="Enter the Suject"
                     value="{{ old('subject') }}">
                     <span class="text-danger">@error('subject'){{ $message }} @enderror</span>
                 </div>
                 <div class="form-group">
                     <label><b>Phone No</b></label>
                     <input type="text" class="form-control" name="phoneno" placeholder="Enter the Phone No"
                     value="{{ old('phoneno') }}">
                     <span class="text-danger">@error('phoneno'){{ $message }} @enderror</span>
                 </div>
                 <div class="form-group">
                     <label><b> Qualification</b></label>
                     <input type="text" class="form-control" name="qualification" placeholder="Enter the qualification"
                     value="{{ old('qualification') }}">
                     <span class="text-danger">@error('qualification'){{ $message }} @enderror</span>
                 </div>

                 
                
                 <div class="form-group">
                     <label><b>password</b></label>
                     <input type="password" class="form-control" name="password" placeholder="Enter password"
                     value="{{ old('password') }}">
                     <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                 </div>
                 <div class="form-group">
                     <label><b>PROFILE PHOTO</b></label>
                     <input type="file" class="form-control" name="facphoto" >
                     <span class="text-danger">@error('facphoto'){{ $message }} @enderror</span>
                 </div>
                 <br>
                 <button type="submit" class="btn btn-block btn-primary">Register</button>
                  <br>
                </form>
             </div>
             <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   </body>
   </html>
