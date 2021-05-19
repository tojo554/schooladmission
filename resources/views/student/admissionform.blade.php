<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
</head><a href=""></a>
<body style="background-color:powderblue;"> 

    <nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
    <a class="navbar-brand" href="/" >Home</a>
    <a class="navbar-brand" href="/student/slogin" >Login</a>
    </div>
    </nav>
	<div class="container">
    <div class="row" style ="margin-top:150px">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <br> <br> <br>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <h3><center>APPLICATION FORM</center></h3><br>
            <center><a href="{{ route('student.slogin')}}">I have already submitted, Login </a></center><br>


				<form action="{{ route('student.save') }}" method="post">
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
                <table class="table table-borderless">
                <tr>
                        <td>STUDENT NAME</td>
                        <td><input name="name" type="text" class="form-control" placeholder="Enter the full name" value="{{ old('name')}}"> <span class="text-danger">@error('name'){{ $message }} @enderror</span></td>
                       
                 </tr>
                 <tr>
                        <td>FATHER NAME</td>
                        <td><input name="fathername" type="text" class="form-control"placeholder="Enter the father name" value="{{ old('fathername')}}">
                        <span class="text-danger">@error('fathername'){{ $message }} @enderror</span>
                        </td>
                        </tr>
                <tr>
                        <td>MOTHER NAME</td>
                        <td><input name="mothername" type="text" class="form-control" placeholder="Enter the mother name"value="{{ old('mname')}}">
                        <span class="text-danger">@error('mothername'){{ $message }} @enderror</span>
                        </td>
                   
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td> 
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Enter the address"
                     value="{{ old('address')}}"></textarea>
                     </div>
                     <span class="text-danger">@error('address'){{ $message }} @enderror</span></td>      
                </tr>
                <tr>
                    <td>PIN CODE</td>
                    <td><input name="pincode" type="text" class="form-control" placeholder="Enter the pincode"
                    value="{{ old('pincode')}}">
                    <span class="text-danger">@error('pincode'){{ $message }} @enderror</span>
                    </td>
                   
                </tr>
                 <tr>
                     <td>PHONE NO</td>
                     <td><input name="phoneno" type="text" class="form-control" placeholder="Enter the PhoneNo"
                     value="{{ old('phoneno')}}">
                     <span class="text-danger">@error('phoneno'){{ $message }} @enderror</span>
                     </td>      
                </tr>
                 <tr>
                     <td>EMAIL ID</td>
                     <td><input name="email" type="text" class="form-control" placeholder="Enter the email address"
                     value="{{ old('email')}}">
                     <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                     </td>                   
                </tr>
                <tr>
                     <td>DATE OF BIRTH</td>
                     <td><input name="dateofbirth" type="date" class="form-control" placeholder=""value="{{ old('dateofbirth')}}">
                     <span class="text-danger">@error('dateofbirth'){{ $message }} @enderror</span>
                     </td>                   
                </tr>     
                 <tr>
                     <td>CLASS </td>
                     <td><input name="class" type="text" class="form-control" placeholder="class in which admission is sought"
                     value="{{ old('class')}}">
                     <span class="text-danger">@error('class'){{ $message }} @enderror</span>
                     </td>              
                </tr>
                 <tr>
                     <td>GENDER</td>
                     <td>
                     <input class="form-check-input" type="radio" name='gender'  value="male" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">
                     Male
                     </label><br>
                     <input class="form-check-input" type="radio" name='gender' value="female"  id="flexRadioDefault2">
                     <label class="form-check-label" for="flexRadioDefault2">
                     Female
                     </label><br>
                     </td>
                </tr>
                     <br>
                <tr>
                     <td></td>
                     <td><button type="submit" class="btn btn-block btn-primary">Submit</button></td>
                </tr>             
            </table>
         </form>   
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"><script>
</body>
</html>