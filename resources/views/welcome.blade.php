@extends('layouts/default')
@section('content')
<div class="welcome">
    <div class="container-bg bg-dark">
                
        <nav class="nav navbar navbar-expand-lg ">
            <div class="d-flex flex-grow-1">
                <span class="navbar-brand w-100">
                     <a class="navbar-brand-two mx-auto d-inline-block" href="#">
                        <img class="nav__logo" src="../../../public/image/logo.png" alt="North Consulting">
                    </a>
                </span>

                <div class="nav-button w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            
            <div class="nav__links-container collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="nav__links navbar-nav ml-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="#" class="nav-link menu-item">oferta</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link menu-item">aktualności</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link menu-item">poradnik</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link menu-item">o nas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link menu-item">kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
        
    </div>
    
    <div class="welcome-container container-bg">
        
        <div class="welcome__text">
            <h1 class="welcome__title">Lorem ipsum dolor sit amet coś tam</h1>
            
            <p class="welcome__caption">skandynawskie opis lorem ipsum</p>
        </div>
        
        <div class="welcome__link-list">
           
           <a class="link-list__item" href="https://www.linkedin.com/">
            <img src="image/linkedin.png" alt="North Consulting Linkedin">
           </a>
            
            <a class="link-list__item" href="https://www.facebook.com/">
             <img src="image/facebook.png" alt="North Consulting Facebook">
            </a>
            
        </div>
        
    </div>
    
</div>

<div class="contact">
    <div class="contact-container">
       <a href="" class="contact__big-button">
            <img class="big-button__image" src="image/arrow-right.png" alt="">
            <p class="big-button__text">SZKOLENIA HOT - WORK</p>
        </a>
        <ul class="contact__elements">
            <li class="contact__el"><img class="el__img" src="image/phone-call-button.png" alt="">+48 609 667 148</li>
            <li class="contact__el"><img class="el__img" src="image/envelope.png" alt="">info@northconsulting.pl</li>
        </ul>
        
    </div>
</div>


<div class="about">
    <div class="container-sm">
        <h2 class="about__title">Działania <br>
        dla Twoich korzyści</h2>
        <p class="about__caption">Oferujemy usługi doradcze dla polskich firm, które chcą rozszerzyć swoją działalność na rynki krajów skandynawskich. Prowadzimy także szkolenia, które są niezbędne dla pracowników mających podjąć pracę lub brać udział w wykonaniu projektu w jednym z państw skandynawskich.</p>
    </div>
</div>

<div class="services">
    <div class="container-sm services-all">
        <div class="services__container">
            <img class="services__icon" src="image/group.png" alt="">
            <p class="services__caption">skandynawskie szkolenie <br>Hot-Work</p>
        </div>
        <div class="services__container">
            <img class="services__icon" src="image/helmet.png" alt="">
            <p class="services__caption">skandynawskie szkolenia zawodowe</p>
        </div>
        <div class="services__container">
            <img class="services__icon" src="image/co-founder.png" alt="">
            <p class="services__caption">Szkolenia miękkie (dopasowane do&nbsp;potrzeb)</p>
        </div>
        <div class="services__container">
            <img class="services__icon" src="image/business-and-finance.png" alt="">
            <p class="services__caption">Usługi <br>doradcze</p>
        </div>
    </div>
</div>

<div class="range">
    <div class="container-sm flex">
        <div class="range__text-container">
            <h2 class="range__title">Zasięg</h2>
            <p class="range__caption">Szkolenia prowadzone na terenie całej Polski (m.in. Trójmiasto,
            Warszawa, Szczecin, Wrocław, Kraków, Rzeszów, Białystok, Bydgoszcz,
            Katowice), Skandynawii (Norwegia – Oslo, Trondheim, Bergen,
            Szwecja – Malmo, Goteborg, Sztokholm, Dania, Finlandia) oraz
            w innych krajach europejskich (Belgia, Holandia, Niemcy, Słowacja,
            Czechy, Litwa).
            </p>
        </div>

        <div class="range__image-container">
            <img src="image/couple.png" alt="">
        </div>
    </div>
</div>

@stop