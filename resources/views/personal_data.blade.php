@extends('layouts.main')
{{--ToDo убрать костыли, восстановить вёрстку--}}
@section('content')
<header class="header">
    @include('includes.top_menu')
</header>
<div class="wraper">
    <main>
        <h1>Политика конфиденциальности персональных данных</h1>
        <p class="p-text">Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в отношении всей информации, которую сайт ARTSTORYLAB - студия веб-дизайна (далее – Artstorylab), расположенный на доменном имени artstorylab.ru (а также его субдоменах), может получить о Пользователе во время использования сайта artstorylab.ru (а также его субдоменов), его программ и его продуктов.</p>
        <ol class="list">
            <li class="main-list">
                Определение терминов
                <ol class="normal">
                    <li>
                        В настоящей Политике конфиденциальности используются следующие термины:
                        <ol>
                            <li>«Администрация сайта» (далее – Администрация) – уполномоченные сотрудники на управление сайтом ARTSTORYLAB - студия веб-дизайна, действующие от имени Artstorylab, которые организуют и (или) осуществляют обработку персональных данных, а также определяет цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</li>
                            <li>«Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному, или определяемому физическому лицу (субъекту персональных данных).</li>
                            <li>«Обработка персональных данных» - любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</li>
                            <li>«Конфиденциальность персональных данных» - обязательное для соблюдения Оператором или иным получившим доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных данных или наличия иного законного основания.</li>
                            <li>«Сайт ARTSTORYLAB - студия веб-дизайна» - это совокупность связанных между собой веб-страниц, размещенных в сети Интернет по уникальному адресу (URL): artstorylab.ru, а также его субдоменах.</li>
                            <li>«Субдомены» - это страницы или совокупность страниц, расположенные на доменах третьего уровня, принадлежащие сайту ARTSTORYLAB - студия веб-дизайна, а также другие временные страницы, внизу который указана контактная информация Администрации</li>
                            <li> «Пользователь сайта ARTSTORYLAB - студия веб-дизайна » (далее Пользователь) – лицо, имеющее доступ к сайту ARTSTORYLAB - студия веб-дизайна, посредством сети Интернет и использующее информацию, материалы и продукты сайта ARTSTORYLAB - студия веб-дизайна.</li>
                            <li> «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта.</li>
                            <li>«IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, через который Пользователь получает доступ на Artstorylab.</li>
                            <li>«Товар » - продукт, который Пользователь заказывает на сайте и оплачивает через платёжные системы.</li>
                        </ol>
                    </li>
                </ol>
            </li>
            <li class="main-list">
                Общие положения
                <ol class="normal">
                    <li>Использование сайта ARTSTORYLAB - студия веб-дизайна Пользователем означает согласие с настоящей Политикой конфиденциальности и условиями обработки персональных данных Пользователя.</li>
                    <li>В случае несогласия с условиями Политики конфиденциальности Пользователь должен прекратить использование сайта ARTSTORYLAB - студия веб-дизайна.</li>
                    <li>Настоящая Политика конфиденциальности применяется к сайту ARTSTORYLAB - студия веб-дизайна. Artstorylab не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь может перейти по ссылкам, доступным на сайте ARTSTORYLAB - студия веб-дизайна.</li>
                    <li>Администрация не проверяет достоверность персональных данных, предоставляемых Пользователем.</li>
                </ol>
            </li>
            <li class="main-list">
                Предмет политики конфиденциальности
                <ol class="normal">
                    <li>Настоящая Политика конфиденциальности устанавливает обязательства Администрации по неразглашению и обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь предоставляет по запросу Администрации при регистрации на сайте ARTSTORYLAB - студия веб-дизайна, при подписке на информационную e-mail рассылку или при оформлении заказа.</li>
                    <li>
                        Персональные данные, разрешённые к обработке в рамках настоящей Политики конфиденциальности, предоставляются Пользователем путём заполнения форм на сайте ARTSTORYLAB - студия веб-дизайна и включают в себя следующую информацию:
                        <ol>
                            <li>фамилию, имя, отчество Пользователя;</li>
                            <li>контактный телефон Пользователя;</li>
                            <li>адрес электронной почты (e-mail)</li>
                            <li>место жительство Пользователя (при необходимости)</li>
                            <li>адрес доставки Товара (при необходимости) </li>
                            <li>фотографию (при необходимости).</li>
                        </ol>
                    </li>
                    <li>
                        Artstorylab защищает Данные, которые автоматически передаются при посещении страниц:<br>
                        <span>- IP адрес;<br></span>
                        <span>- информация из cookies;<br></span>
                        <span>- информация о браузере<br> </span>
                        <span>- время доступа;<br></span>
								<span>- реферер (адрес предыдущей страницы).<br></span>
							<ol>
								<li>Отключение cookies может повлечь невозможность доступа к частям сайта , требующим авторизации.</li>
								<li>Artstorylab осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация используется с целью предотвращения, выявления и решения технических проблем.</li>
							</ol>
                    </li>
                    <li>Любая иная персональная информация неоговоренная выше (история посещения, используемые браузеры, операционные системы и т.д.) подлежит надежному хранению и нераспространению, за исключением случаев, предусмотренных в п.п. 5.2. и 5.3. настоящей Политики конфиденциальности.
                    </li>
                </ol>
            </li>
            <li class="main-list">
                Цели сбора персональной информации пользователя
                <ol class="normal">
                    <li>
                        Персональные данные Пользователя Администрация может использовать в целях:
                        <ol>
                            <li>Идентификации Пользователя, зарегистрированного на сайте ARTSTORYLAB - студия веб-дизайна для его дальнейшей авторизации, оформления заказа и других действий.</li>
                            <li>Предоставления Пользователю доступа к персонализированным данным сайта ARTSTORYLAB - студия веб-дизайна.</li>
                            <li>Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования сайта ARTSTORYLAB - студия веб-дизайна, оказания услуг и обработки запросов и заявок от Пользователя.</li>
                            <li>Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.</li>
                            <li>Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.</li>
                            <li>Создания учетной записи для использования частей сайта ARTSTORYLAB - студия веб-дизайна, если Пользователь дал согласие на создание учетной записи.</li>
                            <li>Уведомления Пользователя по электронной почте.</li>
                            <li>Предоставления Пользователю эффективной технической поддержки при возникновении проблем, связанных с использованием сайта ARTSTORYLAB - студия веб-дизайна.</li>
                            <li>Предоставления Пользователю с его согласия специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени сайта ARTSTORYLAB - студия веб-дизайна.</li>
                            <li> Осуществления рекламной деятельности с согласия Пользователя.</li>
                        </ol>
                    </li>
                </ol>
            </li>
            <li class="main-list">
                Способы и сроки обработки персональной информации
                <ol class="normal">
                    <li>Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.</li>
                    <li>Пользователь соглашается с тем, что Администрация вправе передавать персональные данные третьим лицам, в частности, курьерским службам, организациями почтовой связи (в том числе электронной), операторам электросвязи, исключительно в целях выполнения заказа Пользователя, оформленного на сайте ARTSTORYLAB - студия веб-дизайна, включая доставку Товара, документации или e-mail сообщений.</li>
                    <li>Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти Российской Федерации только по основаниям и в порядке, установленным законодательством Российской Федерации.</li>
                    <li>При утрате или разглашении персональных данных Администрация вправе не информировать Пользователя об утрате или разглашении персональных данных.</li>
                    <li>Администрация принимает необходимые организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц.</li>
                    <li>Администрация совместно с Пользователем принимает все необходимые меры по предотвращению убытков или иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.</li>
                </ol>
            </li>
            <li class="main-list">
                Права и обязанности сторон
                <ol class="normal">
                    <li>
                        Пользователь вправе:
                        <ol>
                            <li>Принимать свободное решение о предоставлении своих персональных данных, необходимых для использования сайта ARTSTORYLAB - студия веб-дизайна, и давать согласие на их обработку.</li>
                            <li>Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной информации.</li>
                            <li>Пользователь имеет право на получение у Администрации информации, касающейся обработки его персональных данных, если такое право не ограничено в соответствии с федеральными законами. Пользователь вправе требовать от Администрации уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав.</li>
                        </ol>
                    </li>
                    <li>
                        Администрация обязана:
                        <ol>
                            <li>Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики конфиденциальности.</li>
                            <li>Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными возможными способами переданных персональных данных Пользователя, за исключением п.п. 5.2 и 5.3. настоящей Политики Конфиденциальности.</li>
                            <li> Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно порядку, обычно используемого для защиты такого рода информации в существующем деловом обороте.</li>
                            <li>Осуществить блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя, или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.</li>
                        </ol>
                    </li>
                </ol>
            </li>
            <li class="main-list">
                Ответственность сторон
                <ol class="normal">
                    <li>Администрация, не исполнившая свои обязательства, несёт ответственность за убытки, понесённые Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2., 5.3. и 7.2. настоящей Политики Конфиденциальности.</li>
                    <li>
                        В случае утраты или разглашения Конфиденциальной информации Администрация не несёт ответственность, если данная конфиденциальная информация:
                        <ol>
                            <li>Стала публичным достоянием до её утраты или разглашения.</li>
                            <li>Была получена от третьей стороны до момента её получения Администрацией Ресурса.</li>
                            <li>Была разглашена с согласия Пользователя.</li>
                        </ol>
                    </li>
                    <li>Пользователь несет полную ответственность за соблюдение требований законодательства РФ, в том числе законов о рекламе, о защите авторских и смежных прав, об охране товарных знаков и знаков обслуживания, но не ограничиваясь перечисленным, включая полную ответственность за содержание и форму материалов.</li>
                    <li> Пользователь признает, что ответственность за любую информацию (в том числе, но не ограничиваясь: файлы с данными, тексты и т. д.), к которой он может иметь доступ как к части сайта ARTSTORYLAB - студия веб-дизайна, несет лицо, предоставившее такую информацию.</li>
                    <li>Пользователь соглашается, что информация, предоставленная ему как часть сайта ARTSTORYLAB - студия веб-дизайна, может являться объектом интеллектуальной собственности, права на который защищены и принадлежат другим Пользователям, партнерам или рекламодателям, которые размещают такую информацию на сайте ARTSTORYLAB - студия веб-дизайна. Пользователь не вправе вносить изменения, передавать в аренду, передавать на условиях займа, продавать, распространять или создавать производные работы на основе такого Содержания (полностью или в части), за исключением случаев, когда такие действия были письменно прямо разрешены собственниками такого Содержания в соответствии с условиями отдельного соглашения.</li>
                    <li>В отношение текстовых материалов (статей, публикаций, находящихся в свободном публичном доступе на сайте ARTSTORYLAB - студия веб-дизайна) допускается их распространение при условии, что будет дана ссылка на Artstorylab.</li>
                    <li>Администрация не несет ответственности перед Пользователем за любой убыток или ущерб, понесенный Пользователем в результате удаления, сбоя или невозможности сохранения какого-либо Содержания и иных коммуникационных данных, содержащихся на сайте ARTSTORYLAB - студия веб-дизайна или передаваемых через него.</li>
                    <li> Администрация не несет ответственности за любые прямые или косвенные убытки, произошедшие из-за: использования либо невозможности использования сайта, либо отдельных сервисов; несанкционированного доступа к коммуникациям Пользователя; заявления или поведение любого третьего лица на сайте.</li>
                    <li>Администрация не несет ответственность за какую-либо информацию, размещенную пользователем на сайте ARTSTORYLAB - студия веб-дизайна, включая, но не ограничиваясь: информацию, защищенную авторским правом, без прямого согласия владельца авторского права.</li>
                </ol>
            </li>
            <li class="main-list">
                Разрешение споров
                <ol class="normal">
                    <li>До обращения в суд с иском по спорам, возникающим из отношений между Пользователем и Администрацией, обязательным является предъявление претензии (письменного предложения или предложения в электронном виде о добровольном урегулировании спора).</li>
                    <li>Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно или в электронном виде уведомляет заявителя претензии о результатах рассмотрения претензии.</li>
                    <li>При не достижении соглашения спор будет передан на рассмотрение Арбитражного суда г. Москва.</li>
                    <li>К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией применяется действующее законодательство Российской Федерации.</li>
                </ol>
            </li>
            <li class="main-list">
                Дополнительные условия
                <ol class="normal">
                    <li>Администрация вправе вносить изменения в настоящую Политику конфиденциальности без согласия Пользователя.</li>
                    <li>Новая Политика конфиденциальности вступает в силу с момента ее размещения на сайте ARTSTORYLAB - студия веб-дизайна, если иное не предусмотрено новой редакцией Политики конфиденциальности.</li>
                    <li>Все предложения или вопросы касательно настоящей Политики конфиденциальности следует сообщать по адресу: sumedi.anastasia@yandex.ru</li>
                    <li>Действующая Политика конфиденциальности размещена на странице по адресу http://artstorylab.ru/politika.html</li>
                </ol>
            </li>
        </ol>
        <div class="down">
            <div class="left p-text">
                <p>Обновлено: 13 Января 2019 года<br>
                    г. Москва, Студия Artstorylab, 2018-2019</p>
            </div>
            <div class="right">
                <img src="images/signature.png" alt="Подпись">
            </div>
        </div>
    </main>
</div>
<footer id="footer">
    @include('includes.footer_form')
</footer>
@endsection
