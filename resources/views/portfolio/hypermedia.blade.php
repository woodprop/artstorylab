@extends('layouts.main')

@section('content')
<div id="wrapper" class="Gms_page">
    <header id="header">
        <div class="inner">
            @include('includes.top_menu')
            <span class="ah2 alCenter db">Венский конгресс</span>
        </div>
    </header>
    <div class="text_block rL hid">
        <div class="inner2">
            <span class="db">Гипермедиа сочинение (ГМС)</span>
            <p>Короткометражный видеоролик на научную или образовательную тему с набором схем, таблиц, фотографий, клипов. К видеоролику добавляется речитатив со звуковыми эффектами и фоновой музыкой.</p>
        </div>
    </div>
    <div class="text_block rL hid">
        <div class="inner2">
            <span class="db">Моя научная работа</span>
            <p>ГМС по истории первой половины XIX века после Наполеоновских войн. Ролик затрагивает значение французской экспансии в истории Европы, конгрессы послевоенного времени, в том числе Венский конгресс и образование Священного союза как прообраза международных организаций XX века.</p>
        </div>
    </div>
    <div class="video_block rL hid">
        <div class="inner">
            <div class="vid cover w100">
                <iframe src="images/gms/gms.mp4" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <footer id="footer">
        @include('includes.footer_form')
    </footer>
</div><!--end wrapper-->
@endsection
