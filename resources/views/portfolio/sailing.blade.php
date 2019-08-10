@extends('layouts.main')

@section('content')
    <div id="wrapper" class="sailing_page">
        <header id="header">
            <div class="inner">
                @include('includes.top_menu')
            </div>
        </header>
        <div class="sailing_banner rL">
            <div class="inner">
                <div class="logo rL alCenter">
                    <div class="tb w100 h100 rL alCenter">
                        <div class="tbc vM rL w100 h100">
                            <img src="{{ app('url')->asset('images/sailing/1.png') }}" alt="Логотип" class="inb vM rL">
                        </div>
                    </div>
                    <h1>Sailing Startup</h1>
                </div>
            </div>
        </div>
        <div class="sailing_block">
            <div class="block block_1">
                <div class="inner">
                    <h2>
                        SAILING Startup
                        <span class="db">венчурный фонд</span>
                    </h2>
                    <div class="tb w100 h100 rL bg alCenter">
                        <div class="tbc vM rL w100 h100">
                            <img src="{{ app('url')->asset('images/sailing/first_block_bg.jpg') }}" alt="Фон" class="inb vM rL">
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block_2">
                <div class="inner">
                    <div class="screen screen1">
                        <div class="fright rL">
                            <div class="title rL">Концепция сайта</div>
                            <div class="txt rL">Landing Page венчурного фонда с описанием сферы его работы и преимуществ. Дизайн фирменного стиля с символом сайта - парусником, символизирующим успехи в делах, удачу и достаток. Креативное решение в стиле minimalism, рассчитанное на целевую аудиторию проекта.</div>
                        </div>
                        <div class="content rL hid">
                            <div class="tb w100 h100 rL alLeft">
                                <div class="tbc vM rL w100 h100">
                                    <img src="{{ app('url')->asset('images/sailing/phone.png') }}" alt="Телефон" class="inb vM rL">
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="screen screen2">
                        <div class="inner">
                            <h3>Investments, acceleration and GR for early stage tech startups</h3>
                            <div class="rL alCenter image">
                                <div class="tb w100 h100 rL alCenter">
                                    <div class="tbc vM rL w100 h100 alCenter">
                                        <img src="{{ app('url')->asset('images/sailing/screen2_image.jpg') }}" alt="Сайт" class="inb vM rL">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block_3">
                <div class="advantage advantage1">
                    <div class="inner">
                        <div class="part">
                            <div class="num">1</div>
                            <div class="txt rL hid">
                                <div class="title">Фирменный стиль и популярный тренд</div>
                                <div class="description">Дизайн сайта выполнен в стиле Flat,то есть в нем нет ничего лишнего, <i class="db"></i>затрудняющего восприятие пользователем информации <i class="db"></i>Фирменный стиль поддерживается за счет акцентного голубого цвета</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="image rL alCenter">
                            <img src="{{ app('url')->asset('images/sailing/advantage1.jpg') }}" alt="Гаджеты" style="max-width: 100%;display: block;margin:0 auto;">
                        </div>
                    </div>
                </div>
                <div class="advantage advantage2">
                    <div class="inner">
                        <div class="part">
                            <div class="num">2</div>
                            <div class="txt rL hid">
                                <div class="title">Фирменный стиль и популярный тренд</div>
                                <div class="description">Не позволит пользователю потеряться <i class="db"></i>Увеличение конверсии</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="image rL alCenter">
                            <div class="db rL">
                                <img src="{{ app('url')->asset('images/sailing/advantage2.jpg') }}" alt="Гаджеты" style="max-width: 100%;display: block;margin:0 auto;">
                            </div>
                            <div class="txt">
                                Пользователь ориентируется по сайту <i class="db"></i>благодаря <span>нижнему акцентному </span><i class="db"></i><span>подчеркиванию</span> активной страницы
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantage advantage3">
                    <div class="inner">
                        <div class="part">
                            <div class="num">3</div>
                            <div class="txt rL hid">
                                <div class="title">Оригинальное представление <i class="db"></i>команды</div>
                                <div class="description">Визуально  люди запоминаются быстрее</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="team">
                            <h3>Who Creates it?</h3>
                            <div class="row rL">
                                <div class="t_block fleft rL hid alCenter">
                                    <img src="{{ app('url')->asset('images/sailing/team/1.jpg') }}" alt="Команда" style="max-width: 100%;display: block;">
                                </div>
                                <div class="t_block fleft rL hid alCenter">
                                    <img src="{{ app('url')->asset('images/sailing/team/2.jpg') }}" alt="Команда" style="max-width: 100%;display: block;">
                                </div>
                                <div class="t_block fleft rL hid alCenter">
                                    <img src="{{ app('url')->asset('images/sailing/team/3.jpg') }}" alt="Команда" style="max-width: 100%;display: block;">
                                </div>
                                <div class="t_block fleft rL hid alCenter">
                                    <img src="{{ app('url')->asset('images/sailing/team/4.jpg') }}" alt="Команда" style="max-width: 100%;display: block;">
                                </div>
                                <div class="t_block fleft rL hid alCenter">
                                    <img src="{{ app('url')->asset('images/sailing/team/5.jpg') }}" alt="Команда" style="max-width: 100%;display: block;">
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantage advantage4">
                    <div class="inner">
                        <div class="part">
                            <div class="num">4</div>
                            <div class="txt rL hid">
                                <div class="title">Анимация фотографий команды</div>
                                <div class="description">Открывающееся меню с информацией о конкретном <i class="db"></i>человеке - быстрота извлечения информации</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="foto_animation">
                            <div class="stage stage1">
                                <div class="image image1 rL alCenter fleft">
                                    <div class="rL alCenter">
                                        <div class="abs">
                                            <div class="title">Анастасия Сум</div>
                                            <div class="expert">UI/UX designer / Frontend developer / Illustrator</div>
                                            <div class="des_txt">
                                                Занимаюсь UI/UX проектированием в целом (сайты, приложения, сложные системы). Мне нравится сощдавать удобные продукты для пользователей и помогать эффективно достигать бизнес-целей моего клиента.
                                            </div>
                                        </div>
                                        <div class="tb w100 h100 rL alCenter">
                                            <div class="tbc vM rL w100 h100">
                                                <img src="{{ app('url')->asset('images/sailing/team/5.jpg') }}" alt="Фото" class="inb vM rL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image image2 rL alCenter fleft">
                                    <div class="rL alCenter">
                                        <div class="abs">
                                            <div class="title">Анастасия Сум</div>
                                            <div class="expert">UI/UX designer / Frontend developer / Illustrator</div>
                                            <div class="des_txt">
                                                Занимаюсь UI/UX проектированием в целом (сайты, приложения, сложные системы). Мне нравится сощдавать удобные продукты для пользователей и помогать эффективно достигать бизнес-целей моего клиента.
                                            </div>
                                        </div>
                                        <div class="tb w100 h100 rL alCenter">
                                            <div class="tbc vM rL w100 h100">
                                                <img src="{{ app('url')->asset('images/sailing/team/5.jpg') }}" alt="Фото" class="inb vM rL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="stage stage2">
                                <h2>Всплывающее окно с более <i class="db"></i>подробной информацией</h2>
                                <div class="more">
                                    <div class="tb w100">
                                        <div class="tbc left_side vT rL">
                                            <div class="image rL tb w100 h100">
                                                <div class="tbc vM rL w100 h100 alCenter">
                                                    <img src="{{ app('url')->asset('images/sailing/team/5.jpg') }}" alt="Фото" class="inb vM rL">
                                                </div>
                                            </div>
                                            <div class="social">
                                                <a href="mailto:anastasia.sum@gmail.com" class="db rL mail">anastasia.sum@gmail.com</a>
                                                <a href="tel:89999999999" class="db rL tel">8 999 999 99 99</a>
                                            </div>
                                        </div>
                                        <div class="tbc content vT rL alCenter">
                                            <div class="title">Анастасия Сум</div>
                                            <div class="expert">UI/UX designer / Frontend developer / Illustrator</div>
                                            <div class="des_txt">
                                                Занимаюсь UI/UX проектированием в целом (сайты, приложения, сложные системы). Мне нравится сощдавать удобные продукты для пользователей и помогать эффективно достигать бизнес-целей моего клиента. Работала над таким проектом как “Магазин подарков” для сайта фирмы Таксовичкофф, мобильным приложением “Петербургские просторы” для государственной компании СПб ГБУ “Мостотрест”. Опыт в веб-дизайне: 4 года.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantage advantage5">
                    <div class="inner">
                        <div class="part">
                            <div class="num">5</div>
                            <div class="txt rL hid">
                                <div class="title">Краткость - сестра успеха</div>
                                <div class="description">Краткая форма анкеты для самых занятых пользователей
                                    <span class="db">Увеличивает конверсию</span></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <form action="php/" id="form2" method="post" class="rL">
                            <button type="submit" class="rL" name="mail-submit">
                            <span class="rL">
                                Let’s sail
                            </span>
                            </button>
                            <div class="input_block rL">
                                <input type="email" class="rL hid box w100 inputbox" name="email" placeholder="Your e-mail" required="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="block block_4">
                <div class="main_styles">
                    <div class="inner">
                        <div class="colors">
                            <h3>Цвета</h3>
                            <div class="row black">
                                <div class="string"></div>
                                <div class="txt">Высокое качество</div>
                            </div>
                            <div class="row grey">
                                <div class="string"></div>
                                <div class="txt">Строгость</div>
                            </div>
                            <div class="row blue">
                                <div class="string"></div>
                                <div class="txt">Доверие</div>
                            </div>
                        </div>
                        <div class="printing ">
                            <h3>Типография</h3>
                            <div class="table">
                                <div class="row rL">
                                    <div class="tb w100">
                                        <div class="tbc vT rL geometric">
                                            Geometric
                                        </div>
                                        <div class="tbc vT rL museo">
                                            Museo <i class="db"></i>
                                            Sans
                                        </div>
                                    </div>
                                </div>
                                <div class="row rL">
                                    <div class="tb w100">
                                        <div class="tbc vM rL">
                                            Headline 1: 48px <i class="db"></i>
                                            Subeadline: 36px
                                        </div>
                                        <div class="tbc vM rL">
                                            Body: 24px <i class="db"></i>
                                            Tagline: 16px
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block_5">
                <div class="reply">
                    <div class="inner">
                        <h2>Looking forward to your <span>REPLY</span></h2>
                        <div class="image rL alCenter">
                            <div class="tb w100 h100 rL alCenter">
                                <div class="tbc vM rL w100 h100">
                                    <img src="{{ app('url')->asset('images/sailing/reply_bg.jpg') }}" alt="Сайт" class="inb vM rL">
                                </div>
                            </div>
                        </div>
                        <div class="thanks">Спасибо за просмотр!</div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            @include('includes.footer_form')
        </footer>
    </div><!--end wrapper-->
@endsection
