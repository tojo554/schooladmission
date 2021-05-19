<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    

</head>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-md">
    <a class="navbar-brand" href="{{route('auth.logout')}}" >Back</a>
    <a class="navbar-brand" href="{{route('auth.logout')}}" >Logout</a>
    </div>
    </nav> 
<b>New Upadates:</b><marquee style="font-family:Georgia, 'Times New Roman', Times, serif; color:rgb(80, 7, 237);" >
welcome    {{ $LoggedUserInfo['name'] }} to St. Berchmans School <br></marquee> </div>
    <br><br>
<body>

    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <h4><center><tr> <td>Welcome</td> <td>{{ $LoggedUserInfo['name'] }}</td>   </tr></center><h4><hr>
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th> <td class="column100 column14" data-column="column14"><a class="btn btn-danger" href="{{route('auth.logout')}}"  > Logout  </a></td></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $LoggedUserInfo['name']  }}</td>
                                <td>{{ $LoggedUserInfo['email']  }}</td>
                               
                            </tr> 
                        </tbody>
                    </table>
                    <ul>    
                        
                        <li><a href="/admin/studentview">view Applications</a></li>
                        <li><a href="/admin/studentview">Applications Edit || Delete</a></li>
                    </ul>
              </div>
        </div>
        <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
             <!-- <tr>
                  <td><img src="{{$LoggedUserInfo['facphoto'] }}" alt="" height="50px" width="50px"></td>  
             </tr> -->
        </div>
        <!-- $LoggedUserInfo['facphoto']  -->
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>