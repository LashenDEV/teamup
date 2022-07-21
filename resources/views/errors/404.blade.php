<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found</title>
    <!-- Favicons -->
    <link href="{{ asset('logos/teamup fav-icon.png') }}" rel="icon">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.ihavecookies.css')}}">
    <style>
        :root {
            --main-color-one: #50a6ec;
            --secondary-color: #e39494;
            --heading-color: #3e3d29;
            --paragraph-color: #fafafa;
        }
    </style>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        #notfound {
            position: relative;
            height: 100vh;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 767px;
            width: 100%;
            line-height: 1.4;
            padding: 0px 15px;
        }

        .notfound .notfound-404 {
            position: relative;
            height: 150px;
            line-height: 150px;
            margin-bottom: 25px;
        }

        .notfound h3 {
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            font-size: 26px;
            line-height: 36px;
            color: var(--heading-color);
        }

        .notfound h2 {
            font-family: 'Titillium Web', sans-serif;
            font-size: 26px;
            font-weight: 700;
            margin: 0;
            color: var(--heading-color);
        }

        .notfound p {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0px;
            color: var(--paragraph-color);
            line-height: 29px;
        }

        .notfound a {
            font-family: 'Titillium Web', sans-serif;
            display: inline-block;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            border: none;
            background: var(--secondary-color);
            padding: 10px 40px;
            font-size: 14px;
            font-weight: 700;
            border-radius: 1px;
            margin-top: 15px;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
            line-height: 26px;
        }

        .notfound a:hover {
            background: var(--main-color-one);
        }

        @media only screen and (max-width: 767px) {
            .notfound .notfound-404 {
                height: 110px;
                line-height: 110px;
            }

            .notfound .notfound-404 h1 {
                font-size: 120px;
            }
        }
    </style>
</head>
<body>
<div id="notfound"
     style="background-image: url({{asset('assets/images/Error/404.png')}});
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: center center;
         background-size: cover;">
    <div class="notfound" style="background-color: rgba(72,104,187,0.44)">
        <div class="notfound-404">
            <h3>Page Not Found</h3>
            <p>We are sorry, the page you requested could not be found. Please go back to the homepage</p>
            <a href="{{url()->previous()}}">Go back</a>
        </div>
    </div>
</div>
</body>
</html>

