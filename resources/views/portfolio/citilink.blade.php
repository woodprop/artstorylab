@extends('layouts.main')

@section('content')
<div id="wrapper" class="sitilinck_page">
    <header id="header">
        <div class="inner">
            <div class="top_block rL">
                <div class="fleft rL logo">
                    <div class="tb w100 h100 rL alCenter">
                        <a href="/" class="tbc vM rL w100 button h100">
                            <img src="template/img/logo.png" alt="Логотип" class="inb vM rL">
                        </a>
                    </div>
                </div>
                <div class="right_side_adap rL hid">
                    <div class="icon rL hid" id="button-menu_adaptive">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="fright rL">

                    [[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &resources=`-1`
                    ]]
                    <ul>
                        <li><a class="scroll" href="#connect"><span class="rL">Заказать проект</span></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="shadow_block rL"></div>
    <div class="target rL hid">
        <div class="inner">
            <span class="db alCenter">Цель редизайна сайта Citilink.ru -</span>
            <p class="alCenter">создание более удобного пользовательского интерфейса,<b class="p"></b> удаление лишних, затрудняющих восприятие элементов</p>
        </div>
    </div>
    <div class="banner  rL" style="background-image: url(images/photos/case_citilink/photo_case_citilink-min.png);"></div>
    <footer id="footer">
        [[$footer]]
    </footer>
</div><!--end wrapper-->

@endsection
