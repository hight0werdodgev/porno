<?php
use yii\helpers\Url;

    $this->title = 'Установка ГБО в Кургане, цена СНИЖЕНА - Gasline';
    $this->registerMetaTag(['name' => 'description', 'content' => 'Установка газобаллонного оборудования в Кургане в рассрочку до 4-х месяцев только в Gasline. ГБО для Вашего автомобиля — ключ к решению Ваших проблем с затратами на топливо.']);

?>

       <section class="home">
            <video class="home__video" muted loop autoplay>
                <source src="../dist/video/main1.mp4" type="video/mp4">
            </video>
            <div class="home__title_wrap">
                <h1 class="home__title">
                    Установка ГБО в Кургане
                </h1>
                <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
            </div>
        </section>
        <!--HOME SECTION END-->


<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


        <!--FOR-WHOM SECTION START-->
        <section class="for-whom">
            <div class="container">
                <h3 class="for-whom__title">Кому подойдёт перевод на газ?</h3>
                <ul class="for-whom__list">
                    <li class="for-whom__item">
                        <div class="for-whom__item-img-wrap">
                            <img src="../dist/img/png/auto.png" alt="" class="for-whom__item-img">
                        </div>
                        <div class="for-whom__item-descr">Личный автомобиль</div>
                    </li>
                    <li class="for-whom__item">
                        <div class="for-whom__item-img-wrap">
                            <img src="../dist/img/png/gazel.png" alt="" class="for-whom__item-img">
                        </div>
                        <div class="for-whom__item-descr">Газель</div>
                    </li>
                    <li class="for-whom__item">
                        <div class="for-whom__item-img-wrap">
                            <img src="../dist/img/png/paz.png" alt="" class="for-whom__item-img">
                        </div>
                        <div class="for-whom__item-descr">ПАЗ</div>
                    </li>
                    <li class="for-whom__item">
                        <div class="for-whom__item-img-wrap">
                            <img src="../dist/img/png/taxi.png" alt="" class="for-whom__item-img">
                        </div>
                        <div class="for-whom__item-descr">Такси</div>
                    </li>
                    <li class="for-whom__item">
                        <div class="for-whom__item-img-wrap">
                            <img src="../dist/img/png/jeep.png" alt="" class="for-whom__item-img">
                        </div>
                        <div class="for-whom__item-descr">Торговый представитель</div>
                    </li>
                    <li class="for-whom__item">
                        <div class="for-whom__item-img-wrap">
                            <img src="../dist/img/png/spec.png" alt="" class="for-whom__item-img">
                        </div>
                        <div class="for-whom__item-descr">Спецтехника</div>
                    </li>
                </ul>
            </div>
        </section>
        <!--FOR-WHOM SECTION END-->


<!--CALCULATOR SECTION START-->
<section class='calculator' data-type="slider-group" data-question-id="7">
    <div class="container">
        <h3 class='calculator__title'>Расчёт экономии за год при переходе на газ</h3>
        <form action="">
            <div class="slidecontainer">
                <div class="gas-oil">
                    <div class="type-gas">
                        <h4>1. Выберите тип газа</h4>
                        <div class="type-gas-item type-gas-propan">
                            <label for="propan">Пропан</label>
                            <input type="radio" name="gazprice" value="23" class="" id="propan" checked>
                        </div>
                        <div class="type-gas-item type-gas-metan">
                            <label for="metan">Метан</label>
                            <input type="radio" name="gazprice" value="14" class="" id="metan">
                        </div>
                    </div>

                    <div class="type-oil">
                        <h4>2. Выберите марку бензина</h4>
                        <div class="type-oil-item type-oil-92">
                            <label for="92">92</label>
                            <input type="radio" name="benzprice" value="42" class="price" id="92" checked>
                        </div>
                        <div class="type-oil-item type-oil-95">
                            <label for="95">95</label>
                            <input type="radio" name="benzprice" value="45" class="price" id="95">
                        </div>
                        <div class="type-oil-item type-oil-98">
                            <label for="98">98</label>
                            <input type="radio" name="benzprice" value="48" class="price" id="98">
                        </div>
                    </div>
                </div>
                <div class="probeg-km">
                    <h4>3. Сколько км. вы проезжаете за день?</h4>
                    <label for="myRange"></label>
                    <input type="range" name="mileage" min="0" max="2000"  step="1" id="test2" class="slider_km" id="myRange">
                    <!--                            <input type="range" min="0" max="100" value="25" step="1" name="groep1" id="test2">-->
                    <!--                            <p><span id="demo">100</span></p>-->
                    <output>34</output>
                    <span data-min="50" data-max="2000"></span></p>
                </div>

                <div class="rashod-litr">
                    <h4>4. Укажите расход в л. на 100 километров</h4>
                    <label for="myRange2"></label>
                    <input type="range" name="rate" min="0" max="100" value="10" step="1" class="slider_l" id="myRange2">
                    <!--                            <p><span id="demo2">10</span></p>-->
                    <output>14</output>
                    <span data-min="1" data-max="100"></span></p>
                </div>
            </div>

            <input type="button" onclick="ym(65625232,'reachGoal','rasch-eco'); return true;" class="btn" id="r" name="send" value="Рассчитать" />
        </form>

        <div class="calculator__itog-wrap">
            <div class="calculator__itog">Годовые затраты на бензин:</div>
            <div class="result calculate-box-benz"></div>
        </div>
        <div class="calculator__itog-wrap">
            <h4 class="calculator__itog">Годовые затраты на газ:</h4>
            <div class="result calculate-box-gaz"></div>
        </div>
        <div class="calculator__itog-wrap">
            <h4 class="calculator__itog">Экономия:</h4>
            <div class=" result calculate-box-economy"></div><span></span>
        </div>
    </div>
</section>
<!--CALCULATOR SECTION END-->


        <!--ADVANTAGES SECTION START-->
        <section class="advantages">
            <div class="container">
                <div class="advantages__title">Преимущества ГБО</div>
                <ul class="advantages__list">
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'>
                            <img src="../dist/img/png/advantages_1.png" alt="" class="advantages__item-icon">
                        </div>
                        <div class="advantages__item-description">Экономия денег в 2-3 раза</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'>
                            <img src="../dist/img/png/advantages_2.png" alt="" class="advantages__item-icon">
                        </div>
                        <div class="advantages__item-description">Ресурс двигателя продлён</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'><img src="../dist/img/png/advantages_3.png" alt=""
                                                                     class="advantages__item-icon"></div>
                        <div class="advantages__item-description">Моторное масло не разжижается</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'><img src="../dist/img/png/advantages_4.png" alt=""
                                                                     class="advantages__item-icon"></div>
                        <div class="advantages__item-description">Экологичное топливо чище бензина</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'><img src="../dist/img/png/advantages_5.png" alt=""
                                                                     class="advantages__item-icon"></div>
                        <div class="advantages__item-description">Практически не образуется нагар</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'><img src="../dist/img/png/advantages_6.png" alt=""
                                                                     class="advantages__item-icon"></div>
                        <div class="advantages__item-description">Более высокое октановое число</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'><img src="../dist/img/png/advantages_7.png" alt=""
                                                                     class="advantages__item-icon"></div>
                        <div class="advantages__item-description">Улучшается холостой ход двигателя</div>
                    </li>
                    <li class="advantages__item">
                        <div class='advantages__item-icon-wrap'><img src="../dist/img/png/advantages_8.png" alt=""
                                                                     class="advantages__item-icon"></div>
                        <div class="advantages__item-description">Сохраняется динамика разгона</div>
                    </li>
                </ul>
            </div>
        </section>
        <!--ADVANTAGES SECTION END-->


        <!--PROFIT SECTION START-->
        <section class="profit">
            <div class="container">
                <div class="profit__title">Чем выгодна установка ГБО?</div>
                <div class="profit__wrap">
                    <div class="profit__column-text">
                        <h4 class="profit__column-text-title">Экономия до 200 000 рублей</h4>
                        <div class="profit__column-text-description">Стоимость 1 км пробега в 2,5 раза дешевле,
                            заправка полного бака дешевле на 40%.
                            Итоговая экономия до 200 000 рублей в год.
                        </div>
                        <h4 class="profit__column-text-title">Минимум вреда для экологии</h4>
                        <div class="profit__column-text-description">Автомобиль с ГБО наносит значительно
                            меньше урона окружающей среде,
                            чем аналогичный с бензиновым двигателем.
                        </div>
                    </div>
                    <div class="profit__description-img-wrap">
                        <img src="../dist/img/png/profit.png" alt="" class="profit__description-img">
                    </div>
                    <div class="profit__description-text">
                        <h4 class="profit__column-text-title">Безопасно в использовании</h4>
                        <div class="profit__column-text-description">Баллоны для хранения газа намного прочнее
                            бензобака, а высокооктановость топлива
                            исключает возможную детонацию двигателя.
                        </div>
                        <h4 class="profit__column-text-title">Ресурс двигателя увеличен</h4>
                        <div class="profit__column-text-description">Ресурс мотора увеличивается до 35%
                            по причине отсутствия в газе
                            тяжелых примесей.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--PROFIT SECTION END-->


        <!--STATISTICS SECTION START-->
        <section class="statistics">
            <div class="container">
                <div class="statistics__title">Рост цен на бензин</div>
                <div class="statistics__row">перестанет вас беспокоить</div>
                <ul class="statistics_list">
                    <li class="statistics__item">
                        <div class="statistics__item-icon-wrap">
                            <img class="statistics__item-icon" src="../dist/img/png/statistics_year.png">
                        </div>
                        <div class="statistics__item-desc">
                            <div class="statistics__item-desc-title">За 2019 год</div>
                            <div class="statistics__item-desc-p">Количество авто на газе выросло на 30%</div>
                        </div>
                    </li>
<!--                    <li class="statistics__item">-->
<!--                        <div class="statistics__item-icon-wrap">-->
<!--                            <img class="statistics__item-icon" src="../dist/img/png/statistics_gbo.png">-->
<!--                        </div>-->
<!--                        <div class="statistics__item-desc">-->
<!--                            <div class="statistics__item-desc-title">ВАЗ, ГАЗ, HUNDAI</div>-->
<!--                            <div class="statistics__item-desc-p">выпускают авто с ГБО</div>-->
<!--                        </div>-->
<!---->
<!--                    </li>-->
                    <li class="statistics__item">
                        <div class="statistics__item-icon-wrap">
                            <img class="statistics__item-icon" src="../dist/img/png/statistics_future.png">
                        </div>
                        <div class="statistics__item-desc">
                            <div class="statistics__item-desc-title">Через 5 лет</div>
                            <div class="statistics__item-desc-p">каждый 10 автообиль будет ездить на газу</div>
                        </div>
                    </li>
                </ul>
                <button class="btn b24-web-form-popup-btn-9">Хочу двигаться экономно</button>
            </div>
        </section>
        <!--STATISTICS SECTION END-->


        <!--PRICE SECTION START-->
        <section class="price">
            <div class="container">
                <div class="price__title">Стоимость установки ГБО</div>
<!--                <div class="price__row">Без учёта маркетинговых программ</div>-->
                <ul class="price__list">
                    <li class="price__item">
                        <div class="price_item-title">LADA VESTA</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>25 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_1.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">LADA GRANTA</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>25 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_2.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">LADA LARGUS</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>25 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_3.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">HUNDAI SOLARIS</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>25 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_4.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">VOLKSWAGEN POLO</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>25 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_5.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">KIA RIO</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>25 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_6.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">ГАЗЕЛЬ</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>28 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>90 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_7.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">УАЗ БУХАНКА</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>27 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>65 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_8.png" alt="" class="price_item-img">
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price_item-title">ПАЗ</div>
                        <div class="price_item-payback">Срок окупаемости 15 000 км</div>
                        <div class="price_item-propan">Пропан от <span>29 000</span> р</div>
                        <div class="price_item-metan">Метан от <span>150 000</span> р</div>
                        <div class="price_item-img-wrap">
                            <img src="../dist/img/png/price_9.png" alt="" class="price_item-img">
                        </div>
                    </li>
                </ul>
<!--                <button class="btn b24-web-form-popup-btn-9">Узнать стоимость</button>-->
                <a href="<?= Url::to(['site/page', 'view'  => 'calculator'])?>"><button class="btn">Узнать
                        стоимость</button></a>
            </div>
        </section>
        <!--PRICE SECTION END-->

<?=\Yii::$app->view->renderFile('@app/views/site/sections/presents.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/portfolio.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>


<script>
    // window.onload = function () {
        sliders();

    // }

    function sliders() {
        var tracks = [
            '-webkit-slider-runnable-track',
        ];
        var thumbs = [
            '-webkit-slider-thumb',
        ];

        initSliders();
        var sliderGroups = document.querySelectorAll('section[data-type=slider-group]');
        for (var i=0;i<sliderGroups.length;i+=1) {
            initSliderGroup(sliderGroups[i]);
        }

        function initSliders() {
            var sliders = document.querySelectorAll('input[type=range]');
            var testAndWK = window.getComputedStyle(sliders[0],'::-webkit-slider-thumb').background;
            for (var i=0;i<sliders.length;i+=1) {
                if (!testAndWK) {
                    sliders[i].style.WebkitAppearance = 'slider-horizontal';
                }

                // prepare a <style> tag that will be used by handleSlider()

                var st = document.createElement('style');
                st.id = 's' + sliders[i].id;
                document.head.appendChild(st);


                sliders[i].addEventListener('input',function () {handleSlider(this)},false);
                sliders[i].addEventListener('change',function () {handleSlider(this)},false);

                sliders[i].output = sliders[i].parentNode.querySelector('output');
                var dataSpan = sliders[i].parentNode.querySelector('span');
                if (dataSpan && dataSpan.getAttribute('data-labels')) {
                    sliders[i].values = [];
                    var values = dataSpan.getAttribute('data-labels').split(';');
                    for (var j=0;j<values.length;j+=1) {
                        sliders[i].values.push(values[j]);
                    }
                }


                if (sliders[i].value*1) {
                    handleSlider(sliders[i]);
                }
            }
        }

        function handleSlider(slider) {

            // this sets the gradient for one slider to the correct color stops
            // needs a prepared <style> tag created by initSliders()

            var gradValue = Math.round((slider.value/slider.getAttribute('max')*1)*100);
            var grad = 'linear-gradient(90deg,#5082e0 ' + gradValue + '%,#cccccc ' + (gradValue+1) + '%)';
            var rangeSelector = 'input[id='+slider.id+']::';
            var styleString = '';
            var printedValue = (slider.values) ? slider.values[slider.value] : slider.value;
            slider.output.innerHTML = printedValue;
            for (var j=0;j<tracks.length;j+=1) {
                styleString += rangeSelector + tracks[j] + '{background: ' + grad + ';} ';
            }
            document.getElementById('s'+slider.id).textContent = styleString;
        }

        function initSliderGroup(parent) {
            var sliders = parent.querySelectorAll('input[type=range]');
            var max = parent.querySelector('div').getAttribute('data-total') * 1;
            var groupRoster = [];
            var timeout;
            for (var i = 0; i < sliders.length; i += 1) {
                groupRoster.push(sliders[i]);
                sliders[i].others = [];
                sliders[i].addEventListener('input', trackChange, false);
                sliders[i].addEventListener('change', trackChange, false);
            }
            for (var i = 0; i < sliders.length; i += 1) {
                for (var j = 0; j < groupRoster.length; j += 1) {
                    if (groupRoster[j] !== sliders[i]) {
                        sliders[i].others.push(groupRoster[j]);
                    }
                }
            }
        }
        //
        function trackChange () {
            var that = this;
            var timeout = setTimeout(function () {
                setOtherSliders(that);
            },100);
            clearTimeout(timeout);
        }

    }



    var range_km = document.querySelector('.slider_km');
    range_km.addEventListener('input', function () {

    }, false);

    var range_l = document.querySelector('.slider_l');
    range_l.addEventListener('input', function () {

    }, false);



</script>

<!--<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->




<script>
    window.onload = function(e) {


        // $(document).ready(function () { // Ждём загрузки страницы


            $("input[name=send]").click(function () { // Событие нажатия на кнопку "Расчёт"
                var mileage = +$("input[name=mileage]").val(); // Переменная пробега
                var rate = +$("input[name=rate]").val(); // Переменная расхода
                var benzvolume = mileage * rate * 365 / 100; // Переменная объема бенза за год
                var gazvolume = benzvolume * 1.2; // Переменная объема газа за год
                var benzprice = +$("input[name=benzprice]:checked").val(); // Переменная цены
                var gazprice = +$("input[name=gazprice]:checked").val(); // Переменная цены
                var benzresult = benzvolume * benzprice; // Переменная результата
                var gazresult = gazvolume * gazprice; // Переменная результата
                var economy = benzresult - gazresult;

                $('.calculate-box-benz').html(benzresult.toFixed() + " руб."); // записываем результат бензина
                $('.calculate-box-gaz').html(gazresult.toFixed() + " руб."); // записываем результат газа
                $('.calculate-box-economy').html(economy.toFixed() + " руб.");
            });
        // });

    };


</script>

