<!doctype html>
<html lang="en">
<head>
    <title>Vüsal Hüseynli</title>
    <meta charset="UTF-8">
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('portfolio/logos/portfolio.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('portfolio/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('portfolio/css/toast.css')}}">
</head>
<body>
<div class="none">
    <div class="navbar_links">
        <a id="home_2" class="navbar_link_active">Home</a>
        <a id="about_2" class="navbar_link">About</a>
        <a id="projects_2" class="navbar_link">Projects</a>
        <a id="contact_2" class="navbar_link">Contact</a>
        <a id="log_in2" class="navbar_link">Log in</a>
    </div>
</div>
<header class="header" id="home" style="background-image: url({{asset('portfolio/images/blurred_back.jpg')}});">
    <div class="hex_column2">
        <div class="hex_div">
            <div class="hexagonal2"></div>
        </div>
        <div class="hex_div">
            <a class="header_links">
                <div class="hexagonal2">
                </div>
            </a>
        </div>
        <div class="hex_div">
            <div class="hexagonal2"></div>
        </div>
    </div>
    <div class="hex_column1">
        <div class="hex_div">
            <a class="header_links" id="home_">
                <div class="hexagonal1">
                    <h1 class="header_contact">Home</h1>
                </div>
            </a>
        </div>
        <div class="hex_div">
            <a class="header_links" href="{{asset('portfolio/files/CV_VüsalHüseynli.docx')}}" download>
                <div class="hexagonal1">
                    <h1 class="header_contact">CV</h1>
                </div>
            </a>
        </div>
        <div class="hex_div">
            <div class="hexagonal1"></div>
        </div>
    </div>
    <div class="hex_column2">
        <div class="hex_div">
            <div class="hexagonal2"></div>
        </div>
        <div class="hex_div">
            <a class="header_links" id="about_">
                <div class="hexagonal2">
                    <h1 class="header_contact">About</h1>
                </div>
            </a>
        </div>
        <div class="hex_div">
            <div class="hexagonal2"></div>
        </div>
    </div>
    <div class="hex_column1">
        <div class="hex_div">
            <a class="header_links" id="projects_">
                <div class="hexagonal1">
                    <h1 class="header_contact">Projects</h1>
                </div>
            </a>
        </div>
        <div class="hex_div">
            <a class="header_links" id="log_in">
                <div class="hexagonal1">
                    <h1 class="header_contact">Log in</h1>
                </div>
            </a>
        </div>
        <div class="hex_div">
            <div class="hexagonal1"></div>
        </div>
    </div>
    <div class="hex_column2">
        <div class="hex_div">
            <div class="hexagonal2"></div>
        </div>
        <div class="hex_div">
            <a class="header_links" id="contact_">
                <div class="hexagonal2">
                    <h1 class="header_contact">Contact</h1>
                </div>
            </a>
        </div>
        <div class="hex_div">
            <div class="hexagonal2"></div>
        </div>
    </div>
    <div class="hex_column1">
        <div class="hex_div">
            <div class="hexagonal1"></div>
        </div>
        <div class="hex_div">
            <div class="hexagonal1"></div>
        </div>
        <div class="hex_div">
            <div class="hexagonal1"></div>
        </div>
    </div>
</header>
@yield('main')
<div class="footer">
    <div class="social">
        <a href="https://www.facebook.com/vusal.huseynli.3958" class="media_box"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/huseynvsal/" class="media_box"><i class="fa fa-instagram"></i></a>
        <a href="https://wa.me/+994503826922" class="media_box"><i class="fa fa-whatsapp"></i></a>
        <a href="https://github.com/huseynvsal" class="media_box"><i class="fa fa-github"></i></a>
    </div>
    <p class="footnote">Vüsal Hüseynli <span>©2020</span></p>
</div>
</body>
<script src="{{asset('portfolio/js/script.js')}}"></script>
<script src="{{asset('portfolio/js/toast.js')}}"></script>
</html>
