<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from previews.envatousercontent.com/files/111269376/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 13:37:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PV| <?=$title;?></title>
    <meta name="description" content="oHover effects">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/img/pv-logo.png">
    <!-- stylesheets-->
    <link href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lustria|Lato:300,400,700,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css
" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/ohover.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/multilevelmenu.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/component.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/animations.css" />
		<script src="<?=base_url();?>assets/js/modernizr.custom.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src='<?=base_url();?>assets/js/index.js'></script>

</head>

<body onload="coords()">


    <div>
        <div class="block_for_effect">

            <!-- logo -->
            <div id='logo' class="container-fluid">
                <a href="<?=site_url('home')?>"> <img class='img-fluid' src='<?=base_url();?>assets/img/logo.png' alt='' /></a>




                <form class="expanding-search-form">
                    <div class="search-dropdown">
                        <button class="filter-btn button dropdown-toggle" type="button">
                            <span class="toggle-active">Category</span>
                            <span class="ion-arrow-down-b"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php foreach ($category_data as $cat) {?>
                            <li style='text-transform:capitalize;'><a href="#"><?=$cat->category;?></a></li>
                            <?php
        }?>

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
                            "url": "http://us1.locationiq.com/v1/reverse.php?key=9421003a053d41&lat=" + myLatt + "&lon=" + myLng + "&format=json",
                            "method": "GET"
                        }

                        $.ajax(settings).done(function(response) {
                            // console.log(response.address.county);

                            // alert(response.address.county);

                            var location = response.address.county;
                            $("#location").val(location);
                            // console.log(response);
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
                        <a href="<?=site_url('home');?>">Home</a>
                        <a href="<?=site_url('about');?>">About Us</a>
                        <a href="http://forum.platinumvine.com/">Member Forum</a>
                        <a href="<?=site_url('event');?>">Events</a>
                        <a href="<?=site_url('register');?>">Registration</a>
                        <a href="<?=site_url('contact');?>">Contact Us</a>
                    </aside>
                </div>
            </div>

            <?php echo $body; ?>


        </div>

    </div>

    <!-- Footer-->
    <footer class="site-footer">
        <div class="">


            <div class="copyright">
                <p>Copyright &copy; 2019 | <strong style='color: #151515;'>Platinum Vine&trade;</strong>
                    All Rights Reserved!</p>

            </div>

        </div>
    </footer>
</body>


<script src="http://previews.envatousercontent.com/files/111269376/js/jquery.smooth-scroll.js"></script>
<script src="../../../google-code-prettify.googlecode.com/svn/loader/run_prettify.html"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?=base_url();?>assets/js/jquery.dlmenu.js"></script>
		<script src="<?=base_url();?>assets/js/pagetransitions.js"></script>
<!--
<script type='text/javascript'
    data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'http://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: '1b4559ec-ad99-4772-815e-209d4b088a80', f: true }); done = true; } }; })();</script> -->
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'http://embed.tawk.to/5c92123bc37db86fcfcee489/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->

<!--End of Tawk.to Script-->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '1b4559ec-ad99-4772-815e-209d4b088a80', f: true }); done = true; } }; })();</script>

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
        // location.reload(true);
    });

    $('')
</script>

<!-- Mirrored from previews.envatousercontent.com/files/111269376/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 13:37:08 GMT -->

</html>