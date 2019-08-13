@extends('layouts.main')

@section('content')
<div id="wrapper" class="Dance_page">
    <header id="header">
        <div class="inner">
            @include('includes.top_menu')
        </div>
    </header>
    <div class="rL logo_block hid cover">
        <span class="db logo alCenter">Dance.with.sense</span>
    </div>
    <div class="project rL hid">
        <div class="inner">
            <span class="db upp">project</span>
            <p class="alCenter">Визитка танцора, представляющая его репертуар, опыт, освоенные танцевальные стили</p>
            <span class="db upp colors">colors</span>
            <div class="color_block rL cover">
                <div class="row rL ">
                    <div class="item box fleft rL w20">
                        <div class="color"></div>
                        <span class="db">#b18895</span>
                    </div>
                    <div class="item box fleft rL w20">
                        <div class="color"></div>
                        <span class="db">#462f37</span>
                    </div>
                    <div class="item box fleft rL w20">
                        <div class="color"></div>
                        <span class="db">#6ea6b8</span>
                    </div>
                    <div class="item box fleft rL w20">
                        <div class="color"></div>
                        <span class="db">#ffffff</span>
                    </div>
                    <div class="item box fleft rL w20">
                        <div class="color"></div>
                        <span class="db">#000000</span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="TYPOGRAPHY_block rL">
        <div class="inner" style="background-color: #fff;">
            <span class="db headline rL">TYPOGRAPHY</span>
            <div class="item w50 fleft box rL alCenter">
                <img src="images/dance/INTRO.png" alt="" class="db">
                <div class="text_block rL box">
                    <span class="db">Headline 1: 48px</span>
                    <span class="db">Subeadline: 36px</span>
                </div>
            </div>
            <div class="item w50 fleft box rL alCenter">
                <img src="images/dance/ptserif.png" alt="" class="db">
                <div class="text_block rL box">
                    <span class="db">Headline 1: 48px</span>
                    <span class="db">Subeadline: 36px</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>



    <footer id="footer">
        @include('includes.footer_form')
    </footer>
</div><!--end wrapper-->
@endsection
