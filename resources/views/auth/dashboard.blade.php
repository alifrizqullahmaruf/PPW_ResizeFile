@extends('auth.layouts')

@section('content')
<header class="header">
    <a href="#" class="logo">Portofolio.</a>

    <nav class="navigasi">
        <a href="#" style="--i:1;" class="active">Home</a>
        <a href="#" style="--i:2;">About</a>
        <a href="#" style="--i:3;">Skills</a>
        <a href="#" style="--i:4;">Portofolio</a>
        <a href="#" style="--i:5;">Contact Us</a>
    </nav>
</header>

<section class="home">
    <div class="home-content">
        <h3> Hello, It's Me </h3>
        <h1>Arelia Maia Ashary</h1>
        <h3>I'm a <span class="multiple-text">UI/UX Designer</span></h3>
        <p>A Vocational School
            student majoring in Software Engineering
            Technology from the 2022 cohort. I have a strong interest in
            the field of IT, particularly in UI/UX,
            and I have experience participating in a
            six-month coding bootcamp to develop product
            development skills. I am a reliable individual
            who excels both in solo work and team
            collaborations. I am detail-oriented,
            persistent, adaptable, critical thinker.</p>

        <div class="social-media">
            <a href="#" style="--i:7;"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#" style="--i:8;"><i class='bx bxl-linkedin-square'></i></a>
            <a href="#" style="--i:9;"><i class='bx bxl-github'></i></a>
            <a href="#" style="--i:10;"><i class='bx bxl-twitter'></i></a>
        </div>
        <a href="#" class="cv">Download CV</a>
    </div>
    <div class="home-img">
        <img src="" alt="">
    </div>
</section>
@endsection