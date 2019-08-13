<form class="inner" action="" method="post" id="form1" name="mail-form">
    <!--<span id="connect"></span>-->
    <!--<button class="rL is-animated__single" name="mail-submit"></button>-->
    <span class="rL is-animated__single"><a class="regP" href="/registration-project">Заказать проект</a></span>

    <div class="rL is-animated">
        <div class="rL fleft form is-animated">

            <div class="reg abs l0" id="spasibo">
                <div class="close cp"></div>
                <div class="ah1">
                    Спасибо!
                </div>
                <p>Анастасия свяжется с Вами в ближайшее время</p>
            </div>

            <div class="input_block rL fleft">
                <input type="hidden" name="short_form" value="1">
                <input autocomplete="off" type="email" name="email" class="rL hid box w100 inputbox" placeholder="Ваш e-mail" required="">
            </div>
            <label class="db rL hid box">
                <input required type="checkbox">
                <b></b>
                <span class="rL">Ознакомлен с <a href="/politika.html" class="rules_link" target="_blank">Правилами обработки персональных данных</a></span>
            </label>
            <div class="clear"></div>
        </div>
        <div itemscope itemtype="http://schema.org/Organization" class="links rL fright is-animated">
            <meta itemprop="name" content="WEB-DESIGN" />
            <meta itemprop="description" content="Я Анастасия Сумеди, молодой web-designer, готовый создавать новые креативные проекты и через них вносить свой вклад в историю цифрового искусства. Добро пожаловать в мою веб-лабораторию." />
            <link itemprop="sameAs" href="https://vk.com/artstorylab">
            <link itemprop="sameAs" href="https://www.instagram.com/artstorylab/">
            <link itemprop="sameAs" href="https://www.behance.net/sumedianasfead">
            <a href="mailto:sumedi.anastasia@yandex.ru" class="rL db fleft"><span class="rL" itemprop="email">sumedi.anastasia@yandex.ru</span></a>
            <a href="tel:+79252270474" class="rL db fright"> <span class="rL" itemprop="telephone">8 925 227 04 74</span></a>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="social__menu is-animated">
        <div class="fleft menu rL">
            @include('includes.menu_items')
        </div>
        <div class="fright social rL">
            <div class="db h100 rL">
                <a href="https://www.behance.net/sumedianasfead" target="_blank" class="fa fa-behance vM rL"></a>
                <a href="https://www.instagram.com/artstorylab/" target="_blank" class="fa fa-instagram vM rL"></a>
                <a href="https://vk.com/artstorylab" target="_blank" class="fa fa-vk vM rL"></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="copyright is-animated">
        © 2018-2019 <a href="#" class="">Artstorylab</a>
    </div>
    <input autocomplete="off" type="hidden" name="call-control" class="call-control" value="0">
</form>
