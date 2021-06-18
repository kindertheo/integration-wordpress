<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Integration WordPress</title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url'); ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<header>

      <!-- Content -->
    <div class="container">

        <!--Navbar-->
        <nav class="navbar pt-5">
                <!--Brand-->
                <a class="navbar-brand" href="#">
                    <img class="navbar-logo" src="https://www.webidea.fr/app/themes/agencewebidea/dist/images/logo.svg" alt="WEBIDEA">
                </a>
                <!--Menu-->
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars fa-2x circle-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    </ul>
                </div>
        </nav>
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="header col-xl-6 col-lg-12 white-text text-sm-center text-md-start  mt-5 pt-5">
            <h1 class="h1-responsive mt-sm-5 text-light">Test d’intégration d’un site internet pour un <strong>poste de développeur</strong></h1>
            <h2 class="pt-3 small text-light">Réalisez ce test d’intégration web pour évaluer vos compétences et tentez de rejoindre l’équipe Web Idea !</h2>
          </div>
        </div>
        <!--Grid row-->
    </div>
    <!-- Content -->
    </div>

    <div class="pos">
        <div class="defiler">
        <div class="bordure"></div>
        <p style="margin-right: 15px;">Faites défiler</p>
    </div>

</header>
<!-- Main navigation -->
<!--Main Layout-->
<main>
    <!-- Content -->
    <div class="container">
        <!--Grid row-->
        <div class="row py-5">
        <!--Grid column-->
            <div class="col-md-6 py-5">
                <small class="section-label">NISI NEC VELIT</small>
                <h3 class="section-title">Nullam pulvinar felis at metus malesuada</h3>
                <p class="section-content pb-3">Pellentesque tincidunt tristique neque, eget venenatis enim gravida quis. Fusce at egestas libero. Cras convallis egestas ullamcorper. Suspendisse sed ultricies nisl, pharetra rutrum mauris. Vestibulum at massa dui. Morbi et purus velit. Etiam tristique, justo eu condimentum efficitur, purus velit facilisis sem, id fringilla tortor quam quis dolor. Praesent ultricies dignissim ex, at volutpat sapien ullamcorper rhoncus.</p>
                <a href="#" class="pt-5 link"> <strong>Découvrez le service</strong> <i class="fas fa-arrow-right"></i> </a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 pl-5">
                
                <img src="<?php echo get_bloginfo("template_directory"); ?>/img/image4.PNG" alt="background" class="pl-md-4 img img-fluid first-image">
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!-- Grid row-->
        <div class="row py-5">
            <!--Grid column-->
            <div class ="col-md-6 order-md-2 pt-5">
                <small class="section-label">Bibendum curabitur magna</small>
                <h3 class="section-title">Aenean sed nibh a magna posuere</h3>
                <p class="section-content">Maecenas interdum lorem eleifend orci aliquam mollis aliquam non rhoncus magna :</p>
                <ul class="section-list">
                    <li>Suscipit libero</li>
                    <li>Suscipit libero</li>
                    <li>Suscipit libero</li>
                </ul>
                <a href="#" class="pt-5 link"> <strong>Découvrez le service</strong> <i class="fas fa-arrow-right"></i> </a>
            <!--Grid column-->
            </div>

            <!--Grid column-->
            <div class="col-md-6 order-md-1 py-5 wrapper">
            <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img1.png" alt="background" class="img img-fluid superimpose-front">

            <div class="ipad">
                <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img14-half.png" alt="background" class="img superimpose-back" alt="ipad">
            </div>
            <!--Grid column-->
            </div>
        </div>



        <!-- Grid row-->
        <div class="row pt-5 pb-3">
            <!--Grid column-->
            <div class="col-md-6 pt-5">
                <small class="section-label">Massa metus proin</small>
                <h3 class="section-title">Dolor imperdiet</h3>
                <p class="section-content">Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.</p>
            <!--Grid column-->
            </div>

            <!--Grid column-->
            <div class="col-md-6 d-none d-md-flex align-items-end">
                <i class="fa fa-arrow-left slider-control leftLst ml-auto"></i>
                <i class="fa fa-arrow-right slider-control rightLst"></i>
            <!--Grid column-->
            </div>
        <!-- Grid row-->
        </div>
        <!-- Grid row-->
        <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">

                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel1.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>

                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel2.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel3.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel4.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel1.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>

                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel2.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel3.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel4.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel1.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>

                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel2.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel3.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15 d-flex align-items-end" >
                        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/img-carrousel4.png" alt="background" class="carrousel-image" alt="ipad">
                            <div class="overlay"></div>
                            <p class="carrousel-text pb-1 ps-3 text-start">Duis porta ligula rhoncus euismod pretium</p>
                            <i class="carrousel-text fa fa-arrow-right pb-4 pe-2 text-end"></i> 
                        </div>
                    </div>
                </div>
            </div>
        <!-- Grid row -->
        </div>

        <!-- Grid row -->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-6 d-md-none pl-5">
            <i class="fa fa-arrow-left slider-control leftLst ml-auto"></i>
            <i class="fa fa-arrow-right slider-control rightLst"></i>
            <!--Grid column-->
            </div>
        <!-- Grid row -->
        </div>

        <!-- Grid row -->
        <div class="row py-5">
            <!--Grid column-->
            <div class="col-lg-4">
                <small class="section-label">Sodales aliquam</small>
                <h3 class="section-title">Odio mauris diam</h3>
                <p class="section-content">Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.</p>
            <!--Grid column-->
            </div>
            <!--Grid column-->
            <div class="col-lg-8">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                <label for="exampleFormControlInput1">Nom</label>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                <label for="exampleFormControlInput1">Prénom</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                <label for="exampleFormControlInput1">Addresse email</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                <label for="exampleFormControlInput1">Téléphone</label>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option>Choisir un sujet</option>
                                    <option>Sujet 1</option>
                                    <option>Sujet 2</option>
                                    <option>Sujet 3</option>
                                    <option>Sujet 4</option>
                                </select>
                                <label for="exampleFormControlSelect1">Sujet</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" id="textarea1" placeholder="Ecrivez nous"></textarea>
                        <label for="textarea1">Message</label>
                    </div>

                    <div class="form-check pt-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis risus mi. Ut placerat quam lectus. Curabitur dictum velit non lacus ornare tempor.                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            <!--Grid column-->
            </div>
            <!-- Grid row -->
        </div>
    <!-- Content -->
    </div>
</main>


<!-- Footer -->
<footer class="text-lg-start text-muted pb-5">
  <!-- Section: Links  -->
  <section class="pt-4 text-white">
    <div class="container-fluid text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 d-none d-lg-block mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-center  mb-4">
            <img class="navbar-logo" src="https://www.webidea.fr/app/themes/agencewebidea/dist/images/logo.svg" alt="WEBIDEA">
            </h6>
        </div>
        <!-- Grid column -->

        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mx-auto mb-4 ps-5">
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block mx-auto mb-4">
                    <p>
                    Vehicula fringilla suspendisse
                    </p>
                    <p>
                    Vulputate convallis massa
                    </p>
                    <p>
                    Aliquam gravida lacinia
                    </p>
                    <p>
                    Nulla dictum praesent
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block mx-auto mb-4">
                    <p>
                    Vulputate convallis massa
                    </p>
                    <p>
                    Porttitor dapibus imperdiet
                    </p>
                    <p>
                    Vel aliquam
                    </p>
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-12 col-md-4 col-lg-4 col-xl-2 mx-auto mb-4 pl-xs-5 footer-social-media text-xs-start">
                    <p>
                    <a href="#" class="text-reset">Facebook</a>
                    </p>
                    <p>
                    <a href="#" class="text-reset">Twitter</a>
                    </p>
                    <p>
                    <a href="#" class="text-reset">LinkedIn</a>
                    </p>
                </div>
                <!-- Grid column -->
                </div>
                <hr style="height: 0.1rem;"  class="d-none d-xs-block">
            </div>
        
        <!-- Grid column -->
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-sm-6 mx-auto mb-md-0 mb-4 pe-5 text-end text-md-center">
            <!-- Contact -->
            <h6 class="text-uppercase fw-bold">Nous contacter</h6>
            <p>2, rue Maurice Barrès<br>57000 METZ</p>
            <a href="tel:+33387521212" class="text-reset">+33 3 87 52 12 12</a><br>
            <a href="mailto:hello@webidea.fr" class="footer-social-media">hello@webidea.fr</a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->
        <!-- Copyright -->
        <hr style="height: 0.1rem; margin-left:5%; margin-right:5%" class="d-block d-xs-none">
        <div class="text-center">
        © 2020 Web Idea. Tous droits réservés. <br/>
        <a class="text-reset" href="#">Mentions légales</a> | <a class="text-reset" href="#">Plan du site</a>
        </div>
        <!-- Copyright -->
    </div>
  </section>
  <!-- Section: Links  -->

</footer>
<!-- Footer -->
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                //incno = itemsSplit[3];
                //itemWidth = sampwidth / incno;
                itemWidth = 360;
            }
            else if (bodyWidth >= 992) {
                //incno = itemsSplit[2];
                //itemWidth = sampwidth / incno;
                itemWidth = 360;
            }
            else if (bodyWidth >= 768) {
                //incno = itemsSplit[1];
                //itemWidth = sampwidth / incno;
                itemWidth = 360;
            }
            else {
                incno = itemsSplit[0];
                //itemWidth = sampwidth / incno;
            }
            console.log(itemWidth);
            itemWidth = 360;
            marginRight = $(itemClass).css('margin-right');
            $(this).css({ 'transform': 'translateX(0px)', 'width':  (parseInt(itemWidth) + parseInt(marginRight))  * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $( leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#MultiCarousel1";
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});


    </script>

</html>