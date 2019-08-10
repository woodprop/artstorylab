@extends('layouts.main')

@section('content')
<div id="wrapper" class="prototype_page">
    <header id="header">
        <div class="inner">
            @include('includes.top_menu')
        </div>
    </header>
    <div class="prototype_banner">
        <div class="inner">
            <h1>Онлайн школа</h1>
            <div class="txt">UX-design</div>
        </div>
    </div>
    <div class="prototype">
        <div class="inner">
            <h2>Интерактивный прототип в AxureRP</h2>
            <div class="prototype_slider">
                <div class="item rL alCenter">
                    <div class="tb w100 h100 rL alCenter">
                        <div class="tbc vM rL w100 h100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="purposes">
                <h3>Цели прихода пользователей на проектируемый сайт</h3>
                <ul>
                    <li><span class="db rL">Получить полное представление о программах обучения и курсах, преподаваемых в онлайн-школе</span></li>
                    <li><span class="db rL">Записаться на курс</span></li>
                    <li><span class="db rL">Найти контактную информацию</span></li>
                    <li><span class="db rL">Получить сертификаты или дипломы после обучения</span></li>
                </ul>
                <div class="image rL">
                    <div class="tb w100">
                        <div class="image_1 rL">
                            <div class="tb w100 h100 rL alCenter">
                                <div class="tbc vM rL w100 h100">
                                    <img src="{{ app('url')->asset('images/school/image1.png') }}" alt="" class="inb vM rL">
                                </div>
                            </div>
                        </div>
                        <div class="image_2 rL">
                            <div class="tb w100 h100 rL alCenter">
                                <div class="tbc vM rL w100 h100">
                                    <img src="{{ app('url')->asset('images/school/image2.png') }}" alt="" class="inb vM rL">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image_3 rL">
                        <div class="tb w100 h100 rL alCenter">
                            <div class="tbc vM rL w100 h100">
                                <img src="{{ app('url')->asset('images/school/image3.png') }}" alt="Авторизация" class="inb vM rL">
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Посмотрите прототип в Интернете:</h4>
                <a href="https://lq57xi.axshare.com" class="db button">https://lq57xi.axshare.com
                </a>
            </div>
        </div>
    </div>
    <footer id="footer">
        @include('includes.footer_form')
    </footer>
</div><!--end wrapper-->
@endsection
