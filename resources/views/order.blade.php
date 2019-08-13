<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
{{--ToDo убрать костыли, отправка письма--}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <title>ARTSTORYLAB | Заказать проект</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" type="text/css" href="js/fancyBox/source/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <link rel="stylesheet" href="css/style-reg.css">
</head>

<body>
<div id="fakeloader">
</div>
<div id="container" class="reg_project">
    <header>
        <div class="header-cont">
            <div class="logo-reg">
                <a href="/" class="button">
                    <img src="img/logo_black.png" alt="Логотип" class="inb vM rL">
                </a>
            </div>
            <div class="back-but">
                <input type="button" onclick="history.back();" value="Назад">
                <a href="#" onclick="history.back();"><span>Закрыть</span></a>
            </div>
        </div>
        <div class="clear"></div>

    </header>
    <div class="mainDiv">
        <div class="cont-form">
            <input checked id="next" type="radio" name="go">
            <input id="next1" type="radio" name="go">
            <input id="next2" type="radio" name="go">
            <input id="next3" type="radio" name="go">
            <input id="next4" type="radio" name="go">
            <div class="navigation">
                <label for="next"></label>
                <label for="next1"></label>
                <label for="next2"></label>
                <label for="next3"></label>
            </div>
            <article>
                <div class="nextBut">
                    <label for="next1">Дальше</label>
                </div>
                <div class="lastBut">
                    <label for="next" class="last-step2"></label>
                </div>
                <div class="nextBut">
                    <label for="next2" class="next-step2">Дальше</label>
                </div>
                <div class="lastBut">
                    <label for="next1"></label>
                </div>
                <div class="nextBut">
                    <label for="next3" id="nextStep3">Дальше</label>
                </div>
                <div class="lastBut">
                    <label for="next2" id="lastStep3"></label>
                </div>
                <div class="nextBut">
                    <label for="next4">Готово</label>
                </div>
            </article>
            <div class="over-form">
                <form>
                    <fieldset class="step1">
                        <legend>Заказать проект</legend>
                        <p>Благодарю за доверие к нашей работе! Наша команда воплощает Ваши идеи в жизнь. Пожалуйста, расскажите нам о Вашем проекте, заполнив анкету ниже. Мы свяжемся с Вами в ближайшее время.</p>
                        <p>Как Вас зовут?</p>

                        <label class="wrong1"><input type="text" id="user_name" placeholder="Ваше имя" value=""><span>Ой! Что-то неверно!</span></label>
                        <p>Как мы можем связаться с Вами?</p>

                        <label class="wrong2"><input type="email" id="user_email" placeholder="E-mail"><span>Ой! Что-то неверно!</span></label>

                        <label class="wrong3"><input type="tel" id="user_tel" placeholder="Телефон"><span>Ой! Что-то неверно!</span></label>
                    </fieldset>
                    <fieldset class="step2">
                        <legend>Что Вас интересует?</legend>
                        <p><span></span>, приветствуем Вас! Выберите подходящие Вам опции.</p>
                        <div class="options">
                            <input type="checkbox" id=option1 name="web">
                            <label for="option1">
                                <img src="images/registration-project/web-blue.png" alt="Выбрать Web">
                                <p>Web</p>
                            </label>
                            <input type="checkbox" id=option2 name="mob">
                            <label for="option2">
                                <img src="images/registration-project/mob-blue.png" alt="Выбрать Mobile">
                                <p>Mobile</p>
                            </label>
                            <input type="checkbox" id=option3 name="graph">
                            <label for="option3">
                                <img src="images/registration-project/graph-blue.png" alt="Выбрать Graphic">
                                <p>Graphic</p>
                            </label>
                            <input type="checkbox" id=option4 name="oth">
                            <label for="option4">
                                <img src="images/registration-project/oth-blue.png" alt="Выбрать Другое">
                                <p>Другое</p>
                            </label>
                        </div>
                    </fieldset>
                    <fieldset class="step3">
                        <legend>Каков Ваш бюджет?</legend>
                        <p>Примерный, обозначенный Вами бюджет поможет нам сориентироваться в определенных моментах при разработке продукта.</p>
                        <div class="val">
                            <input type="text" id="minCost" value="35">
                            <span id="rub1">тыс</span><span id="def"> -</span>
                            <input type="text" id="maxCost" value="70"><span id="rub2">тыс</span>
                        </div>
                        <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="slider"></div>
                        <div class="feti">
                            <label id=minVal>< 5 тыс</label>
                            <span>РУБ</span>
                            <label id=maxVal>> 100 тыс</label>
                        </div>
                        <label id="notManey" for="next3">Я не знаю свой бюджет</label>
                    </fieldset>
                    <fieldset class="step4">
                        <legend>И наконец...</legend>
                        <p>Ответим на два последних вопроса.</p>
                        <p>Когда вы планируете завершить проект?</p>
                        <input type="text" id="user_data" placeholder="Примерная дата">
                        <p>Как вы узнали об ARTSTORYLAB?</p>
                        <input type="text" id="user_about" placeholder="Посоветовали">
                        <div class="rule-div">
                            <input type="checkbox" id="rule">
                            <label for="rule"></label>
                            <a href="/politika.html" target="_blank"><span>Ознакомлен с <mark>Правилами обработки персональных данных</mark></span></a>
                        </div>
                    </fieldset>

                    <fieldset class="step5">
                        <legend>Спасибо!</legend>
                        <p>Благодарим за поданную заявку!<br>
                            Мы рассмотрим ее и ответим Вам в течение дня!</p>
                        <span>Вернуться в <a href="#">ARTSTORYLAB</a></span>
                    </fieldset>

                </form>

            </div>
        </div>
    </div>
    <footer>
        <div class="reg-contact">
            <a href="mailto:sumedi.anastasia@yandex.ru">sumedi.anastasia@yandex.ru</a>
            <a href="tel:+79252270474">8 925 227 04 74</a>
        </div>
    </footer>
</div>
<!--end wrapper-->
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.ui-slider.js"></script>

<script type="text/javascript">
    jQuery("#slider").slider({
        min: 0,
        max: 100,
        values: [35, 70],
        range: true,
        stop: function(event, ui) {
            jQuery("input#minCost").val(jQuery("#slider").slider("values", 0));
            jQuery("input#maxCost").val(jQuery("#slider").slider("values", 1));
        },
        slide: function(event, ui) {
            jQuery("input#minCost").val(jQuery("#slider").slider("values", 0));
            jQuery("input#maxCost").val(jQuery("#slider").slider("values", 1));
        }
    });

    jQuery("input#minCost").change(function() {
        var value1 = jQuery("input#minCost").val();
        var value2 = jQuery("input#maxCost").val();

        if (parseInt(value1) > parseInt(value2)) {
            value1 = value2;
            jQuery("input#minCost").val(value1);
        }
        jQuery("#slider").slider("values", 0, value1);
    });


    jQuery("input#maxCost").change(function() {
        var value1 = jQuery("input#minCost").val();
        var value2 = jQuery("input#maxCost").val();

        if (value2 > 100) {
            value2 = 100;
            jQuery("input#maxCost").val(100)
        }

        if (parseInt(value1) > parseInt(value2)) {
            value2 = value1;
            jQuery("input#maxCost").val(value2);
        }
        jQuery("#slider").slider("values", 1, value2);
    });

    $(function() {
        $('#minVal').click(function(){
            var minVal = document.querySelector('#minCost');
            if (minVal.value <= 5) {
                minVal.value = 0;
            }
            else {
                minVal.value = parseInt(document.querySelector('#minCost').value) - 5;
            }
        });

        $('#maxVal').click(function(){
            var maxVal = document.querySelector('#maxCost');
            if (maxVal.value < 200) {
                maxVal.value = parseInt(document.querySelector('#maxCost').value) + 100;
            }
            else {

                maxVal.value = 300 + "+";
            }

        });
    });
</script>


<script src="js/fakeLoader.min.js"></script>
<script>
    $(document).ready(function() {
        $("#fakeloader").fakeLoader({
            timeToHide: 1200,
            bgColor: "#000",
            spinner: "spinner1",
            // imagePath:"template/img/loader.png" //If you want can you insert your custom image
        });
    });
</script>

<script>
    $(function() {
        if (document.querySelector('#next').checked == true) {
            document.querySelector('#next2').disabled = true;
            document.querySelector('#next3').disabled = true;
        }
        $('#next1').click(function() {
            var userName = $('.step1 #user_name').val();
            var userEmail = $('.step1 #user_email').val();
            var userTel = $('.step1 #user_tel').val();
            if (userName == "") {
                document.querySelector('#user_name').style.borderBottom = "1px solid #cc0000";
                document.querySelector('.step1 .wrong1 span').style.display = "block";
                document.querySelector('#next').checked = true;
                document.querySelector('#next1').checked = false;
                document.querySelector('#next2').disabled = true;
                document.querySelector('#next3').disabled = true;
            } else {
                $('.step2 p span').text(userName);
                document.querySelector('#user_name').style.borderBottom = "1px solid #2952cc";
                document.querySelector('.step1 .wrong1 span').style.display = "none";
                document.querySelector('#next2').disabled = false;
                document.querySelector('#next3').disabled = false;
                document.querySelector('#next').checked = false;
                document.querySelector('#next1').checked = true;

            }

            if (userEmail == "" || userEmail.search(/[А-Яа-я]/) == false) {
                if (userTel == "" || userTel.search(/[0-9+-]/) || userTel.search(/[A-Za-zА-Яа-я]/) == true) {
                    document.querySelector('#user_tel').style.borderBottom = "1px solid #cc0000";
                    document.querySelector('.step1 .wrong3 span').style.display = "block";
                    document.querySelector('#user_email').style.borderBottom = "1px solid #cc0000";
                    document.querySelector('.step1 .wrong2 span').style.display = "block";
                    document.querySelector('#next').checked = true;
                    document.querySelector('#next1').checked = false;
                    document.querySelector('#next2').disabled = true;
                    document.querySelector('#next3').disabled = true;
                } else {
                    document.querySelector('#user_tel').style.borderBottom = "1px solid #2952cc";
                    document.querySelector('.step1 .wrong3 span').style.display = "none";
                    document.querySelector('#user_email').style.borderBottom = "1px solid #2952cc";
                    document.querySelector('.step1 .wrong2 span').style.display = "none";
                }

            } else {
                document.querySelector('#user_email').style.borderBottom = "1px solid #2952cc";
                document.querySelector('.step1 .wrong2 span').style.display = "none";
                document.querySelector('#user_tel').style.borderBottom = "1px solid #2952cc";
                document.querySelector('.step1 .wrong3 span').style.display = "none";
            }
        });
    });
</script>



<script>
    var notM = false;
    $(document).ready(function() {
        $('#notManey').click(function(){
            return notM = true;
        });


        $('#next4').click(function() {

            if (document.querySelector('#rule').checked == false) {
                document.querySelector('.step4 label').style.border = "1px solid #cc0000";
                document.querySelector('.step4 span').style.color = "#cc0000";
                document.querySelector('.step4 span mark').style.color = "#cc0000";
                document.querySelector('#next3').checked = true;
                document.querySelector('#next4').checked = false;
            }
            else {
                document.querySelector('.step4 label').style.border = "1px solid #2952cc";
                document.querySelector('#next').disabled = true;
                document.querySelector('#next1').disabled = true;
                document.querySelector('#next2').disabled = true;
                document.querySelector('#next3').disabled = true;
                // собираем данные с формы
                var user_name = $('#user_name').val();
                var user_email = $('#user_email').val();
                var user_tel = $('#user_tel').val();
                var user_int1, user_int2, user_int3, user_int4;
                if (document.querySelector('#option1').checked == true) {
                    user_int1 = document.querySelector('#option1').name;
                }
                if (document.querySelector('#option2').checked == true) {
                    user_int2 = document.querySelector('#option2').name;
                }
                if (document.querySelector('#option3').checked == true) {
                    user_int3 = document.querySelector('#option3').name;
                }
                if (document.querySelector('#option4').checked == true) {
                    user_int4 = document.querySelector('#option4').name;
                }
                var user_maney_min;
                var user_maney_max;
                if (notM == true) {
                    user_maney_min = "Бюджет не выбран";
                    user_maney_max = "Бюджет не выбран";
                }
                else{
                    user_maney_min = $('#minCost').val();
                    user_maney_max = $('#maxCost').val();
                }
                var user_data = $('#user_data').val();
                var user_about = $('#user_about').val();


                // отправляем данные
                $.ajax({
                    url: "{{ url('order/place') }}", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "user_name": user_name,
                        "user_email": user_email,
                        "user_tel": user_tel,
                        "user_interests": user_int1 + user_int2 + user_int3 + user_int4,
                        "user_money_min": user_maney_min,
                        "user_money_max": user_maney_max,
                        "user_date": user_data,
                        "user_about": user_about
                    },
                    // после получения ответа сервера
                    success: function(data) {
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
            }
        });


        $('#rule').click(function(){
            document.querySelector('.step4 label').style.border = "1px solid #2952cc";
            document.querySelector('.step4 span').style.color = "#666666";
            document.querySelector('.step4 span mark').style.color = "#666666";
        });
    });

</script>

</body>

</html>
