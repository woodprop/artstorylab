@extends('layouts.main')

@section('content')
<div id="wrapper" class="sitilinck_page">
    <header id="header">
        <div class="inner">
            @include('includes.top_menu')
        </div>
    </header>
    <div class="shadow_block rL"></div>
    <div class="target rL hid">
        <div class="inner">
            <span class="db alCenter">Цель редизайна сайта Citilink.ru -</span>
            <p class="alCenter">создание более удобного пользовательского интерфейса,<b class="p"></b> удаление лишних, затрудняющих восприятие элементов</p>
        </div>
    </div>
    <div class="banner  rL" style="background-image: url({{ app('url')->asset('images/photos/case_citilink/photo_case_citilink-min.png') }});"></div>
    <footer id="footer">
        @include('includes.footer_form')
    </footer>
</div><!--end wrapper-->

@endsection
