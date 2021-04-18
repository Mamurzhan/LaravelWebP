<title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
        <div class="container-fluid">
            <strong> <h2  style="font-style:oblique; font-size:50pt;margin:0px 448px 10px 67px">STORY</h2></strong>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" style="margin: 0px 0px 0px 0px ">
              <input  class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
<section class="colr2" style="padding-top: 20px;">
    <div class="container" >
        <div class="row">
            <div class="col-md-12" >
                <div class="card-header text-light">
                    <a href="/add-story" class="btn btn-dark" > Add story</a>
                    In this site, you can add your story and photos
                </div>
                <div class="card-body">
                    @if(Session::has('user_deleted'))
                    <div class="alert alert-secondary" role="alert">
                        {{Session::get('user_deleted')}}
                      </div> 
                    @endif
                @foreach ($sduies as $sdu1)
                <span>
                    <div class="card text-white rounded mb-3">
                        <div class="colr ">
                        <div class="row g-0">
                            
                          <div class="col-md-2">
                            <img src="{{asset('images')}}/{{$sdu1->image}}" style="max-width: 190px">
                        </div>
                          <div class="col-md-3">
                            <div class="card-body">
                              <h2 class="card-title">{{$sdu1->name}}</h5>
                              <h6 class="card-title">{{$sdu1->email}} 
                               
                                <a href="/sendemail" class="alert-link" > ||Send||</a> an email
                           </h6>
                              <p class="card-text"><small class="text-muted">Topic: </small>  {{$sdu1->topic}}</p>
                              <a href="/edit-user/{{$sdu1->id}}" class="btn btn-success">Edit</a>
                              <a href="/delete-user/{{$sdu1->id}}" class="btn btn-danger">Delete</a>
                              
                            </div>
                          </div>
                          <div class="col-md-7">
                            <p>{{$sdu1->story}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>
                      @endforeach
                    
                </div>

            </div>
            </section>
        </div>
    </div>
    
</section>



<style>
    p, h5, h6 {
  animation-duration: 1.2s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-left:20%;
    width: 200%;
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
.colr {
            background: linear-gradient(60deg,#ffbc00,#8723eb);
           
           
        }.colr2 {
            background: linear-gradient(30deg,#ffee00,#640abd);
           
           
        }
       
        .col2{
            background-color: rgb(72, 72, 72);
        }
</style>

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

<form method="post" action="{{url('sendemail/send')}}">
{{ csrf_field()}}
<div class="modal fade" id="SendModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="message" class="col-form-label">Message:</label>
            <textarea class="form-control" ></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="send" value="Send" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
