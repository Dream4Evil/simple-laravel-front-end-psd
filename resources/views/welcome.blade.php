@extends('layouts/default')
@section('content')
<div class="welcome">
    <div class="container-bg">
       
        <nav class="nav">
            <div class="nav__logo-container">
                <img class="nav__logo" src="../../../public/image/logo.png" alt="North Consulting">
            </div>
            
            <div class="nav__links-container">
                <ul class="nav__links">
                    <li><a href="">oferta</a></li>
                    <li><a href="">aktualności</a></li>
                    <li><a href="">poradnik</a></li>
                    <li><a href="">o nas</a></li>
                    <li><a href="">kontakt</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="welcome__text">
            <h1 class="welcome__title">Lorem ipsum dolor sit amet coś tam</h1>
            <p class="welcome__caption">skandynawskie opis lorem ipsum</p>
        </div>
    </div>
</div>

<div class="contact">
    <div class="container-bg">
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
            <p class="services__caption">skandynawskie szkolenie Hot-Work</p>
        </div>
        <div class="services__container">
            <img class="services__icon" src="image/helmet.png" alt="">
            <p class="services__caption">skandynawskie szkolenia zawodowe</p>
        </div>
        <div class="services__container">
            <img class="services__icon" src="image/co-founder.png" alt="">
            <p class="services__caption">Szkolenia miękkie (dopasowane do potrzeb)</p>
        </div>
        <div class="services__container">
            <img class="services__icon" src="image/business-and-finance.png" alt="">
            <p class="services__caption">Usługi doradcze</p>
        </div>
    </div>
</div>

<div class="range">
    <div class="container-sm">
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