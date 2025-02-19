<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Sistem Informasi PKL - PPLG</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/templatemo-art-factory.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/owl-carousel.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">I - PKL</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang</a></li>
                            <li class="scroll-to-section"><a href="#about2">Manfaat</a></li>
                            <li class="scroll-to-section"><a href="#services">TIM</a></li>
                            <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <br><br><br>
                        <h1>INFORMASI</h1>
                        <h1><strong>PKL SMKN 1 Kawali</strong></h1>
                        <p>Lebih  dari ratusan siswa di SMK Negeri 1 Kawali menemukan informasi Praktek Kerja Lapangan di website ini.Temukan berbagai informasi mengenai tempat Praktek Kerja Lapangan disini !</p>
                        <p>Pantengin Terus Ya!</p>
                        <a href="{{ route('login') }}" class="main-button-slider">Temukan Tempat</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{asset('landing/images/slider-icon.png')}}" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{asset('landing/images/left-image.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>KENALI I-PKL</h5>
                    </div>
                    <div class="left-text">
                        <p>I-PKL merupakan salah satu penyedia <a href="">layanan informasi berbasis digital</a>, yang merupakan produk digital dari SMK Negeri 1 Kawali untuk menunjang kebutuhan informasi mengenai salah satu agenda rutin siswa/i di SMK Negeri 1 Kawali setiap tahunnya untuk menyesuaikan kegiatan belajar yang sesuai dengan metode industri, yaitu kegiatan Praktek Kerja Lapangan. <br><br>
                            I-PKL menjadi salah satu acuan bagi para siswa/i di SMK Negeri 1 Kawali untuk mencari informasi dan referensi IDUKA atau Industri Dunia Kerja yang sesuai dengan kompentensi keahliannya masing-masing</p>
                        <!-- <a href="#about2" class="main-button">Discover More</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5>KENAPA HARUS I-PKL ?</h5>
                        <p>Lihat keunggulan dari informasi I-PKL Berikut !</p>
                    </div>
                </div>
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li>
                            <img src="{{asset('landing/images/about-icon-01.png')}}" alt="">
                            <div class="text">
                                <h6>Akses cepat informasi PKL</h6>
                                <p>Informasi yang kami berikan memberikan kemudahan bagi siswa/i yang mengunjungi sistem ini,dengan informasi yang ringkas,rapi,dan runtut,sehingga cepatnya informasi yang didapat.</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('landing/images/about-icon-02.png')}}" alt="">
                            <div class="text">
                                <h6>Informasi tempat PKL akurat</h6>
                                <p>Kami memberikan informasi seputar PKL berdasarkan atas kesepakatan dan sampaian dari Wakasek dan Staff Hubin, SMKN 1 Kawali,sehingga keakuratan informasi sangat diperhatikan.</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('landing/images/about-icon-03.png')}}" alt="">
                            <div class="text">
                                <h6>Fitur optimal untuk kebutuhan PKL</h6>
                                <p>Kebutuhan akan proses persiapan untuk PKL, kami akan menyediakan beberapa fitur yang membantumu agar memudahkan proses rangkaian yang harus dilakukan oleh siswa/i</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{asset('landing/images/right-image.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Small Start ***** -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="text-white">BERTEMU DENGAN TIM KAMI</h3>
                        <br><br>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                        {{-- <div class="icon">
                            <i><img src="{{asset('landing/images/service-icon-01.png')}}" alt=""></i>
                        </div> --}}
                        <img height="200" src="{{asset('landing/images/luk.png')}}" alt="">
                        <h5 class="service-title mt-2">LUKMAN NULHAKIM</h5>
                        <p class="text-warning">PROGRAMMER</p>
                    </div>
                    <div class="item service-item">
                        {{-- <div class="icon">
                            <i><img src="{{asset('landing/images/service-icon-02.png')}}" alt=""></i>
                        </div> --}}
                        <img height="200" src="{{asset('landing/images/fit.jpg')}}" alt="">
                        <h5 class="service-title mt-2">FITRIA LAILA P.</h5>
                        <p class="text-warning">PROGRAMMER</p>
                    </div>
                    <div class="item service-item">
                        {{-- <div class="icon">
                            <i><img src="{{asset('landing/images/service-icon-03.png')}}" alt=""></i>
                        </div> --}}
                        <img height="200" src="{{asset('landing/images/iz.jpg')}}" alt="">
                        <h5 class="service-title mt-2">FAIZ AL ZHAFIR</h5>
                        <p class="text-warning">PROGRAMMER</p>
                    </div>
                    <!-- <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{asset('landing/images/service-icon-02.png')}}" alt=""></i>
                        </div>
                        <h5 class="service-title">Fourth Service Box</h5>
                        <p>Fusce sollicitudin feugiat risus, tempus faucibus arcu blandit nec. Duis auctor dolor eu scelerisque vestibulum.</p>
                        <a href="#" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{asset('images/service-icon-01.png')}}" alt=""></i>
                        </div>
                        <h5 class="service-title">Fifth Service Title</h5>
                        <p>Curabitur aliquam eget tellus id porta. Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit.</p>
                        <a href="#" class="main-button">Discover</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{asset('images/service-icon-03.png')}}" alt=""></i>
                        </div>
                        <h5 class="service-title">Sixth Box Title</h5>
                        <p>Ut nibh velit, aliquam vitae pellentesque nec, convallis vitae lacus. Aliquam porttitor urna ut pellentesque.</p>
                        <a href="#" class="main-button">Detail</a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="{{asset('images/service-icon-01.png')}}" alt=""></i>
                        </div>
                        <h5 class="service-title">Seventh Title Box</h5>
                        <p>Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien sit amet, ultrices malesuada odio. Donec non quam.</p>
                        <a href="#" class="main-button">Read More</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->


    <!-- ***** Frequently Question Start ***** -->
    <!-- <section class="section" id="frequently-question">
        <div class="container">
            ***** Section Title Start *****
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading">
                        <p>Vivamus venenatis eu mi ac mattis. Maecenas ut elementum sapien. Nunc euismod risus ac lobortis congue. Sed erat quam.</p>
                    </div>
                </div>
            </div>
            ***** Section Title End *****

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12">
                    <h5>Class aptent taciti sociosqu ad litora torquent per conubia</h5>
                    <div class="accordion-text">
                        <p>Curabitur placerat diam in risus lobortis, laoreet porttitor est elementum. Nulla ultricies risus quis risus scelerisque, a aliquam tellus maximus. Cras pretium nulla ac convallis iaculis. Aenean bibendum erat vitae odio sodales, in facilisis tellus volutpat.</p>
                        <p>Sed lobortis pellentesque magna ac congue. Suspendisse quis molestie magna, id eleifend ex. Ut mollis ultricies diam nec dictum. Morbi commodo hendrerit mi vel vulputate. Proin non tincidunt dui. Lorem ipsum dolor sit amet.</p>
                        <span>Email: <a href="#">email@company.com</a><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>First Common Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Duis vulputate porttitor urna sit amet pretium. Phasellus sed pulvinar eros, condimentum consequat ex. Suspendisse potenti.
                                    <br><br>
                                    Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum sodales. Aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Second Question Answer</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Sed odio elit, cursus sed consequat at, rutrum eget augue. Cras ac eros iaculis, tempor quam sit amet, scelerisque mi. Quisque eu risus eget nunc porttitor vestibulum at a ante.
                                    <br><br>
                                    Praesent ut placerat turpis, vel pellentesque dolor. Sed rutrum eleifend tortor, eu luctus orci sagittis in. In blandit fringilla mollis.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Third Answer for you</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Proin feugiat ante ut vulputate rutrum. Nam quis erat turpis. Nullam maximus pharetra lorem, eu condimentum est iaculis ut. Pellentesque mattis ultrices dignissim. 
                                    <br><br>
                                    Etiam et enim finibus, feugiat massa efficitur, finibus sapien. Sed cursus lacus quis arcu scelerisque, eget ornare risus maximus. Aenean non lectus id odio rhoncus pharetra.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Fourth Question Asked</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Phasellus eu purus ornare, eleifend orci nec, egestas nulla. Sed sed aliquet sapien. Proin placerat, ipsum eu posuere blandit, tellus quam consectetur nisi, id sollicitudin diam ex at nisi.
                                    <br><br>
                                    Aenean fermentum eget turpis egestas semper. Sed finibus mollis venenatis. Praesent at sem in massa iaculis pharetra.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Fifth Ever Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Quisque aliquet ipsum ut magna rhoncus, euismod lacinia elit rhoncus. Sed sapien elit, mollis ut ultricies quis, fermentum nec ante.
                                    <br><br>
                                    Sed nec ex nec tortor fermentum sollicitudin id ut ligula. Ut sagittis rutrum lectus, non sagittis ante euismod eu. </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Sixth Sense Question</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Suspendisse potenti. Ut dapibus leo ut massa vulputate semper. Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum sodales. Aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Frequently Question End ***** -->


    <!-- ***** Contact Us Start ***** -->
    <!-- <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                ***** Contact Map Start *****
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="map">
                      How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                ***** Contact Map End *****

                ***** Contact Form Start *****
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send It</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                ***** Contact Form End *****
            </div>
        </div>
    </section> -->
    <!-- ***** Contact Us End ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="text-center">
                            <p class="mt-3"><strong>I-PKL</strong></p>
                        </div>
                        <p class="copyright">Copyright &copy; 2020 Art Factory Company 
                    
                    . Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                    <br>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fas fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="text-center">
                        <p class="mt-3"><strong>PKL</strong></p>
                        <p class="text-warning mt-3">Pengertian</p>
                        <p class="text-warning mt-2">Tentang</p>
                        <p class="text-warning mt-2">Manfaat</p>
                        <p class="text-warning mt-2">Tim Kami</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="text-center">
                        <p class="mt-3"><strong>DUKUNGAN</strong></p>
                        <p class="text-warning mt-3">Hubungi Kami</p>
                        <p class="text-warning mt-2">Ada Keluahn?</p>
                        <p class="text-warning mt-2">Hubungi Kami</p>
                        <p class="text-warning mt-2">CALL 0808-0808-80</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
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