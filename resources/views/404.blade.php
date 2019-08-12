@extends('layouts.main')

@section('content')
<div id="wrapper" class="error_page">
    <header>
        <div class="inner">
            <div class="rL">
                <div class="rL">
                    <div class="tb w100 h100 rL alCenter">
                        <a href="/" class="tbc vM rL w100 button h100">
                            <img src="{{ app('url')->asset('img/logo.png') }}" alt="Логотип" class="inb vM rL">
                        </a>
                    </div>
                </div>
            </div>
            <h1><span class="rL">Такой страницы не существует :(</span></h1>
            <div class="txt">Возможно, вы ошиблись с адресом ссылки.</div>
            <a href="/" class="db">
                <span class="rL">
                    На главную
                </span>
            </a>
        </div>
    </header>
</div><!--end wrapper-->
@endsection
