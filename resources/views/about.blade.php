@extends('layouts.main')

@section('content')
<div id="wrapper" class="about_me__page">
    <header id="header">
        <div class="inner">
            @include('includes.top_menu')
        </div>
    </header>
    <div class="book">
        <div class="inner tb">
            <div class="image">
                <div class="tb w100 h100 rL alCenter cover">
                    <img src="images/about_me/1.png" alt="Моя фотография">
                    <p>фрилансер, стажер, волонтер <br>
                        работала над проектом Pocket<span class="fullM">Messenger</span><span class="smM">Msg</span> <br>
                        разрабатывала фирменный стиль<wbr> компании ООО “Тандем”</p>
                </div>
            </div>
            <div class="description tbc vT rL w50">
                <h1>Анастасия Сумеди</h1>
                <h2>UI|UX designer&nbsp;/ graphic designer <span class="adapOff">/</span> illustrator&nbsp;<span class="adapOff2">/</span> арт-директор Artstorylab</h2>
                <p>Я&nbsp;идейный вдохновитель и&nbsp;руководитель студии веб-дизайна Artstorylab. Веб-дизайнер, графический дизайнер, иллюстратор, художник, программист.</p>
                <p>Проектирую интерфейсы, сайты, лендинги, интернет-порталы, мобильные приложения. Верстаю полиграфическую продукцию. Осваиваю языки программирования. Главный стиль моих интерфейсов&nbsp;&mdash; <span>минимализм</span> и&nbsp;<span>flat-дизайн</span>. Я&nbsp;повышаю юзабилити проектов, добиваясь их&nbsp;интуитивной понятности пользователю и&nbsp;эстетичности.</p>
                <p>В&nbsp;воплощении макетов в&nbsp;цифровую жизнь мне помогает надежная команда программистов, тестировщиков, SEO-специалистов. Digital-студия Artstorylab создает полноценные авторские проекты: от&nbsp;рабочих сайтов до&nbsp;журналов и&nbsp;визиток.</p>
            </div>
        </div>
    </div>
    <section class="our_team">
        <h2>Наша команда</h2>
        <div class="all inner">
            <input checked type="radio" name="respond" id="desktop">
            <article id="slider">
                <input checked type="radio" name="slider" id="switch1">
                <input type="radio" name="slider" id="switch2">
                <div id="slides">
                    <div id="overflow">
                        <div class="image">
                            <article class="first">
                                <input checked type="radio" name="full" id="click1">
                                <label for="click1">
                                    <img src="images/about_me/team-photo.jpg" alt="Фото сотрудника"></label>
                                <input type="radio" name="full" id="click2">
                                <label for="click2">
                                    <img src="images/about_me/team-photo.jpg" alt="Фото сотрудника"></label>
                                <input type="radio" name="full" id="click3">
                                <label for="click3">
                                    <img src="images/about_me/team-photo.jpg" alt="Фото сотрудника"></label>
                                <input type="radio" name="full" id="click4">
                                <label for="click4">
                                    <img src="images/about_me/team-photo.jpg" alt="Фото сотрудника"></label>
                                <input type="radio" name="full" id="click5">
                                <label for="click5">
                                    <img src="images/about_me/team-photo.jpg" alt="Фото сотрудника"></label>
                                <input type="radio" name="full" id="click6">
                                <label for="click6">
                                    <img src="images/about_me/team-photo.jpg" alt="Фото сотрудника"></label>
                            </article>
                        </div>
                    </div>
                </div>
                <div id="controls">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                </div>
                <div id="active">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                </div>
            </article>
        </div>
    </section>
    <section class="instruments">
        <div class="bg-inst">
            <h2>Инструменты</h2>
            <div class="flextools inner">
                <article class="tools">
                    <h3>Опыт</h3>
                    <ul>
                        <li>Креативное мышление</li>
                        <li>Исследования пользователей</li>
                        <li>Анализ рынка</li>
                        <li>UX design</li>
                        <li>UI design</li>
                        <li>Digital-маркетинг</li>
                        <li>Дизайн-стратегия</li>
                        <li>Брендинг и айдентика</li>
                        <li>Производство контента</li>
                    </ul>
                </article>
                <article class="tools pos-tool">
                    <h3>Дизайн</h3>
                    <ul>
                        <li>Adobe Photoshop</li>
                        <li>Adobe InDesign</li>
                        <li>Adobe Illustrator</li>
                        <li>Adobe Premier Pro</li>
                        <li>Adobe After Effects</li>
                        <li>Adobe XD</li>
                        <li>Figma</li>
                        <li>UXPin</li>
                        <li>Hubspot</li>
                        <li>Campaign Monitor</li>
                        <li>Mail Chimp</li>
                    </ul>
                </article>
                <article class="tools">
                    <h3>Программирование</h3>
                    <ul>
                        <li>Web Development</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>Yii2 Framework</li>
                        <li>Data Bases</li>
                    </ul>
                </article>
                <article class="tools pos-tool">
                    <h3>Сервисы</h3>
                    <ul>
                        <li>Microsoft Office</li>
                        <li>Github</li>
                        <li>Trello</li>
                        <li>Slack</li>
                        <li>Jira</li>
                        <li>Google Analytics</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>
    <section class="licences">
        <h2>Лицензии и сертификаты</h2>
        <div class="contLicen inner">
            <article class="portal">
                <img src="images/about_me/certif-gb.png" alt="Сертификат GeekBrains">
                <section class="list">
                    <h3><a href="https://geekbrains.ru/" target="_blank">GeekBrains - digital-портал</a></h3>
                    <p>Мы прошли полные курсы обучения и стажировки самых востребованных IT-профессий на сегодняшний день:</p>
                    <ul>
                        <li>Дизайнер интерфейсов</li>
                        <li>Веб-дизайнер</li>
                        <li>Графический дизанер</li>
                        <li>Фронтенд-разработчик</li>
                        <li>SEO-специалист</li>
                        <li>SMM-менеджер</li>
                        <li>Product Manager</li>
                    </ul>
                </section>
            </article>
            <article class="portal skill">
                <img src="images/about_me/certif-skill.jpg" alt="Сертификат Skillbox">
                <section class="list">
                    <h3><a href="https://skillbox.ru/" target="_blank">Skillbox - онлайн-университет</a></h3>
                    <p>Мы часто проходим практику и участвуем в стажировках на различных порталах, чтобы совершенствовать свое мастерство и быть в курсе новых трендов!</p>
                </section>
            </article>
        </div>
    </section>
    <section class="licences_adap">
        <h2><a href="https://geekbrains.ru/" target="_blank">GeekBrains, </a><a href="https://skillbox.ru/" target="_blank">Skillbox, </a><br><a href="https://www.coursera.org/" target="_blank">Coursera, </a><a href="https://www.skillshare.com/" target="_blank">Skillshare...</a></h2>
        <article class="portal_adap">
            <div class="lic-pic">
                <img src="images/about_me/adapGB-sert.jpg" alt="Сертификаты">
            </div>
            <section class="list_adap">
                <p>Мы прошли полные курсы обучения и стажировки самых востребованных IT-профессий на сегодняшний день:</p>
                <ul>
                    <li>Дизайнер интерфейсов</li>
                    <li>Веб-дизайнер</li>
                    <li>Графический дизанер</li>
                    <li>Фронтенд-разработчик</li>
                    <li>SEO-специалист</li>
                    <li>SMM-менеджер</li>
                    <li>Product Manager</li>
                </ul>
            </section>
        </article>
    </section>
    <div class="clr_about"></div>
    <footer id="footer">
        @include('includes.footer_form')
    </footer>
</div>
<!--end wrapper-->
@endsection
