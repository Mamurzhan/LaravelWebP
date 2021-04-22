<title>Story</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    
      
      <nav>
        <a href="/home">Home</a>
        <a href="/qus">Answer Qus/s </a>
        <a href="/sendemail">Contact us</a>
        <a href="/add-story"> Add story</a>
        <a href="/all-ru">Ru</a>
        <div class="menu fix"></div>
      </nav>

      <!--
<section class="colr2" style="padding-top: 20px;">
    <div class="container" >
        <div class="row">
            <div class="col-md-12" >
                <div class="card-header text-light">
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
    -->

</section>
<div class="body">
<div class="section full-height">
  <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn"/>
  <label for="modal-btn">About Us <i class="uil uil-expand-arrows"></i></label> 		
  <div class="modal">		
    <div class="modal-wrap">	
  <img src="https://assets.codepen.io/1462889/sl3.jpg" alt="">	
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>	          		
    </div>			          		
  </div>	
</div>
<a href="https://front.codes/" class="logo" target="_blank">
<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
</a>	
</div>
<section>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        @foreach ($sduies as $sdu1)
            
        
        <div class="col-sm-4">
          <div class="card text-center"> 
            <div class="content">
              <div class="author">
                <div class="image">
                  <img src="{{asset('images')}}/{{$sdu1->image}}" style="width: 150px;
                  height: 200px;
                  border: 4px solid #fff;
                  overflow: hidden;
                  margin: 20px auto;
                  border-radius: 10%;">
                </div>
                <div>
                  <h2>{{$sdu1->name}}<br></h2><h6><span><a href="/sendemail">{{$sdu1->email}}</span></h6></a>
                </div>
              </div>
              <div class="more-btn">
                <i class="fa fa-plus"></i>
              </div>
              <div class="more-text">
                <h3>< {{$sdu1->topic}} ></h3>
                
                <p>{{$sdu1->story}}</p>
                
              </div>
            </div>
           
          </div>
        </div>
        @endforeach
      </div>

    </div>

  </div>
</section>


<style>
  


@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
*,
*::before,
*::after {
  box-sizing: border-box;
}
.body{
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.7;
	color: #dcdde9;
  	background-color: #fff;
  overflow: hidden;
  background-image: url('https://assets.codepen.io/1462889/back-page.svg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: 101%;
}
p{
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
	font-size: 16px;
	line-height: 1.7;
	color: #080809;
}

.section{
  position: relative;
  width: 100%;
  display: block;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
}

[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.modal-btn:checked + label,
.modal-btn:not(:checked) + label{
  position: relative;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  font-size: 15px;
  line-height: 2;
  height: 50px;
  transition: all 200ms linear;
  border-radius: 4px;
  width: 240px;
  
  margin-top: 100px
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
    -ms-flex-item-align: center;
    align-self: center;
  border: none;
  cursor: pointer;
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 12px 35px 0 rgba(16,39,112,.25);
}
.modal-btn:not(:checked) + label:hover{
  background-color: #524d3c;
  color: #eceef2;
}
.modal-btn:checked + label .uil,
.modal-btn:not(:checked) + label .uil{
	margin-left: 10px;
	font-size: 18px;
}
.modal-btn:checked + label:after,
.modal-btn:not(:checked) + label:after{
  position: fixed;
  top: 30px;
  right: 30px;
  z-index: 110;
  width: 40px;
  border-radius: 3px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  font-size: 18px;
  background-color: #4d493b;
  color: #f6f7fa;
  font-family: 'unicons';
  content: '\eac6'; 
  box-shadow: 0 12px 25px 0 rgba(16,39,112,.25);
  transition: all 200ms linear;
  opacity: 0;
  pointer-events: none;
  transform: translateY(20px);
}
.modal-btn:checked + label:hover:after,
.modal-btn:not(:checked) + label:hover:after{
  background-color: #ffffff;
  color: #ffeba7;
}
.modal-btn:checked + label:after{
  transition: opacity 300ms 300ms ease, transform 300ms 300ms ease, background-color 250ms linear, color 250ms linear;
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}
.modal{
  position: fixed;
  display: block;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  margin: 0 auto;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
  overflow-x: hidden;
  background-color: rgba(249, 249, 252, 0.75);
  pointer-events: none;
  opacity: 0;
  transition: opacity 250ms 700ms ease;
}
.modal-btn:checked ~ .modal{
  pointer-events: auto;
  opacity: 1;
  transition: all 300ms ease-in-out;
}
.modal-wrap {
  position: relative;
  display: block;
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
  margin-top: 20px;
  margin-bottom: 20px;
  border-radius: 4px;
  overflow: hidden;
  padding-bottom: 20px;
  background-color: #fff;
    -ms-flex-item-align: center;
    align-self: center;
    box-shadow: 0 12px 25px 0 rgba(199,175,189,.25);
  opacity: 0;
  transform: scale(0.6);
  transition: opacity 250ms 250ms ease, transform 300ms 250ms ease;
}
.modal-wrap img {
  display: block;
  width: 100%;
  height: auto;
}
.modal-wrap p {
  padding: 20px 30px 0 30px;
}
.modal-btn:checked ~ .modal .modal-wrap{
  opacity: 1;
  transform: scale(1);
  transition: opacity 250ms 500ms ease, transform 350ms 500ms ease;
}


.logo {
	position: absolute;
	top: 25px;
	left: 25px;
	display: block;
	z-index: 1000;
	transition: all 250ms linear;
}
.logo img {
	height: 26px;
	width: auto;
	display: block;
  	filter: brightness(10%);
	transition: filter 250ms 700ms linear;
}
.modal-btn:checked ~ .logo img {
  	filter: brightness(100%);
	transition: all 250ms linear;
}


@media screen and (max-width: 500px) {
	.modal-wrap {
		width: calc(100% - 40px);
		padding-bottom: 15px;
	}
	.modal-wrap p {
	  padding: 15px 20px 0 20px;
	}
}
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&display=swap');
body{
  margin:0;
  padding: 0;
  font-family: 'Josefin Sans', sans-serif;
  background-image: url('https://assets.codepen.io/1462889/back-page.svg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: 101%;
  color: #fff;
  }
section{
  width: 100%;
  height: 100vh;
  padding: -10px 0 0;
 
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
 .menu{ 
   position: absolute;
    top: 0; 
    height: 100%;
     z-index: 0;
      border-radius: 8px;
       transition: all linear 0.5s;
       }
 
 nav .fix, nav a:nth-child(1):hover~.menu{
    left: 30px; width: 100px;
     background-color: #03a9f4;
    }
    nav a:nth-child(2):hover~.menu{
    left: 150px; width: 110px;
     background-color: #d5cf24;
    } nav a:nth-child(3):hover~.menu{
    left: 290px; width: 100px;
     background-color: #d52424;
    } nav a:nth-child(4):hover~.menu{
    left: 410px; width: 100px;
     background-color: #24d541;
    } nav a:nth-child(5):hover~.menu{
      left: 520px; width: 110px;
     background-color: #0d939d;
    }
nav{

 position: relative;
 width: 670px; height:50px;
   margin: 30px 310px;
    background-color: #333; 
    text-align: center; 
    border-radius: 8px;
    }
 nav a{ position: relative; 
 display: inline-block; 
 font-size: 18px; 
 color: #fff;
  text-decoration: none;
   text-align: center;
   border-radius: 8px;
 line-height:50px;
 z-index: 1; 
 }
 nav a:nth-child(1){
   width: 110px;
 }nav a:nth-child(2){
   width: 120px;
 }nav a:nth-child(3){
   width: 130px;
 }nav a:nth-child(4){
   width: 100px;
 }nav a:nth-child(5){
   width: 110px;
 }

section .card{
  position: relative;
  max-width: 350px;
  height: auto;
  padding: 20px 10px;
  margin: 20px;
  background: #ff0;
  border-radius :10px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: 0 5px 15px rgba(0, 0, 0, .7);
  animation: animate 2s linear infinite;
  overflow: hidden;
}

section a{
  color: #2e2d2d
  
}
section h2 {
  color: #fff
}
section .col-sm-4:nth-child(1) .card{
  background: #40c0126e ;
}section .col-sm-4:nth-child(2) .card{
  background: #c01212cd ;
}section .col-sm-4:nth-child(3) .card{
  background: #6268bfce ;
}section .col-sm-4:nth-child(4) .card{
  background: #6268bfc7;
}section .col-sm-4:nth-child(5) .card{
  background: #40c012b6 ;
}section .col-sm-4:nth-child(6) .card{
  background: #c01212b1 ;
}section .col-sm-4:nth-child(7) .card{
  background: #c01212bf ;
  }section .col-sm-4:nth-child(8) .card{
  background: #40c012bb ;
}section .col-sm-4:nth-child(9) .card{
  background: rgba(65, 73, 191, 0.768) ;
  }

}
section .card .image{
  width: 100px;
  height: 100px;
  border: 4px solid #fff;
  overflow: hidden;
  margin: 20px auto;

  border-radius: 10%; 
}
  .card  .more-btn{
  width: 100px;
   height: 100px;
    background-color: #ea7f04;
     border-radius: 20%;
      position: absolute;
       bottom: -80px;
        left: 0; right: 0;
         margin: 0 auto; 
         text-align: center;
          line-height: 60px; 
          color: #fff; 
          cursor: pointer;
           z-index:9;
            font-size: 20px;
            transition: all ease 1s;
            overflow-y: auto; 
}
.more-text{
  position: absolute;
   bottom-left: 10px;
    width: 100%;
     height: 100%;
   background-color: #ff8800; 
   padding: 10px;
    overflow-y: auto; 
   transition: all ease 0.7s; 
    margin:20px 0px 0px -10px;
}
.more-text::-webkit-scrollbar{
   width: 7px; background-color: #b3b3b3;
}
.more-text::-webkit-scrollbar-thumb{
  background-color: #c76d06; 
} 

.more-text {
   color; #fff; font-size: 18px; line-height: 30px; font weight: 500;
}
section .col-sm-4:nth-child(1) .card .more-btn:hover{
  
  background-color: #f7f7f7;
  color: #40c0126e ;
}section .col-sm-4:nth-child(2) .card .more-btn:hover{
  color: #c01212cd ;
  background-color: #f7f7f7;
}section .col-sm-4:nth-child(3) .card.more-btn:hover{
  color: #6268bfce ;
  background-color: #f7f7f7;
}section .col-sm-4:nth-child(4) .card .more-btn:hover{
  color: #6268bfc7;
  background-color: #f7f7f7;
}section .col-sm-4:nth-child(5) .card .more-btn:hover{
  color: #40c012b6 ;
  background-color: #f7f7f7;
}section .col-sm-4:nth-child(6) .card .more-btn:hover{
  color: #c01212b1 ;
  background-color: #f7f7f7;
}section .col-sm-4:nth-child(7) .card .more-btn:hover{
  color: #c01212bf ;
  background-color: #f7f7f7;
  }section .col-sm-4:nth-child(8) .card .more-btn:hover{
    color: #40c012bb ;
    background-color: #f7f7f7;
}section .col-sm-4:nth-child(9) .card .more-btn:hover{
  color: rgba(65, 73, 191, 0.768) ;
  }
  .more-text.active{
    bottom: 0;
  }

</style>
<script>
$(document).ready(function(){
  $(".more-btn").on('click',function(){
    $(this).parent().parent().find(".more-text").toggleClass("active"); 
  });
});
</script>
</body>
