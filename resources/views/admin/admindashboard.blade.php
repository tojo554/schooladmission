<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
</head>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
    <a class="navbar-brand" href="{{route('auth.logout')}}" >Back</a>
    <a class="navbar-brand" href="{{route('auth.logout')}}" >Logout</a>
    </div>
    </nav> 
<b>Upadates:</b><marquee style="font-family:Georgia, 'Times New Roman', Times, serif; color:rgb(80, 7, 237);" >
welcome Admin to St. Berchmans School <br></marquee> </div>
    <br><br>

<body style="background-color:;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <center><h4>Welcome Admin<h4></center>
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>admin</b></td>
                                <td><b>admin@gmail.com</b></td>
                                <td class="column100 column14" data-column="column14"><a class="btn btn-danger" href="{{route('auth.logout')}}"  > Logout  </a></td>
                            </tr> 
                        </tbody>
                    </table>
                    <ul>    
                             <li><a href="/admin/facultyview">View Faculity</a></li>
                             <li><a href="/auth/register">Add Faculity</a></li>
                             <li><a href="/admin/studentview">View Application</a></li>
                             <li><a href="/admin/facultyview">Edit & Delete  Faculity</a></li>
                             <li><a href="/admin/studentview">Edit & Delete  Applications</a></li>
                             
                    </ul>
              </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


