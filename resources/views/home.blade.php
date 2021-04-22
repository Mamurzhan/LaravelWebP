  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Home</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&display=swap');
  *{
    margin: 0;
     outline: none;
      box-sizing: border-box;
      }
       body{
          background-color: #384448;
          font-family: 'Josefin Sans', sans-serif;       }
      .text h1{
            font-size: 70px; line-height: 84px; font-weight: normal; color: #ffe63e; text-transform: uppercase; 
          }
          .text p{
             font-size: 20px; color: #fbf7db;  text-transform: uppercase; margin-top: 15px; letter-spacing: 4px;
          }
          .text .btn{

           position: relative; display: inline-block; width: 200px; height: 70px; line-height: 70px; text-align: center; border: 1px solid #ffe63e; color: #ffe63e; text-decoration: none; text-transform: uppercase; font-size: 16px; letter-spacing: 4px; margin-top: 24px; 
           transition: all ease 0.5s;
          
          } 
          .sociali {bottom: 100px; margin-top: 200px; position: absolute; bottom: 90px;
          }
          .sociali a{
            
             position: relative;
              display: inline-block; 
              width: 50px; height: 20px;
               left: 7;
                text-align: center;
               
            
                 color: #fbf7db; margin-right: 10px; border: 1px solid #53636d; border-radius: 10%; transition: all ease 0.5s;
          }
          .sociali a:before{ 
            content:'';
             position: absolute;
              top: 0; left: 0; width: 100%; 
              height: 100%;
               background-color: #ffe63e;
                border-radius: 10%; z-index: -1;
                 transform: scale(0); 
                 transition: all ease 0.5s;
          }
          .sociali a:hover{
            color: #38444b;
          }
          .sociali a:hover:before{
            transform: scale(1)
          }
          img {
            max-width: 250px;
            display: flex;
            flex-direction: column;
          }
          
          .img .img-stripe{
            width: calc(100% - 15px);
          }
          .img .stripe1{
            animation: stripe-one 18s ease 0s infinite;
          }
         
          .wrapper{
            display: flex;
            height: 100vh;
            overflow: hidden;
          }
          .text{
            width: 50%;
            height: 100vh;
            padding: 15px 150px 30px 100px;
            display: flex;
            align-items: center;
          }
          h2{
            font-size: 250%
          }
</style>
<body>
  <div class="wrapper">
    <div class="text">
      <div class="text-inner">
        <h2>Shear Your</h2>
        <h1>Sroty</h1>
        <p>In this site, you can add your story and photos</p>
        <a href="/add-story" class="btn">Add Story</a>
        <a href="/all-user" class="btn">Read Story</a>
        <div class="sociali">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="/ru">Ru</a>
          <a href="/home">En</a>
        </div>
      </div>
    </div>
    @foreach ($sduies as $sdu1)
        
    
<div class="img">
  <div class="img-stripe stripe1">
    <img src="{{asset('images')}}/{{$sdu1->image}}"><img src="{{asset('images')}}/{{$sdu1->image}}">
    
  </div>
  
</div>
@endforeach
  </div>
</body>
</html>