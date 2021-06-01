<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
// fancybox // TODO: зачем???
// $asset->addCss('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
// $asset->addJs('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
?>

    <div class="contactsPage">
        <div class="container">
            <div class="contactsPage__content animUp _anim-items _anim-no-hide">
                <div class="contactsPage__sidebar">
                    <div class="contacts-market">
                        <h2 class="contacts-market__title">Market Acces Consulting</h2>
                        <div class="row">
                            <div class="col-12">
                                <p>123060, г. Москва,<br>ул. Расплетина, д.24, офис 203</p>
                            </div>
                            <div class="col-12">
                                <p>Рабочий график:<br>ПН–ПТ  10:00 - 19:00</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    <a class="phone-link-def" href="tel:">+7 495 620-09-47</a><br>
                                    <a class="email-link-def" href="mailto:info@maconsulting.ru">info@maconsulting.ru</a>
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="contacts-market__map">
                                    <a href="#" class="road-map-link">Открыть карту проезда</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="social">
                                    <a href="#" class="social__link icon-facebook"></a>
                                    <a href="#" class="social__link icon-linkedin"></a>
                                    <a href="#" class="social__link icon-twitter"></a>
                                    <a href="#" class="social__link icon-youtube-play"></a>
                                    <!--a href="#" class="social__link icon-instagram"></a>
                                    <a href="#" class="social__link icon-vkontakte"></a>
                                    <a href="#" class="social__link icon-whatsapp"></a-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contactsPage__form-wrap">
                    <h1 class="title">Спасибо за ваш интерес <br>к нашей работе</h1>
                    <div class="form-wrap">
                        <div class="form-wrap__caption">Оставьте, пожалуйста, сообщение.<br>Мы будем рады ответить.</div>
                        <form method="" action="">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-wrap__control">
                                        <label class="form-wrap__label">Ваше имя*</label>
                                        <input class="form-wrap__input" type="text" name=""/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-wrap__control">
                                        <label class="form-wrap__label">Компания</label>
                                        <input class="form-wrap__input" type="text" name=""/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-wrap__control">
                                        <label class="form-wrap__label">Email*</label>
                                        <input class="form-wrap__input" type="email" name=""/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-wrap__control">
                                        <label class="form-wrap__label">Телефон*</label>
                                        <input class="form-wrap__input phone" placeholder="+7 (___) ___-__-__" type="tel" name=""/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-wrap__control">
                                        <label class="form-wrap__label">Сообщение</label>
                                        <textarea class="form-wrap__input"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-wrap__control">
                                        <button class="form-wrap__submit more-link" type="submit">Отправить<br>сообщение</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?/*
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.feedback",
                            "contacts__feedback",
                            Array(
                                "EMAIL_TO" => "example@mail.com",
                                "EVENT_MESSAGE_ID" => array(),
                                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                "REQUIRED_FIELDS" => array("NAME","EMAIL"),
                                "USE_CAPTCHA" => "Y"
                            )
                        );
                        */?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/16.png" alt=""/>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>