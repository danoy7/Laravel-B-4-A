<!DOCTYPE html>

<html>
<head>
    <title>Daftar Complain</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    h1{
       color: dodgerblue;
       text-align: left;
       padding-top: 3%;
       font-family: sans-serif;
    }
    .content{
        max-width:80vw;
    }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center">
    <div class="content">
    <h1>Daftar Complain</h1><br/>
    <table class="table">
        <thead> 
        <tr>
            <!--<td>No. </td>-->
            <th scope>First Name </th>
            <th scope>Last Name </th>
            <th scope>Email </th>
            <th scope>No telpon</th>
            <th scope>Complain</th>
        </tr>
        </thead>
        @foreach($myuser as $item)
        <tr>
            <!--<td>{{$item->id}}</td>-->
            <td>{{$item->fname}}</td>
            <td>{{$item->lname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->notelp}}</td>
            <td>{{$item->complain}}</td>
        </tr>
        @endforeach
    </table><br/>
    <a href="{{URL::to('/contactus')}}"><button type="submit" class="btn btn-primary">Resend Message</button></a>
    </div>
    </div>
    
</body>
</html>