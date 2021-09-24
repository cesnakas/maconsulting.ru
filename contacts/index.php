<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// fancybox
// $asset->addCss('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
// $asset->addJs('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
?>

    <section class="contactsPage">
        <div class="container">
            <div class="contactsPage__content animUp _anim-items _anim-no-hide">
                <div class="contactsPage__sidebar">
                    <div class="contacts-market">
                        <h2 class="contacts-market__title">
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."contacts/include/contacts__subtitle.php"
                                ]
                            );?>
                        </h2>
                        <div class="row">
                            <div class="col-12">
                                <?php
                                $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                    [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/main__address.php"
                                    ]
                                );?>
                            </div>
                            <div class="col-12">
                                <?php
                                $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                    [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH."/include/main__working-schedule.php"
                                    ]
                                );?>
                            </div>
                            <div class="col-12">
                                <p>
                                    <?php
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_TEMPLATE_PATH."/include/main__phone-email.php"
                                        ]
                                    );?>
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="contacts-market__map">
                                    <a href="#" class="road-map-link">Открыть карту проезда</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="social">
                                    <?php
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_TEMPLATE_PATH."/include/main__social.php"
                                        ]
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contactsPage__form-wrap">
                    <h1 class="title">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."/contacts/include/contacts__title.php"
                            ]
                        );?>
                    </h1>
                    <div class="form-wrap">
                        <div class="form-wrap__caption">
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."/contacts/include/contacts__form-title.php"
                                ]
                            );?>
                        </div>
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.feedback", "contacts__feedback",
                            [
                                "EMAIL_TO" => "example@mail.com",
                                "EVENT_MESSAGE_ID" => [],
                                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                "REQUIRED_FIELDS" => ["NAME", "EMAIL"],
                                "USE_CAPTCHA" => "Y"
                            ]
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/16.png" alt="img">
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>