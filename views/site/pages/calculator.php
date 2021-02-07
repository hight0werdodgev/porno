<?php

use yii\helpers\Url;

$this->title = 'Стоимость установки ГБО в Кургане - Gasline45';
$this->registerMetaTag(['name' => 'description', 'content' => 'Расчитать стоимость установки ГБО в Кургане цена Gasline.']);
?>

<section class="calculator" id="calculator">
        <div id="app" class="container">
            <div class="row">
                <div class="col-12">
                    <div class="my-5">
                        <div class="claculator__title">
                            <h1>Стоимость установки ГБО</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="calculator__subtitle">
                                <h2>Тип газа</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="gazType">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="radio" id="propan" name="typeGaz" value="propan" v-model="selectedGaz"> 
                                        <label class="gaztype__label" for="propan">
                                            <div class="label__propan">
                                                <div class="gaztype__img gaztype__img--propan"></div>
                                                <div class="gaztype__title"><span>Пропан</span></div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="radio" id="metan" name="typeGaz" value="metan" v-model="selectedGaz">
                                        <label class="gaztype__label" for="metan">
                                            <div class="label__metan">
                                                <div class="gaztype__img gaztype__img--metan"></div>
                                                <div class="gaztype__title"><span>Метан</span></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="calculator__subtitle">
                                <h2>Мощность</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-if="selectedGaz == 'metan'">
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input checked id="gaznone" type="radio" name="power" v-on:click="saver = false;
                                                                                                                    dream = false,
                                                                                                                    alpha = false,
                                                                                                                    digitronic = false,
                                                                                                                    poletron = false">
                                <label for="gaznone">Не выбрано</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz1" type="radio" name="power" v-on:click="saver = false;
                                                                                                                            dream = 45000,
                                                                                                                            alpha = false,
                                                                                                                            digitronic = false,
                                                                                                                            poletron = false">
                                <label for="gaz1"> до 160л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz2" type="radio" name="power" v-on:click="saver = false;
                                                                                                                            dream = 45000,
                                                                                                                            alpha = false,
                                                                                                                            digitronic = false,
                                                                                                                            poletron = false">
                                <label for="gaz2">160 до 240л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz3" type="radio" name="power" v-on:click="saver = false;
                                                                                                                            dream = 50000,
                                                                                                                            alpha = false,
                                                                                                                            digitronic = false,
                                                                                                                            poletron = false">
                                <label for="gaz3">от 240 до 380л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz4" type="radio" name="power" v-on:click="saver = false;
                                                                                                                            dream = 53000,
                                                                                                                            alpha = false,
                                                                                                                            digitronic = false,
                                                                                                                            poletron = false">
                                <label for="gaz4">до 220л.с (6цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz5" type="radio" name="power" v-on:click="saver = false;
                                                                                                                            dream = 55000,
                                                                                                                            alpha = false,
                                                                                                                            digitronic = false,
                                                                                                                            poletron = false">
                                <label for="gaz5">от 200 до 220л.с (6цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz6" type="radio" name="power" v-on:click="saver = false;
                                                                                                                            dream = 59300,
                                                                                                                            alpha = false,
                                                                                                                            digitronic = false,
                                                                                                                            poletron = false">
                                <label for="gaz6">до 360л.с (8цил)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-if="selectedGaz == 'propan'">
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input checked id="gaznone" type="radio" name="power" v-on:click="saver = false;
                                                                                                                    dream = false,
                                                                                                                    alpha = false,
                                                                                                                    digitronic = false,
                                                                                                                    poletron = false">
                                <label for="gaznone">Не выбрано</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz7" type="radio" name="power" v-on:click="saver = 25400;
                                                                                                                        dream = 26400,
                                                                                                                        alpha = 21400,
                                                                                                                        digitronic = 24400,
                                                                                                                        poletron = 22400">
                                <label for="gaz7">от 120 до 150л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz8" type="radio" name="power" v-on:click="saver = 28400;
                                                                                                                        dream = 29400,
                                                                                                                        alpha = 24400,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz8">от 120 до 180л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz9" type="radio" name="power" v-on:click="saver = 29400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz9">от 180 до 200л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz10" type="radio" name="power" v-on:click="saver = 30400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz10">от 200 до 300л.с (4цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz11" type="radio" name="power" v-on:click="saver = 39400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz11">до 180л.с (6цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz12" type="radio" name="power" v-on:click="saver = 40400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz12">от 180 до 200л.с (6цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz13" type="radio" name="power" v-on:click="saver = 41400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz13">от 200 до 300л.с (6цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz14" type="radio" name="power" v-on:click="saver = 47400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz14">до 180л.с (8цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz15" type="radio" name="power" v-on:click="saver = 50400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz15">от 180 до 200л.с (8цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz16" type="radio" name="power" v-on:click="saver = 51400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz16">от 200 до 300л.с (8цил)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="calculator__input my-1">
                                <input id="gaz17" type="radio" name="power" v-on:click="saver = 57400;
                                                                                                                        dream = false,
                                                                                                                        alpha = false,
                                                                                                                        digitronic = false,
                                                                                                                        poletron = false">
                                <label for="gaz17">от 300 до 380л.с (8цил)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row" v-if = "selectedGaz == 'propan'">
                        <div class="col-12">
                            <div class="calculator__subtitle">
                                <h2>Выносное заправочное устройство?</h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="radio" id="reful1" name="refueling" :value="1000" v-model="refueling"> 
                            <label class="gaztype__label" for="reful1">
                                <div class="label__reful d-flex d-md-block">
                                    <div class="reful__img--1"></div>
                                    <div class="refuiling__title">
                                         <span>В лючок бензобака</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="radio" id="reful2" name="refueling" :value="600" v-model="refueling"> 
                            <label class="gaztype__label" for="reful2">
                                <div class="label__reful d-flex d-md-block">
                                    <div class="reful__img--2"></div>
                                    <div class="refuiling__title">
                                        <span>В бампер</span>
                                    </div> 
                                </div>
                            </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="radio" id="reful3" name="refueling" :value="700" v-model="refueling"> 
                            <label class="gaztype__label" for="reful3">
                                <div class="label__reful d-flex d-md-block">
                                    <div class="reful__img--3"></div>
                                    <div class="refuiling__title">
                                        <span>Под бампер</span> 
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="radio" id="reful4" name="refueling" :value="500" v-model="refueling"> 
                            <label class="gaztype__label" for="reful4">
                                <div class="label__reful d-flex d-md-block">
                                    <div class="reful__img--4"></div>
                                    <div class="refuiling__title">
                                        <span>В багажное отделение</span> 
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="calculator__subtitle">
                                <h2>Доп. оборудование и работы</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-if="selectedGaz == 'propan'">
                        <div class="col-12" v-for="option in addOptionsPropan">
                            <div class="calculator__subtitle my-1">
                                <input v-model="selectedAddOptions" :id="option.id" :name="option.id" type="checkbox" v-bind:value="option.price">
                                <label v-bind:for="option.id">{{option.name}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-if="selectedGaz == 'metan'">
                        <div class="col-12" v-for="option in addOptionsMetan">
                            <div class="calculator__subtitle my-1">
                                <input v-bind:id="option.id" v-model="selectedAddOptions" type="checkbox" v-bind:value="option.price">
                                <label v-bind:for="option.id">{{option.name}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="calculator__subtitle">
                                    <h2>Тип баллона</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-if="selectedGaz == 'metan'">
                            <div class="col-12">
                                <select name="balonMetan" id="" v-model="balon">
                                    <option :value="false">Не выборано</option>
                                    <option :value="14250">Баллон Метан 50 л. 219х1620 Металлический (Газель)</option>
                                    <option :value="24000">Баллон Метан 100 л. (Тип 2) 406х1005 (метало-пластик)</option>
                                    <option :value="26000">Баллон Метан 120 л. (Тип 2) 406х1150 (метало-пластик)</option>
                                    <option :value="8250"> Баллон Метан 28 л 232х860 Металлический</option>
                                    <option :value="12750">Баллон Метан 50 л. 232х1496 Металлический</option>
                                    <option :value="17250">Баллон Метан 65 л. 356х865 Металлический</option>
                                    <option :value="15750">Баллон Метан 75 л. 356х980 Металлический</option>
                                    <option :value="22000">Баллон Метан 80 л. (Тип 2) 406х850 (метало-пластик)</option>
                                    <option :value="22500">Баллон Метан 90 л. (Тип 2) 406х910 (метало-пластик)</option>
                                    <option :value="23350">Баллон Метан 95 л. (Тип 2) 406х960 (метало-пластик)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" v-show="selectedGaz == 'propan'">
                            <div class="col-12">
                                <select class="mb-2" name="" id="" v-model="typeBalon">
                                    <option :value="false">Не выбрано</option>
                                    <option :value="'topWheel'">ТОР (Вместо запасного колеса)</option>
                                    <option :value="'topInside'">ТОР (Внешняя горловина)</option>
                                    <option :value="'cylinder'">Цилиндр</option>
                                </select>
                            </div>
                            <div class="col-12" v-if="typeBalon == 'topWheel'">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="calculator__subtitle">
                                            <h2>Объём</h2>
                                        </div>
                                    </div>
                                </div>
                                <select name="" id="" v-model="balon">
                                    <option :value="false">Не выбрано</option>
                                    <option :value="3400">35л 580х180</option>
                                    <option :value="3100">42л 600х200</option>
                                    <option :value="3700">47л 600х220</option>
                                    <option :value="4100">49л 630х200</option>
                                    <option :value="3700">54л 630х220</option>
                                    <option :value="6100">54л 720х180</option>
                                    <option :value="4200">56л 630х225</option>
                                    <option :value="4500">60л 630х240</option>
                                    <option :value="4500">63л 630х250</option>
                                    <option :value="6700">73л 720х230</option>
                                    <option :value="6400">77л 720х240</option>
                                </select>
                            </div>
                            <div class="col-12" v-if="typeBalon == 'topInside'">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="calculator__subtitle">
                                            <h2>Объём</h2>
                                        </div>
                                    </div>
                                </div>
                                <select name="" id="" v-model="balon">
                                    <option :value="false">Не выбрано</option>
                                    <option :value="3300">42л 600х200</option>
                                    <option :value="3600">47л 600х220</option>
                                    <option :value="3700">54л 630х220</option>
                                    <option :value="4200">56л 630х225</option>
                                    <option :value="4600">63л 630х250</option>
                                    <option :value="6500">73л 720х230</option>
                                    <option :value="6500">77л 720х240</option>
                                    <option :value="6600">80л 720х250</option>
                                    <option :value="7500">88л 720х270</option>
                                    <option :value="7600">98л 720х300</option>
                                </select>
                            </div>
                            <div class="col-12" v-if="typeBalon == 'cylinder'">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="calculator__subtitle">
                                            <h2>Объём</h2>
                                        </div>
                                    </div>
                                </div>
                                <select name="" id="" v-model="balon">
                                    <option :value="false">Не выбрано</option>
                                    <option :value="1900">35л 241х880</option>
                                    <option :value="3800">35л 241х880(2шт)</option>
                                    <option :value="2100">40л 241х981</option>
                                    <option :value="4200">40л 241х981(2шт)</option>
                                    <option :value="2500">48л 356х563</option>
                                    <option :value="2100">50л 300х796</option>
                                    <option :value="2500">50л 376х553</option>
                                    <option :value="2700">60л 300х945</option>
                                    <option :value="3000">60л 315х866</option>
                                    <option :value="2700">65л 300х1003</option>
                                    <option :value="3700">76л 376х792</option>
                                    <option :value="3700">80л 356х900</option>
                                    <option :value="4300">90л 400х850</option>
                                    <option :value="6100">95л 300х356 спарка</option>
                                    <option :value="3700">100л 356х1110</option>
                                    <option :value="4400">100л 400х906</option>
                                    <option :value="4200">102л 315х1430</option>
                                    <option :value="4200">105л 376х1064</option>
                                    <option :value="4100">130л 400х1165</option>
                                    <option :value="4600">130л 490х846</option>
                                    <option :value="7000">151л 490х923</option>
                                    <option :value="6100">170л 400х1540</option>
                                    <option :value="8000">210л 490х1240</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="calculator__table" v-if="(saver != false || dream != false || alpha != false || digitronic != false || poletron != false) && typeBalon != false && balon != false && refueling !== false">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <p class="subaccnet">Фирма</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <p class="accent">Общая стоимость</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-if="saver != false">
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="subaccnet">Saver(OMVL)</h2>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="accent">{{saverPrice + ' руб.'}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-if="dream != false">
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="subaccnet">Dream(OMVL)</h2>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="accent">{{dreamPrice + ' руб.'}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-if="alpha != false">
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="subaccnet">Alpha</h2>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="accent">{{alphaPrice + ' руб.'}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-if="digitronic != false">
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="subaccnet">Digitronic</h2>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="accent">{{digitronicPrice + ' руб.'}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-if="poletron != false">
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="subaccnet">Poletron</h2>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="clculator-subtitle calculator__subtitle--gray">
                                                <h2 class="accent">{{poletronPrice + ' руб.'}}</h2>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/portfolio.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>


<?php
$this->registerCssFile(Yii::getAlias('@web/dist/css/bootstrap-grid.min.css'));
$this->registerCssFile(Yii::getAlias('@web/dist/css/style.css'));
$this->registerJsFile(Yii::getAlias('@web/dist/js/vue.min.js'));
$this->registerJsFile(Yii::getAlias('@web/dist/js/common.js'));