
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body >
    

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/admin/dashboard">Dashboard</a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href=""></a>
    <a class="navbar-brand" href="{{route('auth.logout')}}">Logout</a>
  </div>
</nav>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-light p-4">
   <a href="/admin/dashboard"> <h5 class="text-dark h4">{{ $LoggedUserInfo['name']  }}</h5></a>
    <span class="text-muted">{{ $LoggedUserInfo['email']  }}</span>
  </div>
</div>
<marquee style="font-family:Georgia, 'Times New Roman', Times, serif; color:rgb(80, 7, 237);" >Welcome    
 {{ $LoggedUserInfo['name'] }} to St. Berchmans School, Changanasserry <br></marquee>

<br>
    <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-3 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
        </div>
        <br>
             <div class="col col-12 col-sm-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
            

            <table class="table table-hover">
            <thead class="bg-success">
                <th>Name</th>
                <th>Email</th>
                <th></th>
                <th><a href="{{route('auth.logout')}}"><button class="btn btn-danger">Logout</button></a></th>
            </thead>
            <tbody>
              <tr class="bg-light">
                <td>{{ $LoggedUserInfo['name']  }}</td>
                <td>{{ $LoggedUserInfo['email']  }}</td>
                <td>     </td>
                <td>  <img src="{{ asset('uploads/facphotos/'. $LoggedUserInfo->facphoto) }}" alt="" width="60" height="70"></td>
                <td></td>
             </tr>
            </tbody>
            </table>
            
            <table class="table table-hover">
            <tr>
              <td>View all applications</td>
              <td><a href="/admin/studentview"><button class="btn btn-success">View</button></a></td>
            </tr>
              <td>Edit applications</td>
              <td><a href="/admin/studentview"><button class="btn btn-success">View</button></a></td>
            </tr>
            </table>
            </div>
        </div>
    </div>
	</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>