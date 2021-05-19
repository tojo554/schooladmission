<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
</head><a href=""></a>
<body style="background-color:powderblue;"> 

    <nav class="navbar navbar-dark bg-dark">
    <div class="container-md">

    <a class="navbar-brand" href="{{route('auth.logout')}}" >Logout</a>
    </div>
    </nav>
	<div class="container">
    <div class="row" style ="margin-top:150px">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <br> <br> <br>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <h3><center>APPLICATION FORM</center></h3><br>


				<form action="/updatestudent/{{$admission->id}}" method="post">
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
                <!-- <tr>
                        <td><b>STUDENT NAME </b></td> 
                        <td><input value="{{ $admission ->name}}" name="name" type="text" class="form-control" placeholder="Enter the full name" > <span class="text-danger">@error('name'){{ $message }} @enderror</span></td>
                       
                 </tr>
                 <tr>
                        <td><b>FATHER NAME </b></td>
                        <td><input value="{{ $admission ->fathername}}" name="fathername" type="text" class="form-control"placeholder="Enter the father name" >
                        <span class="text-danger">@error('fathername'){{ $message }} @enderror</span>
                        </td>
                        </tr>
                <tr>
                       <td><b>MOTHER NAME </b></td>
                        <td><input value="{{ $admission ->mothername}}" name="mothername" type="text" class="form-control" placeholder="Enter the mother name">
                        <span class="text-danger">@error('mothername'){{ $message }} @enderror</span>
                        </td>
                   
                </tr>
                <tr>
                    <td><b>ADDRESS </b></td>
                    <td> 
                     <input class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$admission ->address}}" name="address" placeholder="Enter the address" >
                     </div>
                     <span class="text-danger">@error('address'){{ $message }} @enderror</span></td>
                    
                </tr>
                 <tr>
                    <td><b>PIN CODEb </b></td>
                    <td><input value="{{ $admission ->pincode}}" name="pincode" type="text" class="form-control" placeholder="Enter the pincode"
                    >
                    <span class="text-danger">@error('pincode'){{ $message }} @enderror</span>
                    </td>
                   
                </tr>
                <tr>
                    <td><b>PHONE NO </b></td>
                    <td><input value="{{ $admission ->phoneno}}" name="phoneno" type="text" class="form-control" placeholder="Enter the PhoneNo"
                   >
                    <span class="text-danger">@error('phoneno'){{ $message }} @enderror</span>
                    </td>
                   
                </tr>
                <tr>
                    <td><b>EMAIL ID </b></td>
                    <td><input value="{{ $admission ->email}}" name="email" type="text" class="form-control" placeholder="Enter the email address"
                    >
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </td>                   
                </tr>
            
                <tr>
                    <td><b>DATE OF BIRTH </b></td>
                    <td><input value="{{ $admission ->dateofbirth}}" name="dateofbirth" type="date" class="form-control" placeholder="">
                    <span class="text-danger">@error('dateofbirth'){{ $message }} @enderror</span>
                    </td>                   
                </tr>
                    
                <tr>
                    <td><b>CLASS </b> </td>
                    <td><input value="{{ $admission ->class}}" name="class" type="text" class="form-control" placeholder="class in which admission is sought"
                    >
                    <span class="text-danger">@error('class'){{ $message }} @enderror</span>
                    </td>              
                </tr>
                <tr>
                     
                      <td><b>GENDER</b></td>
                    <td>
                    <input value="{{ $admission ->gender}}" name="gender" type="text" class="form-control" placeholder="">
                     </td>

                </tr> -->
                <tr>
                    <td><b>Application Status  :</b></td>
                    <td><select name="status"="form-control">
                        <option value="{{ $admission ->status}}"></option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Waiting List">Waiting List</option>
                        <option value="Pending">Pending</option>
                        </select>
                    </td>
               </tr>
                <br>
                <tr>
                     <td></td>
                     <td><button type="submit" class="btn btn-block btn-primary">Update</button></td>
                </tr>             

            </table>
         </form>   
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"><script>
</body>
</html>