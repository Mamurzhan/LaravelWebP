<head>
        
<title>Send an email

</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</head>
<body>

<br/>
<div class="bg-dark text-light" style="padding: 100px 100px 100px 100px;">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card-body ">
    @if (count($errors) > 0)
<div class="alert alert-danger">
  <button type="button" class="close" data-bs-dismiss="alert">x</button>
  <ul>
    @foreach ($errors->all() as $error )
    <li>{{$error}}</li>
      
    @endforeach
  </ul>
</div>
@endif
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-bs-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
</div>
@endif
<div class="card-header">
    Edit Story
</div>
    <form class="bg-dark " method="post" action="{{url('sendemail/send')}}">
        {{ csrf_field()}}
          <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" >
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="email"  name="email" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message" class="col-form-label">Message:</label>
            <textarea class="form-control"  name="message"></textarea>
          </div>
      <div class="form-group">
        <a href="/all-user" class="btn btn-success">back</a>
        <button type="submit" name="send" value="Send" class="btn btn-primary">Send message</button>
    
    </div>
</form>
</div></div>
</div></div>
<style>
    .box{
        width: 600px;
        margin: 0 auto;
        border:1px solid #ccc;
    }
    .has-error{
        border-color:#cc0000;
        background-color:#ffff99;
    }
    .imgb{
        background-image: url("12.jpg")
    }
</style>
</body>