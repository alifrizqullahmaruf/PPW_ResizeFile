@extends('auth.layout')

@section('content')
<section class="home">
    <div class="home-content">
        <h1>Hi, I'm Alif Rizqullah Maruf</h1>
        <h3>Data Science</h3>
        <p>Hello, let me introduce myself, my name is Alif Rizqullah Maruf, you can call me Kevin. 
            This is my portfolio page as a Data Science. If you are interested in seeing my various portfolios, 
            please click the button below and contact me if you are interested in collaborating with me.</p>
        <div class="btn-box">
            <a href="#">About Me</a>
            <a href="#">My Portfolio</a>
        </div>
    </div>

    <div class="home-sci">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
        <a href="#"><i class='bx bxl-linkedin' ></i></a>
    </div>

    <span class="home-imgHover" style="display: flex; justify-content: center; align-items: center; height: 100vh; animation: floatUpDown 3s infinite;">
        <img src="/img/alifkece.JPG" alt="" class="alip" style=" width:50%;">
    </span>

    <style>
        @keyframes floatUpDown {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-30px);
            }
        }
    </style>
</section>
@endsection
