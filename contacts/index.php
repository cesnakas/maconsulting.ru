<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// fancybox // TODO: зачем???
// $asset->addCss('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
// $asset->addJs('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
?>

    <section class="contactsPage">
        <div class="container">
            <div class="contactsPage__content animUp _anim-items _anim-no-hide">
                <div class="contactsPage__sidebar">
                    <div class="contacts-market">
                        <h2 class="contacts-market__title">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."/contacts/include/contacts__subtitle.php"
                                )
                            );?>
                        </h2>
                        <div class="row">
                            <div class="col-12">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_DIR."include/footer__address.php"
                                    )
                                );?>
                            </div>
                            <div class="col-12">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_DIR."include/footer__working-schedule.php"
                                    )
                                );?>
                            </div>
                            <div class="col-12">
                                <p>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_DIR."include/footer__phone-email.php"
                                        )
                                    );?>
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="contacts-market__map">
                                    <a href="#" class="road-map-link">
                                        Открыть карту проезда
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="social">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_DIR."include/footer__social.php"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contactsPage__form-wrap">
                    <h1 class="title">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."/contacts/include/contacts__title.php"
                            )
                        );?>
                    </h1>
                    <div class="form-wrap">
                        <div class="form-wrap__caption">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."/contacts/include/contacts__form-title.php"
                                )
                            );?>
                        </div>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.feedback",
                            "contacts__feedback",
                            Array(
                                "EMAIL_TO" => "example@mail.com",
                                "EVENT_MESSAGE_ID" => array(),
                                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                "REQUIRED_FIELDS" => array("NAME","EMAIL"),
                                "USE_CAPTCHA" => "Y"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/16.png" alt="img"/>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>