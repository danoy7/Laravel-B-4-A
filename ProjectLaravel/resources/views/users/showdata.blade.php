<!DOCTYPE html>

<html>
<head>
    <title>Daftar Complain</title>
</head>
<body>
    <h1>Daftar Complain</h1><br/>
    <table border="2"> 
        <tr>
            <!--<td>No. </td>-->
            <td>First Name </td>
            <td>Last Name </td>
            <td>Email </td>
            <td>No telpon</td>
            <td>Complain</td>
            <td>Action</td>
        </tr>
        @foreach($myuser as $item)
        <tr>
            <!--<td>{{$item->id}}</td>-->
            <td>{{$item->fname}}</td>
            <td>{{$item->lname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->notelp}}</td>
            <td>{{$item->complain}}</td>
            <td><a href="/delete/id/{{$item->id}}"><button>delete</button></a></td>
        </tr>
        @endforeach
    </table><br/>
    <a href="{{URL::to('/create')}}"><input type="Submit"value="Kembali Ke Halaman Complain"></a>
    
</body>
</html>