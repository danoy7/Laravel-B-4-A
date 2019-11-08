<!DOCTYPE html>
<html>
<head>
    <title>CONTACT US</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    h1{
       color: dodgerblue;
       text-align: left;
       padding-top: 3%;
       font-family: sans-serif;
    }
    </style>
</head>
<body>
    <div class= container>
    <h1>CONTACT US</h1><br/>
    <form action="{{URL::to('/adduser')}}" method="POST">
    {!!csrf_field()!!}
        <!--First Name : <input type="text"name="fname"required><br/>
        Last Name : <input type="text"name="lname"required><br/>
        Email : <input type="email"name="email"required><br/>
        No Telp : <input type="text"name="notelp" required><br/>
        Complain : <input type="text"name="complain"><br/>
        <input type="submit" value="Send Message">-->

    <div class="form-row">
    <div class="form-group col-md-6">
        <label>First Name</label>
        <input type="text" class="form-control" name="fname" placeholder="Your first name">
    </div>
        <div class="form-group col-md-6">
        <label>Last Name</label>
        <input type="text" class="form-control" name="lname" placeholder="Your last name">
        </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Example: balabala@laravel.com">
    </div>
        <div class="form-group col-md-6">
        <label>Tel. Number</label>
        <input type="text" class="form-control" name="notelp" placeholder="Example: 0812345678">
        </div>
    </div>
    <div class="form-group">
        <label>Complain</label>
        <textarea class="form-control" name="complain" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>

    </form>
    </div>
</body>
</html>