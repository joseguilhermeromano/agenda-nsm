<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda - @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- favicon --> 
        <link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png">

        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>

        <!-- Styles -->
        <style>

            @import url('https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap');

            html, body {
                background-color: #ee3965;
                color:  #1f4280;
                font-family: 'Hind',Helvetica,Arial,Lucida,sans-serif;
                height: 100vh;
                margin: 0;
                font-size: 12pt;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /* position: relative; */
                /* text-align: center; */
                z-index:0;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .principal{
                position:absolute;
                background-color: #fff;
                left:10%;
                width:80%;
                height: 80%;
                top:10%;
                text-align: center;
                /* margin: 10%; */
            }

            .principal:before, .principal:after{
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 2%;
                right: 2%;
                width: 46%;
                top: 80%;
                /* max-width:750px; */
                background: rgb(70, 37, 37);
                -webkit-box-shadow: 0 2em 1.5em  rgb(70, 37, 37);
                -moz-box-shadow: 0 2em 1.5em  rgb(70, 37, 37);
                box-shadow: 0 2em 1.5em  rgb(70, 37, 37);
                -webkit-transform: rotate(-2deg);
                -moz-transform: rotate(-2deg);
                -o-transform: rotate(-2deg);
                -ms-transform: rotate(-2deg);
                transform: rotate(-2deg);
                opacity: 75%;
            }

            .principal:after{
                -webkit-transform: rotate(2deg);
                -moz-transform: rotate(2deg);
                -o-transform: rotate(2deg);
                -ms-transform: rotate(2deg);
                transform: rotate(2deg);
                right: 2%;
                left: auto;
                margin-left: 2%;
            }

            .footer{
                position:absolute;
                bottom:0.25%;
                left:10%;
                width: 80%;
            }

            .author{
                text-decoration: none;
                text-transform: uppercase;
                font-weight: 700;
                font-size: 14pt;
            }

            /* estilo do menu */

            /* Add a black background color to the top navigation */
            .topnav {
                background-color: #fff;
                overflow: hidden;
                margin:50px;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
                float: left;
                display: block;
                color: #ee3965;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .direita{
                float: right;
            }


            /* Change the color of links on hover */
            .topnav a:hover {
                /* background-color: #ddd; */
                color: #f07694;
            }

            /* Add an active class to highlight the current page */
            .topnav a.active {
                /* background-color: #4CAF50; */
                color: white;
            }

            /* Hide the link that should open and close the topnav on small screens */
            .topnav .icon {
                display: none;
            }

            /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
            @media screen and (max-width: 600px) {
            .topnav{margin:10px;}
            .topnav .direita{display: none;}
                .topnav a.icon {
                    float: right;
                    display: block;
                }
            }

            /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
            @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
                .topnav.responsive a.icon {
                    position: absolute;
                    right: 0;
                    top: 0;
                }

                .topnav.responsive .direita{
                    display: contents;
                }

                .topnav.responsive a{
                    float:none;
                    display:block;
                    text-align: left;
                }
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class = "principal">
                    <section>
                        <div class="topnav" id="myTopnav">
                            <a data-toggle="tab" href="#home"> <img src="<?= asset('images/logo-nsm.svg') ?>" width="60%" height="60%" alt="logo"> </a>
                            <div class="direita">
                                <a data-toggle="tab" href="#home">Apresentação</a>
                                <a data-toggle="tab"href="#contato">Contato</a>
                            </div>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                              <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </section>
                    @yield('conteudo')
                </div>
                <div class= "footer flex-center">
                    <p>designed by <span class="author">José Guilherme Romano</span></p>
                </div>
            </div>
        </div>
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive ";
            } else {
                x.className = "topnav";
            }
        }

        $(document).ready(function(){
            $('a[href="#home"]').tab('show');
        });
    </script>
    </body>
</html>
