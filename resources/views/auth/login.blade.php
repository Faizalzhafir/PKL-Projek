<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <title>Login | I-PKL</title>

    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/templatemo-art-factory.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/owl-carousel.css')}}">

</head>
<body>
    <!-- <h1 align="center">Ini halaman Login</h1>
    <form action="{{ route('login_proses') }}" method="post" align="center" enctype="multipart/form-data">
        @csrf
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Email...">
        <br><br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password...">
        <br><br>
        <button type="submit">Kirim</button>
    </form> -->
        <div class="container">
            <div class="row">
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-5 mt-5">
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{asset('landing/images/service-icon-02.png')}}" alt=""></i>
                        </div>
                        <h1 class="text-warning">HELLO !</h1><br><br>
                        <h2><strong>SELAMAT DATANG</strong></h2><br><br>
                        <h2>DI <strong class="text-warning">I-PKL</strong></h2><br>
                        <p>Jangan ragu untu memulai perjalanan mu melihat beberapa tempat PKL yang akan kamu pilih.Cek dan lihat sekarang juga di <a class="text-warning" href="">I-PKL</a></p>
                        <!-- <a href="#" class="main-button">Read More</a> -->
                    </div>
                </div>
                <!-- ***** Contact Map End ***** -->
            
                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-7 mt-5">
                    <div class="contact-form">
                        <form action="{{ route('login_proses') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="icon">
                                    <i><img src="{{asset('landing/images/service-icon-02.png')}}" alt=""></i>
                                </div><br>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <p class="text-white">Masukan E-mail dan Password untuk melihat tempat!</p><br>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Email" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="password" type="password" id="password" placeholder="Password" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" class="main-button">Masuk</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    <!-- <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </section> -->

    <!-- jQuery -->
    <script src="{{asset('landing/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('landing/js/popper.js')}}"></script>
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('landing/js/owl-carousel.js')}}"></script>
    <script src="{{asset('landing/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('landing/js/waypoints.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('landing/js/imgfix.min.js')}}"></script> 

    <!-- Global Init -->
    <script src="{{asset('landing/js/custom.js')}}"></script>
</body>
</html>