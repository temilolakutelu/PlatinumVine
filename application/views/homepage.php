<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from previews.envatousercontent.com/files/111269376/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 13:37:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Platinum Vine</title>
    <meta name="description" content="oHover effects">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/pv-logo.png">
    <!-- stylesheets-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lustria|Lato:300,400,700,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/ohover.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body onload="coords()">


    <div class="container-fluid">
        <div class="block_for_effect container-fluid">

            <!-- logo -->
            <div id='logo'>
                <img class='img-fluid' src='<?= base_url(); ?>assets/img/logo.png' alt='' />
                <!--search-->
                <!-- <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <div class="search"></div>
                </div> -->



                <form class="expanding-search-form">
                    <div class="search-dropdown">
                        <button class="filter-btn button dropdown-toggle" type="button">
                            <span class="toggle-active">Category</span>
                            <span class="ion-arrow-down-b"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php foreach ($category_data as $cat) { ?>
                            <li style='text-transform:capitalize;'><a href="#"><?=$cat->category;?></a></li>
                            <?php } ?>

                        </ul>
                    </div>
                    <input type="text" id="location" class="search-input">

                    <button class="button search-button" type="button">
                        <i class="fa fa-search"></i>

                    </button>
                </form>


                <script>
                    $('.dropdown-toggle').click(function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        $(this).closest('.search-dropdown').toggleClass('open');
                    });

                    $('.dropdown-menu > li > a').click(function(e) {
                        e.preventDefault();
                        var clicked = $(this);
                        clicked.closest('.dropdown-menu').find('.menu-active').removeClass('menu-active');
                        clicked.parent('li').addClass('menu-active');
                        clicked.closest('.search-dropdown').find('.toggle-active').html(clicked.html());
                    });

                    $(document).click(function() {
                        $('.search-dropdown.open').removeClass('open');
                    });

                    function coords() {

                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(
                                function(position) {

                                    myLatt = position.coords.latitude;
                                    myLng = position.coords.longitude;

                                    //alert(myLatt);
                                    locIQ(myLatt, myLng);

                                });

                        }

                    }

                    function locIQ(myLatt, myLng) {
                        var settings = {
                            "async": true,
                            "crossDomain": true,
                            "url": "https://us1.locationiq.com/v1/reverse.php?key=9421003a053d41&lat=" + myLatt + "&lon=" + myLng + "&format=json",
                            "method": "GET"
                        }

                        $.ajax(settings).done(function(response) {
                            // console.log(response.address.county);

                            // alert(response.address.county);

                            var location = response.address.county;
                            $("#location").val(location);
                        });
                    }
                </script>

                <!-- sidebar -->
                <div class="side_menu">
                    <div id="overlay" class='hidden'>
                    </div>
                    <nav>
                        <div class="toggle-wrap">
                            <span class="toggle-bar"></span>

                        </div>
                    </nav>
                    <aside>
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Member Forum</a>
                        <a href="<?= base_url('event'); ?>">Events</a>
                        <a href="#">Registration</a>
                        <a href="#">Contact Us</a>
                    </aside>
                </div>
            </div>


            <div class="tile-menu">

                <!-- <div class='link'>
                    <object type="image/svg+xml" data="design.svg"></object>
                </div> -->
                <div class="row">

                    <div style="width: 20%; ">

                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img1' src="<?= base_url(); ?>assets/img/one.jpg" alt="img"></div>
                                <div class="info">
                                    <h3 id="four1" onClick=passData(1) class="button" data-toggle="modal" data-target="#exampleModal">
                                        CONCIERGE <br> SERVICES INC</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>


                    <div id="modal-container" class='four'>
                        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style='font-size: 14px;font-weight:bold;'>
                                        </h5>
                                        <button type="button" class="close modal-button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class='col-md-5'>
                                            <img id='modal-image' class='img-fluid img-responsive' src="<?= base_url(); ?>assets/img/one.jpg" alt="Service Image">
                                        </div>
                                        <p class='col-md-7' style='font-size: 15px;
'>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Itaque assumenda sapiente non sint tempora temporibus
                                            saepe harum soluta corporis eos. Et cumque aperiam necessitatibus
                                            fugiat exercitationem. Consequatur ipsa voluptate beatae!</p>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div style="width: 20%; ">
                        <!-- colored -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img2' src="<?= base_url(); ?>assets/img/a2.jpg" alt="img"></div>
                                <div class="info">
                                    <h3 id="four2" onClick=passData(2) class="button" data-toggle="modal" data-target="#exampleModal">PET
                                        <br> SERVICES</h3>

                                </div>
                            </a></div>
                        <!-- end colored -->
                    </div>



                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img3' src="<?= base_url(); ?>assets/img/a3.jpg" alt="img"></div>
                                <div class="info">
                                    <h3 id="four3" onClick=passData(3) class="button" data-toggle="modal" data-target="#exampleModal">YOUR
                                        FRONT DESK <br>STAFF</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- colored -->


                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img4' src="<?= base_url(); ?>assets/img/a4.jpg" alt="img"></div>
                                <div class="info">
                                    <h3 id="four4" onClick=passData(4) class="button" data-toggle="modal" data-target="#exampleModal">ERRAND
                                        <br> SERVICES</h3>

                                </div>
                            </a></div>
                        <!-- end colored -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- normal -->


                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img5' src="<?= base_url(); ?>assets/img/a5.jpg" alt="img"></div>
                                <div class="info">
                                    <h3 id="four5" onClick=passData(5) class="button" data-toggle="modal" data-target="#exampleModal">HOUSE
                                        <br> CLEANING</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>
                </div>
                <div class="row">

                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img6' src="<?= base_url(); ?>assets/img/a6.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four6" onClick=passData(6) class="button" data-toggle="modal" data-target="#exampleModal">
                                        CULINARY <br> SERVICES</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- colored -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img7' src="<?= base_url(); ?>assets/img/a7.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four7" onClick=passData(7) class="button" data-toggle="modal" data-target="#exampleModal">
                                        ENTERTAINMENT</h3>

                                </div>
                            </a></div>
                        <!-- end colored -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img8' src="<?= base_url(); ?>assets/img/a8.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four8" onClick=passData(8) class="button" data-toggle="modal" data-target="#exampleModal">
                                        CONCIERGE-CATERED <br> VACATION
                                    </h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- colored -->
                        <div class="item-hover circle  effect6 scale_down"><a href="#">
                                <div class="img"><img id='img9' src="<?= base_url(); ?>assets/img/a9.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four9" onClick=passData(9) class="button" data-toggle="modal" data-target="#exampleModal">
                                        WELLNESS</h3>

                                </div>
                            </a></div>
                        <!-- end colored -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img10' src="<?= base_url(); ?>assets/img/a10.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four10" onClick=passData(10) class="button" data-toggle="modal" data-target="#exampleModal">Event
                                        <br> Planning</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>
                </div>
                <div class="row">

                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img11' src="<?= base_url(); ?>assets/img/cls.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four11" onClick=passData(11) class="button" data-toggle="modal" data-target="#exampleModal">
                                        Private
                                        <br> Transportation</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- colored -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img12' src="<?= base_url(); ?>assets/img/a12.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four12" onClick=passData(12) class="button" data-toggle="modal" data-target="#exampleModal">
                                        Handyman <br> Services</h3>

                                </div>
                            </a></div>
                        <!-- end colored -->
                    </div>


                    <div style="width: 20%; ">
                        <!-- colored -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img13' src="<?= base_url(); ?>assets/img/a13.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four13" onClick=passData(13) class="button" data-toggle="modal" data-target="#exampleModal">
                                        Delivery of Spirits,<br> Wine &
                                        Beer</h3>

                                </div>
                            </a></div>
                        <!-- end colored -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img14' src="<?= base_url(); ?>assets/img/cls.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four14" onClick=passData(14) class="button" data-toggle="modal" data-target="#exampleModal">
                                        Weddings
                                    </h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>

                    <div style="width: 20%; ">
                        <!-- normal -->
                        <div class="item-hover circle effect6 scale_down"><a href="#">
                                <div class="img"><img id='img15' src="<?= base_url(); ?>assets/img/autodetail.jpg" alt="img">
                                </div>
                                <div class="info">
                                    <h3 id="four15" onClick=passData(15) class="button" data-toggle="modal" data-target="#exampleModal">
                                        Mobile
                                        <br> Automotive <br>
                                        Detailing</h3>

                                </div>
                            </a></div>
                        <!-- end normal -->
                    </div>


                </div>


            </div>

        </div>

    </div>

    <!-- Footer-->
    <footer class="site-footer">
        <div class="">


            <div class="copyright">
                <p>Copyright &copy; 2019 | <a href="#" target="_blank" style='color: #151515;'>Platinum Vine&trade;</a>
                    All Rights Reserved!</p>

            </div>

        </div>
    </footer>
</body>


<script src="https://previews.envatousercontent.com/files/111269376/js/jquery.smooth-scroll.js"></script>
<script src="../../../google-code-prettify.googlecode.com/svn/loader/run_prettify.html"></script>
<!-- 
<script type='text/javascript'
    data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: '1b4559ec-ad99-4772-815e-209d4b088a80', f: true }); done = true; } }; })();</script> -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5c92123bc37db86fcfcee489/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
    $("body").fadeIn(2000);
    $(document).ready(function() {

        $('.nav ul a').smoothScroll();

        (function() {
            $('.toggle-wrap').on('click', function() {
                $(this).toggleClass('active');
                $('#overlay').toggleClass('hidden');
                $('aside').animate({
                    width: 'toggle'
                }, 200);
            });
        })();



    });
</script>
<script>
    $('.filter-btn').click(function() {
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
    });

    $('#modal-container').click(function() {
        $(this).addClass('out');
        $('body').removeClass('modal-active');
        location.reload(true);
    });

    $('')
</script>
<script>
    function passData(id) {
        var modalData = $('#four' + id).html();
        $('.modal-title').html(modalData);
        $('.modal-title').find('br').remove();
        var modalImage = $('#img' + id).attr("src");
        $('#modal-image').attr('src', modalImage);
    }
</script>
<!-- Mirrored from previews.envatousercontent.com/files/111269376/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 13:37:08 GMT -->

</html> 