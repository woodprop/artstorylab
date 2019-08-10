@extends('layouts.main')

@section('content')
    <div id="wrapper" class="portfolio_page">
        <header id="header">
            <div class="inner">
                @include('includes.top_menu')
            </div>
        </header>
        <div class="portfolio rL">
            <div class="inner">
                <h3>Собрание моих последних лучших проектов</h3>
                <div class="row rL">
                    @foreach($projects as $project)

                        <div class="block rL fleft w33-3 box">
                            <div class="rL">
                                <div class="image rL alCenter">
                                    <div class="tb w100 h100 rL alCenter">
                                        <div class="tbc vB rL w100 h100 image-animation">
                                            <a href="{{ url('portfolio/' . $project->template) }}" class="title"><img src="{{ app('url')->asset('images/portfolio/' . $project->image) }}" alt=""
                                                    class="inb vB rL"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="title">{{ $project->title }}</a>
                                <div class="des">
                                    {{ $project->description }}
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="comment">/...это только начало.../</div>
            </div>
        </div>
        <footer id="footer">
            @include('includes.footer_form')
        </footer>
    </div>
    <!--end wrapper-->
@endsection
