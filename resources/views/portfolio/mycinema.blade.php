@extends('layouts.main')

@section('content')
    <div id="wrapper" class="cinema_page">
        <header id="header">
            <div class="inner">
                @include('includes.top_menu')
                <span class="ah2 db alCenter">MyCinema</span>
            </div>
        </header>
        <div class="tickets rL hid">
            <div class="inner">
                <div class="fleft rL" style="background-image: url({{ app('url')->asset('images/mycinema/popcorn.png') }});"></div>
                <div class="rL hid">
                    <span class="db">MyCinema</span>
                    <p>быстрый заказ билетов <b class="p"></b> в кинотеатр</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="info_block rL hid">
            <div class="inner">
                <div class="fright rL">
                    <div class="block">
                        <span class="db">Что за приложение?</span>
                        <p>Дизайн приложения для быстрого поиска кинотеатров и сеансов, онлайн-заказа билетов, просмотра киноафиши.</p>
                    </div>
                    <div class="block">
                        <span class="db">Интересное решение</span>
                        <p>Простой и понятный интерфейс, позволяющий пользователю сохранить все данные о купленных билетах прямо в приложении, не создавая аккаунт
                            и не привязывая электронную почту и телефон</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="merits rL hid">
            <div class="inner">
                <div class="block rL">
                    <div class="fright rL">
                        <div class="right rL">1</div>
                        <div class="rL hid"><b>Нижнее меню</b> напоминает интерфейс современных соцсетей, поэтому пользователям легче ориентироваться в приложении</div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block rL">
                    <div class="fright rL">
                        <div class="right rL">2</div>
                        <div class="rL hid"><b>Боковое меню</b> выполняет функцию Личного кабинета, в котором сохраняются контактные данные
                            и реквизиты пользователя</div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="block rL">
                    <div class="fright rL">
                        <div class="right rL">3</div>
                        <div class="rL hid">Лаконичное и удобное <b class="db">окно поиска</b></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="catalog rL " style="background-color: #000;">
            <div class="inner">
                <div class="block">
                    <span class="db">Welcome screen и пустая страница</span>
                    <p>Интуитивно понятная инфографика</p>
                    <div class="item"></div>
                </div>
                <div class="block">
                    <span class="db">Страница ошибки и загрузки</span>
                    <p>Интуитивно понятная инфографика</p>
                    <div class="item"></div>
                </div>
                <div class="block">
                    <div class="item"></div>
                    <span class="db">Билеты</span>
                    <p>как настоящие</p>
                    <div class="item hide"></div>
                </div>
                <div class="block">
                    <div class="item"></div>
                    <span class="db alRight">Афиша</span>
                    <p class="alRight">на главном экране</p>
                    <div class="item hide"></div>
                </div>
                <div class="block">
                    <span class="db alCenter">Кинотеатры</span>
                    <p class=" alCenter">в одном месте</p>
                    <div class="item"></div>
                </div>
            </div>
        </div>
        <div class="palette rL hid">
            <div class="inner">
                <span class="db alCenter">Палитра</span>
                <div class="block">
                    <div class="color"></div>
                    <p class="inb vM">#666666</p>
                    <p class="inb vM">#000000</p>
                </div>
                <div class="block">
                    <div class="color"></div>
                    <p class="inb vM">#cccccc</p>
                    <p class="inb vM">#999999</p>
                </div>
                <div class="block">
                    <div class="color"></div>
                    <p class="inb vM">#993399</p>
                    <p class="inb vM">#660066</p>
                </div>
                <span class="db alCenter rL">Типография</span>
                <div class="TYPOGRAPHY_block rL">
                    <div class="item w50 fleft box rL alCenter">
                        <img src="{{ app('url')->asset('images/mycinema/Roboto_Regular.png') }}" alt="" class="db">
                        <div class="text_block rL box">
                            <span class="db">Headline 1: 48px</span>
                            <span class="db">Subeadline: 36px</span>
                        </div>
                    </div>
                    <div class="item w50 fleft box rL alCenter">
                        <img src="{{ app('url')->asset('images/mycinema/Roboto_Thin.png') }}" alt="" class="db">
                        <div class="text_block rL box">
                            <span class="db">Headline 1: 48px</span>
                            <span class="db">Subeadline: 36px</span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="conclusion rL hid cover">
            <div class="inner">
                <span class="db alCenter">Качественный интерфейс + оригинальная идея</span>
                <span class="db alCenter">=</span>
                <span class="db alCenter">удобство пользователей</span>
                <div class="fon"></div>
                <div class="rL senck">
                    <div class="fleft rL" style="background-image: url({{ app('url')->asset('images/mycinema/popcorn.png') }});"></div>
                    <div class="rL hid">
                        <p>Спасибо за просмотр!</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <footer id="footer">
            @include('includes.footer_form')
        </footer>
    </div><!--end wrapper-->

@endsection
