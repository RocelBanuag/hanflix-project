<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanflix</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
    <!-- External CSS -->
    <link rel="stylesheet" href="./css/landing.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Font Link -->
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    
    <style>
        @import url('http://fonts.cdnfonts.com/css/gotham');
    </style>

</head>

<style>
    body {
        background-image: url('./images/bghanflix4.jpg');
    }
</style>
<body>
    @extends('layout.navbar')
    @section('content')
    
    
    <div class="content text-white text-center">
        <h1>Watch your favorite Movies<h1> 
        <h1>and Livestream here!</h1>
        <p>Hanflix and chill?</p>
        <a id="subscribe" href="">
            <button class="btn-reg btn-danger">
                Register now!
            </button>
        </a>
    </div>
    
    <di v class="mid-container text-white d-flex justify-content-center">
        <div class="row-first">
            <div class="col text-content mt-4 ">
                <h2>Watch anywhere!</h2>
                <p>Enjoy your free time while 
                <br> watching movies</p>
            </div>
            <div class="col-lg d-flex justify-content-center align-items-center flatscreen">
                <img id="picture" src="./images/tv.png" alt="">
            </div>
        </div>
    </div>

    <div class="second-lower-container">
        <div class="row-second">
            <img src="./images/hanflixtv.png">
            <div class="email">
                <input type="email" name="email" placeholder="Email Address">
                <button>Submit</button>
            </div>
        </div>
        <div class="right-div">
            <div class="right-texts">
                <h3>Subscribe to have <br>profile features</h3>
                <p>Enjoy anytime <br> and cancel anytime!</p>
            </div>
        </div>
    </div>


    @endsection
</body>
</html>