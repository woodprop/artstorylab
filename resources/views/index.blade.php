@extends('layouts.main')

@section('title', 'Главная')

@section('content')
<div id="fullpage">
    <header id="section1" class="section fp-section active" data-anchor="firstPage">
        <div class="inner">

            @include('includes.top_menu')

            <h1><span class="white">Web-Design</span> <span class="db">Laboratory</span></h1>
            <div class="about_me">
                Я <span class="bold">Анастасия Сумеди</span>, <i class="db"></i>молодой web-designer, готовый создавать новые креативные проекты и через них вносить свой вклад <i class="db"></i>в историю цифрового искусства. Добро пожаловать в мою веб-лабораторию.
            </div>
        </div>
    </header>
    <div id="section2" class="section second fp-section mycinema" data-anchor="secondPage">
        <div class="inner tb w100">
            <div class="tbc vT rL left_side is-animated">
                <div class="tb w100 h100 rL hid alCenter">
                    <div class="tbc vM rL w100 h100">
                        <img src="images/mycinema/1.png" alt="MyCinema" class="inb vM rL">
                    </div>
                </div>
            </div>
            <div class="right_side tbc vT rL is-animated__single">
                <h2>MyCinema</h2>
                <div class="txt">Мобильное приложение для быстрого заказа билетов в кинотеатр онлайн с интуитивно понятным интерфейсом</div>
                <a href="#">
                    <span class="rL">Case Study</span>
                </a>
            </div>
        </div>
    </div>
    <div id="section3" class="section third fp-section dance" data-anchor="thirdPage">
        <div class="inner">
            <div class="image rL alCenter is-animated__single">
                <div class="tb w100 h100 rL alCenter">
                    <div class="tbc vM rL w100 h100">
                        <img src="images/dance/1.png" alt="" class="inb vM rL">
                    </div>
                </div>
            </div>
            <h2 class="is-animated"><span class="rL">Dance.With.Sense</span></h2>
            <div class="txt is-animated">Особый проект сайта-визитки для профессионального танцора</div>
            <a href="#" class="is-animated">
                <span class="rL">Case Study</span>
            </a>
        </div>
    </div>
    <div id="section4" class="section fourth fp-section sailing" data-anchor="fourthPage">
        <div class="inner">
            <div class="fright rL right_side is-animated">
                <div class="tb w100 h100 rL hid alCenter">
                    <div class="tbc vM rL w100 h100">
                        <img src="images/sailing/1.png" alt="MyCinema" class="inb vM rL">
                    </div>
                </div>
            </div>
            <div class="content rL hid is-animated__single">
                <h2>Sailing StartUp</h2>
                <div class="txt">Landing Page венчурного фонда с презентацией сферы его деятельности и главных преимуществ. Работа с дизайнерского конкурса.</div>
                <a href="#">
                    <span class="rL">Case Study</span>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="section5" class="section fifth fp-section specialis" data-anchor="fifthPage">
        <div class="inner">
            <h2><span class="rL">Я работаю над</span></h2>
            <div class="rL is-animated">
                <div class="row rL">
                    <div class="abs">1</div>
                    <h4><span class="bold">UI | UX</span> Design</h4>
                </div>
                <div class="row rL">
                    <div class="abs">2</div>
                    <h4><span class="bold">Адаптивная</span> верстка</h4>
                </div>
                <div class="row rL">
                    <div class="abs">3</div>
                    <h4>Дизайн <span class="bold">мобильных приложений</span></h4>
                </div>
                <div class="row rL">
                    <div class="abs">4</div>
                    <h4>Дизайн <span class="bold">полиграфии</span></h4>
                </div>
                <div class="row rL">
                    <div class="abs">5</div>
                    <h4><span class="bold">Landing Page</span></h4>
                </div>
                <div class="row rL">
                    <div class="abs"></div>
                    <h4>Анимированные презентации</h4>
                </div>
                <div class="row rL">
                    <div class="abs plus">+</div>
                    <h4>Слайд-шоу и видеоролики</h4>
                </div>
            </div>
        </div>
    </div>
    <footer id="section6" class="section sixth fp-section" data-anchor="sixthPage">
        @include('includes.footer_form')
    </footer>
</div><!--end wrapper-->
@endsection
