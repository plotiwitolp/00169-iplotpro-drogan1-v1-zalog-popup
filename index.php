<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Попап</title>
    <link rel="stylesheet" href="https://zalog.by/wp-content/themes/moneyvdolg/assets/css/style.css?v1_8&ver=5.6.11">
</head>

<body>
    <style>
        body {
            margin: 0;
        }
    </style>

    <!-- START POPUP when leaving the site -->
    <style>
        .pop-up-leavedoc {
            background-color: #777c;
            height: 100vh;
            align-items: center;
            padding-top: 60px;
            position: fixed;
            top: 0;
            width: 100%;
            display: none;
        }

        .pop-up-leavedoc__inner {
            width: 1200px;
            min-height: 700px;
            margin: 0 auto;
            background-color: #fff;
            padding: 45px 44px 28px 43px;
            background-image: url(./assets/img/background_desk.png);
            background-position: right;
            background-repeat: no-repeat;
        }

        .pop-up-leavedoc-list__one-label {
            font-size: 21px;
        }

        .pop-up-leavedoc__container {
            position: relative;
            font-weight: 500;
        }

        .pop-up-leavedoc__close {
            position: absolute;
            right: 0;
            top: 0;
            cursor: pointer;
        }

        .pop-up-leavedoc-label {
            font-size: 42px;
            line-height: 1.15em;
            font-weight: 500;
            position: relative;
            display: inline-block;
        }

        .pop-up-leavedoc-label__wave {
            background-image: url(./assets/img/wave_desk.png);
            background-repeat: no-repeat;
            background-position: center;
            width: 22px;
            height: 339px;
            position: absolute;
            left: 0;
            bottom: -365px;
        }

        .pop-up-leavedoc-label__arrow {
            background-image: url(./assets/img/arrow_desk.png);
            background-repeat: no-repeat;
            background-position: center;
            width: 108px;
            height: 31px;
            position: absolute;
            right: -15px;
            top: 65px;
        }

        .pop-up-leavedoc__pic {
            position: absolute;
            right: 0;
            top: 20px;
        }

        .pop-up-leavedoc-list__one {
            display: inline-block;
            background-color: #EDECEC;
            padding: 22px 57px 27px 49px;
            margin-left: 44px;
            border-radius: 20px;
            margin-top: 36px;
        }

        .pop-up-leavedoc-list__two {
            margin-top: 26px;
            margin-left: 44px;
            font-size: 14px;
        }

        .pop-up-leavedoc-list__two-label {
            margin-left: 21px;
        }

        .pop-up-leavedoc-list__btn {
            background-color: #D4AC36;
            width: fit-content;
            border-radius: 70px;
            text-align: center;
            margin-top: 30px;
        }

        .pop-up-leavedoc-list__btn a {
            color: #fff;
            padding: 26px 68px;
            display: block;
            font-size: 16px;
        }

        .pop-up-leavedoc-list__btn {
            padding: 0;
        }

        .pop-up-leavedoc-list__one-list li,
        .pop-up-leavedoc-list__two-list li {
            margin-top: 16px;
            position: relative;
            font-size: 16px;
        }

        .pop-up-leavedoc-list__one-list li:before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #D4AC36;
            top: 4px;
            left: -18px;
        }

        .pop-up-leavedoc-list__two-list li:before {
            content: '';
            display: inline-block;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-image: url(./assets/img/ex-mark.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            position: relative;
            bottom: -3px;
            margin-right: 8px;
        }

        .pop-up-leavedoc__wrap-pos {
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .pop-up-leavedoc__dbltitle {
            display: flex;
            margin-top: 37px;
        }

        .pop-up-leavedoc__dbltitle-item {
            font-size: 32px;
            margin-right: 18px;
        }

        .pop-up-leavedoc__dbltitle-item:first-child {
            margin-right: 100px;
        }

        .pop-up-leavedoc__dbltitle-item:nth-child(2) {
            position: relative;
        }

        .pop-up-leavedoc__dbltitle-item:nth-child(2)::before {
            content: '';
            width: 14px;
            height: 14px;
            background-color: #282828;
            position: absolute;
            left: -28px;
            top: 11px;
            border-radius: 50%;
        }

        .pop-up-leavedoc__found,
        .pop-up-leavedoc__tg,
        .pop-up-leavedoc__tg-wrap {
            display: inline-block;
        }

        .pop-up-leavedoc__tg {
            display: flex;
            align-items: center;
            position: relative;
            bottom: -10px;
            left: 90px;
        }

        .pop-up-leavedoc__found {
            padding-right: 67px;
            border-right: 3px solid #D4AC36;
            position: relative;
            left: 56px;
        }

        .pop-up-leavedoc__found,
        .pop-up-leavedoc__tg-wrap {
            font-size: 18px;
        }

        .pop-up-leavedoc__tg-text {
            margin-left: 11px;
        }

        .pop-up-leavedoc__found a {
            color: #D4AC36;
        }

        .pop-up-leavedoc__pic_mob {
            display: none;
        }

        @media (max-width: 1200px) {
            .pop-up-leavedoc {
                padding-top: 0;
            }

            .pop-up-leavedoc__inner {
                width: auto;
                max-width: 415px;
                padding: 54px 17px;
                background-image: url(./assets/img/background_mob.png);
            }

            .pop-up-leavedoc__close {
                width: 23px;
                height: 23px;
                top: -40px;
            }

            .pop-up-leavedoc-label {
                font-size: 27px;
                margin-right: 44px;
            }

            .pop-up-leavedoc__pic_mob {
                display: block;
            }

            .pop-up-leavedoc__pic_desk {
                display: none;
            }

            .pop-up-leavedoc__pic {
                top: 74px;
                left: 0;
            }

            .pop-up-leavedoc__pic img {
                margin: auto;
            }

            .pop-up-leavedoc-label__wave {
                background-image: url(./assets/img/wave_mob.png);
                width: 203px;
                height: 13px;
                bottom: auto;
                top: -30px;
            }

            .pop-up-leavedoc-label__arrow {
                background-image: url(./assets/img/arrow_mob.png);
                width: 69px;
                height: 51px;
                right: -9px;
                top: 45px;
            }

            .pop-up-leavedoc-list {
                position: absolute;
                bottom: -455px;
                z-index: 8;
                width: 100%;
            }

            .pop-up-leavedoc-list__two-list li:before {
                width: 10px;
                height: 10px;
                bottom: -2px;
                margin-right: 4px;
            }

            .pop-up-leavedoc-list__one-list li,
            .pop-up-leavedoc-list__two-list li {
                font-size: 8px;
                margin-top: 3px;
                line-height: 1.7em;
            }

            .pop-up-leavedoc-list-inner {
                display: flex;
                gap: 15px;
            }

            .pop-up-leavedoc-list__one,
            .pop-up-leavedoc-list__two {
                width: 50%;
            }

            .pop-up-leavedoc-list__one {
                margin-top: 0;
                margin-left: 0;
                padding: 13px 15px 16px 18px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 1px 2px 4px #222;
            }

            .pop-up-leavedoc-list__two {
                margin-top: 0;
                margin-left: 0;
                display: inline-block;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 1px 2px 4px #222;
                padding: 13px 15px 16px 18px;
            }

            .pop-up-leavedoc-list__one-label {
                font-size: 12px;
            }

            .pop-up-leavedoc-list__two-label {
                font-size: 10px;
                margin-left: 0;
            }

            .pop-up-leavedoc-list__one-list li:before {
                width: 4px;
                height: 4px;
                top: 2px;
                left: -9px;
            }

            .pop-up-leavedoc__dbltitle-item {
                font-size: 16px;
            }

            .pop-up-leavedoc__wrap-pos {
                bottom: -325px;
                left: 0;
            }

            .pop-up-leavedoc-list__one {
                min-width: 190px;
            }

            .pop-up-leavedoc__dbltitle {
                flex-direction: column-reverse;
            }

            .pop-up-leavedoc__found {
                position: absolute;
                font-size: 12px;
                bottom: 0;
                right: 0;
                left: auto;
                padding-right: 0;
                border: none;
            }

            .pop-up-leavedoc__dbltitle-item:nth-child(2)::before {
                display: none;
            }

            .pop-up-leavedoc__tg {
                position: absolute;
                right: 27px;
                left: auto;
                bottom: 67px;
                transform: rotate(6deg);
            }

            .pop-up-leavedoc__tg-img {
                width: 33px;
                height: 33px;
            }

            .pop-up-leavedoc__dbltitle {
                margin-top: 0;
            }

            .pop-up-leavedoc__dbltitle-item:first-child {
                margin-right: 0;
            }

            .pop-up-leavedoc__tg-text {
                margin-left: 8px;
                font-size: 12px;
            }

            .pop-up-leavedoc-list__btn {
                margin: 25px 0 0;
                position: absolute;
                left: calc(50% - 141px);
            }

            .pop-up-leavedoc-list__btn a {
                color: #fff;
                padding: 19px 49px;
                display: block;
                font-size: 12px;
            }
        }

        @media (max-width: 415px) {
            .pop-up-leavedoc-label {
                font-size: 24px;
                margin-right: 15px;
            }

            .pop-up-leavedoc__wrap-pos {
                bottom: -300px;
            }

            .pop-up-leavedoc-list__one-list li,
            .pop-up-leavedoc-list__two-list li {
                line-height: 1.4em;
            }

            .pop-up-leavedoc-list__one {
                min-width: auto;
            }
        }

        @media (max-width: 348px) {
            .pop-up-leavedoc-label {
                font-size: 22px;
                margin-right: 10px;
            }

            .pop-up-leavedoc-list {
                bottom: -480px;
            }

            .pop-up-leavedoc__dbltitle-item {
                font-size: 12px;
            }
        }
    </style>

    <div class="pop-up-leavedoc">
        <div class="pop-up-leavedoc__inner">
            <div class="pop-up-leavedoc__container">
                <div class="pop-up-leavedoc-label">
                    <div class="pop-up-leavedoc-label__wave"></div>
                    <div class="pop-up-leavedoc-label__title">
                        ВСЯ ПРАВДА О ЗАЙМАХ <br>
                        ПОД ЗАЛОГ ТУТ
                    </div>
                    <div class="pop-up-leavedoc-label__arrow"></div>
                </div>
                <div class="pop-up-leavedoc-list">
                    <div class="pop-up-leavedoc-list-inner">
                        <div class="pop-up-leavedoc-list__one">
                            <div class="pop-up-leavedoc-list__one-label">Инвестор узнает:</div>
                            <div class="pop-up-leavedoc-list__one-list">
                                <ul>
                                    <li>Какой "продукт" получает Инвестор?</li>
                                    <li>Какой доход получает Инвестор?</li>
                                    <li>Какие гарантии у инвестора?</li>
                                    <li>Конкретные кейсы наших инвесторов.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pop-up-leavedoc-list__two">
                            <div class="pop-up-leavedoc-list__two-label">Если собираешься взять займ, обязательно узнай:</div>
                            <div class="pop-up-leavedoc-list__two-list">
                                <ul>
                                    <li>Что получает Заёмщик обращаясь к нам?</li>
                                    <li>7 ошибок при взятии кредита.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pop-up-leavedoc-list__btn btn">
                        <a href="tg://resolve?domain=zalogby_bot" rel="nofollow">
                            <span class="btn-blick"></span>
                            перейти в телеграм канал <br>
                            и подписаться
                        </a>
                    </div>
                </div>
                <div class="pop-up-leavedoc__pic">
                    <img class="pop-up-leavedoc__pic_desk" src="./assets/img/main_desk.png" alt="main_desk">
                    <img class="pop-up-leavedoc__pic_mob" src="./assets/img/main_mob.png" alt="main_mob">
                </div>
                <div class="pop-up-leavedoc__wrap-pos">
                    <div class="pop-up-leavedoc__found">
                        Основатель финансового <br>
                        сервиса <a href="https://zalog.by/">zalog.by</a>
                    </div>
                    <div class="pop-up-leavedoc__tg-wrap">
                        <div class="pop-up-leavedoc__tg">
                            <div class="pop-up-leavedoc__tg-img">
                                <a href="tg://resolve?domain=zalogby_bot" rel="nofollow">
                                    <img src="./assets/img/tg.png" alt="tg">
                                </a>
                            </div>
                            <div class="pop-up-leavedoc__tg-text">
                                Тут много <br>
                                полезного!
                            </div>
                        </div>
                    </div>
                    <div class="pop-up-leavedoc__dbltitle">
                        <div class="pop-up-leavedoc__dbltitle-item">Предприниматель</div>
                        <div class="pop-up-leavedoc__dbltitle-item">Инвестор</div>
                    </div>
                </div>
                <div class="pop-up-leavedoc__close">
                    <img src="./assets/img/close.png" alt="close">
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                if ($(window).width() > 1200) {
                    $(document).mouseleave(function() {
                        $('.pop-up-leavedoc').fadeIn();
                    });
                }
                let popupShown = localStorage.getItem("popupShown");
                if (!popupShown && $(window).width() < 1200) {
                    let delayInMilliseconds = 3000;
                    setTimeout(function() {
                        $(".pop-up-leavedoc").fadeIn();
                        localStorage.setItem("popupShown", "true");
                    }, delayInMilliseconds);
                }
                $('.pop-up-leavedoc__close').on('click', function() {
                    $('.pop-up-leavedoc').fadeOut();
                })
            });
        })(jQuery);
    </script>
    <!-- END POPUP when leaving the site-->

</body>

</html>