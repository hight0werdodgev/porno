<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <?php $this->registerMetaTag(['name' => 'yandex-verification', 'content' => '867f2d194d4839a8']); ?>
        <?php $this->registerMetaTag(['name' => 'google-site-verification', 'content' => 'o2BTcv0Vnu6jG8AiRfmYUHga1zwD4uEuJhpjCPWe2nw']); ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>

        <!--        вк-->
        <script type="text/javascript">!function () {
                var t = document.createElement("script");
                t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?168", t.onload = function () {
                    VK.Retargeting.Init("VK-RTRG-517753-QrVR"), VK.Retargeting.Hit()
                }, document.head.appendChild(t)
            }();</script>
        <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-517753-QrVR" style="position:fixed; left:-999px;" alt=""/>
        </noscript>
        <!--        конец вк-->

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '686869568838531');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=686869568838531&ev=PageView&noscript=1"
            /></noscript>

    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrapper">
        <header class="header">
            <div class="container container_header">
                <div class="logo">
                    <a class="logo__link" href="<?= Url::to(['site/index']) ?>">
                        <img src="/dist/img/png/logo.png" class="logo__img" alt="logo"/>
                    </a>
                </div>
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="<?= Url::to(['site/index']) ?>">О нас</a>
                        </li>
                        <li class="nav__item nav__item-ul">
                            <a class="nav__link nav__link-wrap" href="#">Услуги</a>
                            <ul class="nav__item-inner-ul">
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'ustanovka-gbo']) ?>">Установка ГБО</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'registratsiya-gbo']) ?>">Регистрация
                                        ГБО</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'opressovka-gbo']) ?>">Опрессовка
                                        ГБО</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'obsluzhivanie-gbo']) ?>">Обслуживание
                                        ГБО</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'komplektuyushie-gbo']) ?>">Комплектующие
                                        ГБО</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'gazovie-ballony']) ?>">Газовые
                                        баллоны</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'osvidetelstvovanie-gbo']) ?>">Освидетельствование
                                        ГБО</a>
                                </li>
                                <li class="nav__item-inner-li">
                                    <a class="nav__link-inner"
                                       href="<?= Url::to(['site/page', 'view' => 'oformlenie-pereoborudovaniya']) ?>">Оформление
                                        переоборудования</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="<?= Url::to(['site/page', 'view' => 'calculator']) ?>">Калькулятор
                                ГБО</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="<?= Url::to(['/nashi-raboty']) ?>">Наши работы</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="<?= Url::to(['site/page', 'view' => 'vopros-otvet']) ?>">Вопрос-ответ</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="<?= Url::to(['/blog']) ?>">Блог</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="<?= Url::to(['site/page', 'view' => 'kontakty']) ?>">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="phone-wrapper">
                    <div class="phone">
                        <a href="tel:83522228999">(3522) 228-999</a>
                    </div>

                    <div class="order-top">
                        <button type="button" class="btn b24-web-form-popup-btn-9"><a href="#">Оставить заявку</a>
                        </button>
                    </div>
                </div>
                <a class="hamburger-menu-link" href="#" id='hamburger'>
                    <div class='hamburger-menu-badge'></div>
                </a>
                <ul class="lightrope">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </header>


        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
            ?>
            <?= Alert::widget() ?>
        </div>
        <?= $content ?>


        <!--FOOTER SECTION START-->
        <footer class="footer">
            <div class="container container_footer">
                <div class="footer__logo">
                    <a class="logo__link" href="<?= Url::to(['site/index']) ?>">
                        <img src="/dist/img/png/logo_footer.png" alt="" class="footer__logo-img">
                    </a>
                    <!--                    добавили подпись-->
                    <div class="footer__logo-additional-info">
                        Услуги предоставляет:<br>
                        ООО "Уральская Испытательно - Техническая Лаборатория"<br>
                        ИНН - 4501210207<br>
                        ОГРН - 1164501056103<br>
                        ООО «УСЛУГИАВТО», RA.RU.21АК44.
                    </div>
                </div>
                <div class="footer__nav-list-wrapper">
                    <ul class="footer__nav-list footer__nav-list#1">
                        <li class="footer__nav-item">
                            <a href="<?= Url::to(['site/index']) ?>">О нас</a></li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner" href="<?= Url::to(['site/page', 'view' => 'ustanovka-gbo']) ?>">Установка
                                ГБО</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner"
                               href="<?= Url::to(['site/page', 'view' => 'registratsiya-gbo']) ?>">Регистрация ГБО</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner" href="<?= Url::to(['site/page', 'view' => 'opressovka-gbo']) ?>">Опрессовка
                                ГБО</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner"
                               href="<?= Url::to(['site/page', 'view' => 'obsluzhivanie-gbo']) ?>">Обслуживание ГБО</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner"
                               href="<?= Url::to(['site/page', 'view' => 'komplektuyushie-gbo']) ?>">Комплектующие
                                ГБО</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner"
                               href="<?= Url::to(['site/page', 'view' => 'gazovie-ballony']) ?>">Газовые баллоны</a>
                        </li>


                    </ul>
                    <ul class="footer__nav-list footer__nav-list#2">


                        <li class="footer__nav-item">
                            <a class="nav__link-inner"
                               href="<?= Url::to(['site/page', 'view' => 'osvidetelstvovanie-gbo']) ?>">Освидетельствование
                                ГБО</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner"
                               href="<?= Url::to(['site/page', 'view' => 'oformlenie-pereoborudovaniya']) ?>">Оформление
                                переоборудования</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="<?= Url::to(['/nashi-raboty']) ?>">Наши работы</a>
                        </li>
                        <li class="footer__nav-item">
                            <a class="nav__link-inner" href="<?= Url::to(['site/page', 'view' => 'calculator']) ?>">Калькулятор
                                ГБО</a>
                        </li>
                        <li class="footer__nav-item"><a href="<?= Url::to(['site/page', 'view' => 'vopros-otvet']) ?>">Вопрос-ответ</a>
                        </li>
                        <li class="footer__nav-item"><a href="<?= Url::to(['/blog']) ?>">Блог</a></li>


                    </ul>
                    <ul class="footer__nav-list footer__nav-list#3">
                        <li class="footer__nav-item"><a href="<?= Url::to(['site/page', 'view' => 'kontakty']) ?>">Контакты</a>
                        </li>
                        <li class="footer__nav-item"><a href="tel:83522228999">(3522) 228-999</a></li>
                        <li class="footer__nav-item"><a href="mailto:gasline45@mail.ru">gasline45@mail.ru</a></li>
                        <li class="footer__nav-item">ул. Дзержинского, 62а/1</li>

                    </ul>
                </div>
                <div class="footer__smartbit">
                    <div class="footer__smartbit-img-wrap">
                        <a class="logo__link" href="https://smartbit45.ru">
                            <img src='/dist/img/png/smartbit.png' class="footer__smartbit-img">
                        </a>
                    </div>
                    <div class="footer__smartbit-row">Разработано в Смарт Бит</div>
                </div>
            </div>
            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (m, e, t, r, i, k, a) {
                    m[i] = m[i] || function () {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
                    m[i].l = 1 * new Date();
                    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                })
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(65625232, "init", {
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            </script>
            <noscript>
                <div><img src="https://mc.yandex.ru/watch/65625232" style="position:absolute; left:-9999px;" alt=""/>
                </div>
            </noscript>
            <!-- /Yandex.Metrika counter -->
        </footer>
        <!--FOOTER SECTION END-->


        <a class="back-to-top" title="Наверх">
            <img src="/dist/img/png/arrow_to_top.png" alt="" class="back-to-top__img">
        </a>


        <!-- Cleversite chat button -->
        <script type='text/javascript'>
            (function () {
                var s = document['createElement']('script');
                s.type = 'text/javascript';
                s.async = true;
                s.charset = 'utf-8';
                s.src = '//cleversite.ru/cleversite/widget_new.php?supercode=1&referer_main=' + encodeURIComponent(document.referrer) + '&clid=66981siQKS&siteNew=90705';
                var ss = document['getElementsByTagName']('script')[0];
                if (ss) {
                    ss.parentNode.insertBefore(s, ss);
                } else {
                    document.documentElement.firstChild.appendChild(s);
                }
                ;
            })();
        </script>
        <!-- / End of Cleversite chat button -->


        <!-- секция полнокэранного меню  -->
        <section class="hamburger-menu" id="hamburger-menu">
            <div class='container container--hamburger-menu'>
                <a class="hamburger-menu-link-close" href="#" id='hamburger-open'>
                    <div class='hamburger-menu-badge--open'></div>
                </a>
                <nav class="nav-wrap">
                    <ul class="nav--hamburger-menu">
                        <li class="nav__item"><a href='<?= Url::to(['site/index']) ?>'
                                                 class='nav__link full-menu-link nav__link--active'>O НАС</a>
                        </li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'ustanovka-gbo']) ?>'
                                                 class='nav__link full-menu-link'>УСТАНОВКА ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'registratsiya-gbo']) ?>'
                                                 class='nav__link full-menu-link'>РЕГИСТРАЦИЯ ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'opressovka-gbo']) ?>'
                                                 class='nav__link full-menu-link'>ОПРЕССОВКА ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'obsluzhivanie-gbo']) ?>'
                                                 class='nav__link full-menu-link'>ОБСЛУЖИВАНИЕ ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'komplektuyushie-gbo']) ?>'
                                                 class='nav__link full-menu-link'>КОМПЛЕКТУЮЩИЕ ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'gazovie-ballony']) ?>'
                                                 class='nav__link full-menu-link'>ГАЗОВЫЕ БАЛЛОНЫ</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a
                                    href='<?= Url::to(['site/page', 'view' => 'osvidetelstvovanie-gbo']) ?>'
                                    class='nav__link full-menu-link'>ОСВИДЕТЕЛЬСТВОВАНИЕ ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a
                                    href='<?= Url::to(['site/page', 'view' => 'oformlenie-pereoborudovaniya']) ?>'
                                    class='nav__link full-menu-link'>ОФОРМЛЕНИЕ ПЕРЕОБОРУДОВАНИЯ</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'calculator']) ?>'
                                                 class='nav__link full-menu-link'>КАЛЬКУЛЯТОР ГБО</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['/nashi-raboty']) ?>'
                                                 class='nav__link full-menu-link'>НАШИ РАБОТЫ</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'vopros-otvet']) ?>'
                                                 class='nav__link full-menu-link'>ВОПРОС-ОТВЕТ</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['/blog']) ?>'
                                                 class='nav__link full-menu-link'>БЛОГ</a></li>
                        <li class="nav__item">•</li>
                        <li class="nav__item"><a href='<?= Url::to(['site/page', 'view' => 'kontakty']) ?>'
                                                 class='nav__link full-menu-link'>КОНТАКТЫ</a></li>
                        <li class="nav__item">•</li>
                        <!--                        <li class="nav__item"><a href="tel:83522228999">(3522) 228-999</a></li>-->
                        <!--                        <li class="nav__item">•</li>-->
                    </ul>
                </nav>
                <div class="phone-wrapper_hambuger">
                    <div class="phone">
                        <a href="tel:83522228999">8 (3522) 228-999</a>
                    </div>

                    <!--                    <div class="order-top">-->
                    <!--                        <a href="#">Оставить заявку</a>-->
                    <!--                    </div>-->
                </div>
            </div>
        </section>


    </div>
    <script id="bx24_form_button" data-skip-moving="true">
        /*        (function (w, d, u, b) {
                    w['Bitrix24FormObject'] = b;
                    w[b] = w[b] || function () {
                        arguments[0].ref = u;
                        (w[b].forms = w[b].forms || []).push(arguments[0])
                    };
                    if (w[b]['forms']) return;
                    var s = d.createElement('script');
                    s.async = 1;
                    s.src = u + '?' + (1 * new Date());
                    var h = d.getElementsByTagName('script')[0];
                    h.parentNode.insertBefore(s, h);
                })(window, document, 'https://uitl.bitrix24.ru/bitrix/js/crm/form_loader.js', 'b24form');

                b24form({"id": "9", "lang": "ru", "sec": "ebe56q", "type": "button", "click": ""});*/
    </script>

    <?php $this->endBody() ?>
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="false">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close="" style="z-index: 99999999 !important;">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <div class="modal__header">
                    <h2 class="modal__title" id="modal-1-title"> Micromodal 🔥 </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close=""></button>
                </div>
                <div class="modal__content" id="modal-1-content">
                    <div class="field">
                        <input placeholder="+7(999)999-99-99" class="input-phone" type="tel" id="formPhone">
                    </div>
                </div>
                <div class="modal__footer">
                    <button class="modal__btn" data-micromodal-close="" aria-label="Close this dialog window">Закрыть</button>
                    <button class="modal__btn modal__btn-primary" id="sendForm">Отправить</button>
                </div>
                <div class="successAlert">Форма успешно отправлена!</div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
    <style>
        .successAlert{
            font-weight: 600;
            color: #009f00;
            background-color: #c9ffc9;
            text-align: center;
            border-radius: 900px;
            margin-top: 10px;
        }
        .hideComponent{
            display: none!important;
        }
        .modal__title {
            width: auto;
            padding-bottom: 25px;
            position: relative;
        }

        .modal__title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #78b8df;
            height: 6px;
            border-radius: 10px;
            width: auto;

        }
        /**************************\
          Basic Modal Styles
        \**************************/

        .modal {
            font-family: -apple-system, BlinkMacSystemFont, avenir next, avenir, helvetica neue, helvetica, ubuntu, roboto, noto, segoe ui, arial, sans-serif;
        }

        .modal__overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal__container {
            background-color: #fff;
            padding: 30px;
            max-width: 500px;
            max-height: 100vh;
            border-radius: 4px;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .modal__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        .modal__title {
            margin-top: 0;
            margin-bottom: 0;
            font-weight: 600;
            font-size: 1.25rem;
            line-height: 1.25;
            color: #00449e;
            box-sizing: border-box;
            width: 100%!important;
            text-align: center;
        }

        .modal__close {
            background: transparent;
            border: 0;
        }

        .modal__header .modal__close:before {
            content: "\2715";
        }

        .modal__content {
            margin-top: 2rem;
            margin-bottom: 2rem;
            line-height: 1.5;
            color: rgba(0, 0, 0, .8);
        }

        .modal__btn {
            font-size: .875rem;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: .5rem;
            padding-bottom: .5rem;
            background-color: #e6e6e6;
            color: rgba(0, 0, 0, .8);
            border-radius: .25rem;
            border-style: none;
            border-width: 0;
            cursor: pointer;
            -webkit-appearance: button;
            text-transform: none;
            overflow: visible;
            line-height: 1.15;
            margin: 0;
            will-change: transform;
            -moz-osx-font-smoothing: grayscale;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            transition: -webkit-transform .25s ease-out;
            transition: transform .25s ease-out;
            transition: transform .25s ease-out, -webkit-transform .25s ease-out;
        }

        .modal__btn:focus, .modal__btn:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        .modal__btn-primary {
            background-color: #00449e;
            color: #fff;
        }


        /**************************\
          Demo Animation Style
        \**************************/
        @keyframes mmfadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes mmfadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        @keyframes mmslideIn {
            from {
                transform: translateY(15%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes mmslideOut {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-10%);
            }
        }

        .micromodal-slide {
            display: none;
        }

        .micromodal-slide.is-open {
            display: block;
        }

        .micromodal-slide[aria-hidden="false"] .modal__overlay {
            animation: mmfadeIn .3s cubic-bezier(0.0, 0.0, 0.2, 1);
        }

        .micromodal-slide[aria-hidden="false"] .modal__container {
            animation: mmslideIn .3s cubic-bezier(0, 0, .2, 1);
        }

        .micromodal-slide[aria-hidden="true"] .modal__overlay {
            animation: mmfadeOut .3s cubic-bezier(0.0, 0.0, 0.2, 1);
        }

        .micromodal-slide[aria-hidden="true"] .modal__container {
            animation: mmslideOut .3s cubic-bezier(0, 0, .2, 1);
        }

        .micromodal-slide .modal__container,
        .micromodal-slide .modal__overlay {
            will-change: transform;
        }
    </style>
    <style>
        .field {
            width: 100%;
            position: relative;
            -webkit-text-size-adjust: none;
            box-sizing: border-box;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            color: #272822;
        }
        .field > input{
            font-family: 'Pathway Gothic One', sans-serif;
            outline: none;
            -webkit-appearance: none;
            border: 3px solid #e6e6e6;
            border-radius: 5px;
            background-color: #fff;
            line-height: 60px;
            vertical-align: middle;
            height: 36px;
            font-size: 20px;
            width: 100%;
            -webkit-text-size-adjust: none;
            box-sizing: border-box;
            padding: 10px 10px;
        }
        .inputError{
            border: 3px solid #ff8686!important;
        }
    </style>
    <script>
        $("#formPhone").inputmask("+9(999)999-99-99",{ "clearIncomplete": true })
        var formName = '';
        $('.b24-web-form-popup-btn-9').click(function (e) {
            MicroModal.show('modal-1');
            $('.successAlert').addClass('hideComponent');
            formName = $(this).text();
            $('#modal-1-title').html(formName)
        })
        $('#sendForm').click(function (e) {
            console.log('send form')
            var phone = $('#formPhone').val();
            console.log(phone)
            console.log(phone.length)
            if(phone.length<12)
            {
                $('#formPhone').addClass('inputError');
            }else{
                $('#formPhone').removeClass('inputError');
                $('.successAlert').removeClass('hideComponent');
                var formData = {formName:formName,phone:phone}
                $.ajax({
                    type: 'post',
                    url: 'bitrixHandler.php',
                    data: formData,
                    success: function (returns) {
                        $('#formPhone').removeClass('inputError');
                        MicroModal.close('modal-1');
                    }
                });

            }
        })
    </script>
    </body>
    </html>

<?php $this->endPage() ?>
