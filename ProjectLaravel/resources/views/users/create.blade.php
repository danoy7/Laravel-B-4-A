<!DOCTYPE html>
<html>
<head>
    <title>CONTACT US</title>   
</head>
<body>
    <h1>CONTACT US</h1><br/>
    <form action="{{URL::to('/adduser')}}" method="POST">
    {!!csrf_field()!!}
        First Name : <input type="text"name="fname"required><br/>
        Last Name : <input type="text"name="lname"required><br/>
        Email : <input type="email"name="email"required><br/>
        No Telp : <input type="text"name="notelp" required><br/>
        Complain : <input type="text"name="complain"><br/>
        <input type="submit" value="Send Message">
    </form>
</body>
</html>