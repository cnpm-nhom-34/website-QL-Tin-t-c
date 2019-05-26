<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
</head>


<body style="padding-top: 108px;">
    <div class="info border-bottom">
        <div class="animate">
            <img src="{{asset('img/avt.jpg')}}" alt="" width="125px" height="125px">
            <h2>Dung Mam</h2>
            <p>I'm a Back-end Developer . Enjoy my life with million lines of code ⌨️</p>
            <div class="social">
                <a href="https://www.facebook.com/dred.lyver"><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-github-alt"></i></a>
                <a href=""><i class="fas fa-envelope"></i></a>
            </div>
            <div class="navbar-home">
                <ul>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('project')}}">Projects</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <p> D - D © 2019 </p>
        <p>Theme by DungDat</p>
    </div>
</body>

</html>