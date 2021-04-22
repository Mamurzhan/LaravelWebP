<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>New Spot HTML Page by Tooplate</title>
    <!--

    Template 2107 New Spot

	http://www.tooplate.com/view/2107-new-spot

    -->
</head>

<body>
    <div class="tm-container mx-auto">
        <a data-scroll href="/all-user" class="btn">Home</a>
        <section class="tm-section tm-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-bg-circle-white tm-flex-center-v">
                            <header class="text-center">
                                <h1 class="tm-site-title">Psychological issues</h1>
                            </header>
                            <p>What good and interesting happened to you today?
                                What did you do yourself useful and pleasant today?
                                What have you learned today, learned new things?</p>
                            <p class="text-center mt-4 mb-0">
                                <a data-scroll href="#tm-section-2" class="btn tm-btn-secondary">Answer</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">Lorem ipsum dolor site</h2>
                        <p class="mb-4">Nullam erat dolor, ullamcorper et nisi nec, porta portitor nisi. Quisque lobortis sem ut facilisis
                            mattis. Sed eu pellentesque sapien, a finibus eros. Nunc ut ultricies augue.</p>
                        <p class="mb-5">Mauris sagittis dui arcu, sed luctus metus faucibus nec. Sed vulputate ipsum massa, ut dapibus purus
                            volutpat vel. Interdum et malesuada fames ac ante.</p>
                        <p class="text-right mb-0">
                            <a href="#tm-section-3" class="btn tm-btn-secondary">Continue...</a>
                        </p>
                    </div>
                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                        <img src="img/img-01.jpg" alt="Image" class="rounded-circle tm-circle-img">
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-3" class="tm-section tm-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 tm-section-2-right">
                        <div class="tm-bg-circle-white tm-bg-circle-pad-2 tm-flex-center-v">
                            <header>
                                <h2 class="tm-color-primary">Duis vel vaius eros</h2>
                            </header>
                            <p>In hac habitasse platea dictumst. Ut tristique, purus vitae egestas hendrerit, tellus elit luctus
                                lacus
                            </p>
                            <ul class="dashed">
                                <li>How do you rest?</li>
                                <li>Sed eu pellentesque sapien</li>
                                <li>Mauris sagittis dui arcu</li>
                                <li>Sed luctus metus faucibus nec</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tm-section pt-2 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 tm-flex-center-v tm-section-left">
                        <form action="#" class="tm-contact-form" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required/>
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required/>
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="5" id="contact_message" name="contact_message" class="form-control" placeholder="Message..." required></textarea>
                            </div>
                            <div class="form-group mb-0 text-right">
                                <button type="submit" class="btn tm-btn-primary tm-send-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-8 col-lg-8 tm-circle-img-container tm-contact-right">
                        <img src="{{asset('img/img-02.jpg')}}" alt="Image" class="rounded-circle tm-circle-img">
                    </div>
                </div>
            </div>
        </section>
        <footer class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="small mb-4 tm-footer-text">Copyright &copy; 2018 Company Name 
                    
                    | Design: <a rel="nofollow" href="{{asset('https://www.tooplate.com')}}" class="tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!-- https://github.com/cferdinandi/smooth-scroll -->
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            easing: 'easeInOutQuart',
            speed: 800
        });
    </script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<style>
    /*

Template 2107 New Spot

http://www.tooplate.com/view/2107-new-spot

COLOR CODES

	Primary (Pink):   #CC0064
	Secondary (Blue): #0095BF
  
*/

* {
  margin: 0;
  padding: 0;
}

body {
  background-color: #eee;
  color: #6c6c6c;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-size: 18px;
  overflow-x: hidden;
}

.tm-container {
  background-color: white;
  max-width: 1400px;
}

.tm-site-title {
  color: #cc0064;
  font-size: 3rem;
}

.tm-site-subtitle {
  color: #0095bf;
  font-size: 1.2rem;
  margin-bottom: 30px;
}

.tm-section-1 {
  height: 750px;
  background-image: url(../img/spot-bg-01.jpg);
  background-size: cover;
  -webkit-clip-path: polygon(0px 0px, 100% 0px, 100% 84%, 0px 100%);
  clip-path: polygon(0px 0px, 100% 0px, 100% 84%, 0px 100%);
  /* background-position: center -95px; */
  background-repeat: no-repeat;
  padding-top: 75px;
}

.tm-section-3 {
  height: 790px;
  background-image: url(../img/spot-bg-02.jpg);
  background-size: cover;
  -webkit-clip-path: polygon(0px 0px, 100% 14%, 100% 86%, 0px 100%);
  clip-path: polygon(0px 0px, 100% 14%, 100% 86%, 0px 100%);
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
}

.tm-color-primary {
  color: #cc0064;
}

.tm-color-secondary {
  color: #0095bf;
}

.tm-btn-primary {
  color: white;
  background-color: #cc0064;
}

.tm-btn-primary:hover,
.tm-btn-primary:focus {
  background-color: #f21b85;
}

.tm-btn-secondary {
  color: white;
  background-color: #0095bf;
}

.tm-btn-secondary:hover,
.tm-btn-secondary:focus {
  background-color: #44cbf1;
}

.tm-bg-circle-white {
  background-color: white;
  color: #6c6c6c;
  padding: 75px 81px 75px 90px;
  border-radius: 50%;
  width: 550px;
  height: 550px;
}

.tm-bg-circle-pad-2 {
  padding-left: 120px;
}

p,
ul {
  line-height: 2;
  font-weight: 300;
}

ul {
  margin: 0;
}
ul.dashed {
  list-style-type: none;
}
ul.dashed > li {
  text-indent: -5px;
}
ul.dashed > li:before {
  content: "-";
  margin-right: 5px;
  text-indent: -5px;
}

.btn {
  padding: 10px 30px;
  font-size: 1.15rem;
  font-weight: 300;
  border-radius: 8px;
}

a.btn:hover {
  color: white;
  text-decoration: none;
}

.tm-flex-center-v {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.tm-text-container {
  max-width: 420px;
}

.tm-circle-img {
  width: 550px;
}

.tm-circle-img-container {
  text-align: right;
}

.tm-contact-form {
  max-width: 280px;
}

.form-control {
  border-radius: 0;
  border: none;
  border-bottom: 1px solid #cc0064;
}

.form-control:focus {
  box-shadow: none;
  border-color: #cc0064;
  border-width: 2px;
}

.tm-send-btn {
  border-radius: 5px;
  padding-top: 6px;
  padding-bottom: 6px;
}

.tm-footer-link {
  color: #6c6c6c;
}

.tm-footer-link:hover,
.tm-footer-link:focus {
  color: #cc0064;
  text-decoration: none;
}

@media (min-width: 576px) {
  .container {
    max-width: none;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1050px;
  }
}

@media (max-width: 992px) {
  .tm-bg-circle-white {
    margin-left: auto;
    margin-right: auto;
  }
  .tm-section-left {
    margin: 50px auto;
  }

  .tm-circle-img-container {
    text-align: center;
  }

  .tm-contact-form {
    max-width: 100%;
    padding-left: 30px;
    padding-right: 30px;
  }

  .tm-contact-right {
    margin-bottom: 50px;
  }

  .tm-footer-text {
    margin-left: 30px;
    margin-right: 30px;
  }
}

@media (max-width: 576px) {
  .tm-bg-circle-white {
    border-radius: 100px;
    width: 100%;
    height: auto;
    padding: 50px;
  }

  img {
    max-width: 100%;
  }

  .tm-section-1,
  .tm-section-3 {
    height: auto;
  }

  .tm-section-1 {
    padding-bottom: 90px;
    -webkit-clip-path: polygon(0px 0px, 100% 0px, 100% 92%, 0px 100%);
    clip-path: polygon(0px 0px, 100% 0px, 100% 92%, 0px 100%);
  }

  .tm-section-3 {
    padding-top: 100px;
    padding-bottom: 100px;
    -webkit-clip-path: polygon(0px 0px, 100% 8%, 100% 92%, 0px 100%);
    clip-path: polygon(0px 0px, 100% 8%, 100% 92%, 0px 100%);
  }

  .tm-circle-img-container {
    margin-bottom: 30px;
  }
}

</style>
</body>
</html>