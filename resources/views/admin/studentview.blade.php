<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<title>Application Table view</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

<!--===============================================================================================-->
<!-- {{asset('css/main.css')}}
{{asset('css/util.css')}}
{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}
{{asset('vendor/select2/select2.min.css')}}
{{asset('vendor/animate/animate.css')}}
{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}
{{asset('vendor/bootstrap/css/bootstrap.min.css')}}
{{asset('images/icons/favicon.ico')}}
{{asset('')}} -->


</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
	<!-- <a class="navbar-brand" href="/admin/admindashboard" >Back</a> -->
    <a class="navbar-brand" href="{{route('auth.logout')}}" >Logout</a>
    </div>
    </nav
<div class="limiter">
					
		<div class="container-table100">
		<center><h2>Student Table</h2></center>
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-100">
					<table data-vertable="ver1">
						<thead>
						<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Student ID</th>
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">FatherName</th>
								<th class="column100 column4" data-column="column4">Mothername</th>
								<th class="column100 column5" data-column="column5">Address</th>
								<th class="column100 column6" data-column="column6">Pincode</th>
								<th class="column100 column7" data-column="column7">Phone No</th>
								<th class="column100 column8" data-column="column8">Email</th>
								<th class="column100 column9" data-column="column9">Date of Birth</th>
								<th class="column100 column10" data-column="column10">Class</th>
								<th class="column100 column11" data-column="column11">Gender</th>
								<th class="column100 column12" data-column="column12">Status</th>
								<th class="column100 column13" data-column="column13">Edit</th>
								<th class="column100 column14" data-column="column14">Delete</th>
							</tr>
						</thead>
						<tbody>
            
						@foreach($admission as $userf)
                 <tr class="row100">
								<td class="column100 column1" data-column="column1">{{$userf->id}}</td>
								<td class="column100 column2" data-column="column2">{{$userf->name}}</td>
								<td class="column100 column3" data-column="column3">{{$userf->fathername}}</td>
								<td class="column100 column4" data-column="column4">{{$userf->mothername}}</td>
								<td class="column100 column5" data-column="column5">{{$userf->address}}</td>
								<td class="column100 column6" data-column="column6">{{$userf->pincode}}</td>
								<td class="column100 column7" data-column="column7">{{$userf->phoneno}}</td>
								<td class="column100 column8" data-column="column8">{{$userf->email}}</td>
								<td class="column100 column9" data-column="column9">{{$userf->dateofbirth}}</td>
								<td class="column100 column10" data-column="column10">{{$userf->class}}</td>
								<td class="column100 column11" data-column="column11">{{$userf->gender}}</td>
								<td class="column100 column12" data-column="column12">{{$userf->status}}</td>								


                                <td class="column100 column13" data-column="column13"><a class="btn btn-warning" href="/editstudent/{{$userf->id}}/edit">  Edit  </a></td>
								<td class="column100 column14" data-column="column14"><a class="btn btn-danger" href="/delete/{{$userf->id}}"  > Delete  </a></td>
                                
                                </tr>
						@endforeach
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
