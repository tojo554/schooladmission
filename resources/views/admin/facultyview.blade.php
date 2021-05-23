<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<title>Faculty Table view</title>
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
<body style="background-color:powderblue;">
<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style> 
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" id="hide" href="/admin/admindashboard">Dashboard</a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
<button id="hide" class="btn btn-outline-primary" onclick="window.print()">Print</button>   
   <a class="navbar-brand" id="hide" href="{{route('auth.logout')}}">Logout</a> 
  </div>
</nav>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-light p-4">
   <a href="/admin/admindashboard"> <h5 class="text-dark h4">admin</h5></a>
    <span class="text-muted">admin@gmail.com</span>
	
  </div>
</div>
    
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
                            <CENTER><H2>Faculty Table</H2></CENTER><br><br>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Faculty ID</th>
								<th class="column100 column2" data-column="column2">Photo</th>
								<th class="column100 column3" data-column="column3">Name</th>
								<th class="column100 column4" data-column="column4">Email</th>
								<th class="column100 column5" data-column="column5">Subject Teaching</th>
								<th class="column100 column6" data-column="column6">Phone No</th>
								<th class="column100 column7" data-column="column7">Qualification</th> 
                    			<th class="column100 column8" id="hide" data-column="column8">Edit</th>
								<th class="column100 column9" id="hide" data-column="column9">Delete</th>
							</tr>
						</thead>
						<tbody>
            
         @foreach($admin as $faculty)
                 <tr class="row100">

								<td class="column100 column1" data-column="column1">{{$faculty->id}}</td>
								<td class="column100 column2" data-column="column2"><img src="{{ asset('uploads/facphotos/'. $faculty->facphoto) }}" alt="" height="50px" width="50px"></td>
								<td class="column100 column3" data-column="column3">{{$faculty->name}}</td>
								<td class="column100 column4" data-column="column4">{{$faculty->email}}</td>
								<td class="column100 column5" data-column="column5">{{$faculty->subject}}</td>
								<td class="column100 column6" data-column="column6">{{$faculty->phoneno}}</td>
								<td class="column100 column7" data-column="column7">{{$faculty->qualification}}</td>

                                <td class="column100 column8" id="hide" data-column="column8"><a class="btn btn-warning" href="/edit/{{$faculty->id}}/edit">  Edit  </a></td>
								<td class="column100 column9" id="hide" data-column="column9"><a class="btn btn-danger" href="/delete/{{$faculty->id}}/delete"> Delete  </a></td>
                                
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>
</html>
