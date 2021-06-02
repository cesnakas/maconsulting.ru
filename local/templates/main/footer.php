<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
?>

        </section>
        <!---/Main Content-->

        <? if (!CSite::InDir(SITE_DIR.'contacts/')): ?>
        <!---Footer-->
        <footer class="footer">
            <div class="footer-line"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 animUp _anim-items _anim-no-hide">
                        <div class="footer__link-group">
                            <a href="<?=SITE_DIR?>contacts/" class="email-link">Напишите нам</a>
                            <? // <a href="tel:" class="phone-link"></a>
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/phone__header-footer.php"
                                )
                            );?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 animUp _anim-items _anim-no-hide">
                        <nav class="nav">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "navbar__footer",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "top",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N"
                                )
                            );?>
                        </nav>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 animUp _anim-items _anim-no-hide">
                        <div class="footer__contacts contacts-market">
                            <h2 class="contacts-market__title">Market Acces Consulting</h2>
                            <div class="contacts-market__content">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                        <? // <p>123060, г. Москва,<br>ул. Расплетина, д.24, офис 203</p>
                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/footer__address.php"
                                            )
                                        );?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                        <? // <p>Рабочий график:<br>ПН–ПТ  10:00 - 19:00</p>
                                        $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/footer__working-schedule.php"
                                            )
                                        );?>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                        <p>
                                            <?
                                            // <a class="phone-link-def" href="tel:+74956200947">+7 495 620-09-47</a><br>
                                            // <a class="email-link-def" href="mailto:info@maconsulting.ru">info@maconsulting.ru</a>
                                            $APPLICATION->IncludeComponent(
                                                "bitrix:main.include",
                                                "",
                                                Array(
                                                    "AREA_FILE_SHOW" => "file",
                                                    "AREA_FILE_SUFFIX" => "inc",
                                                    "EDIT_TEMPLATE" => "",
                                                    "PATH" => "/include/footer__phone-email.php"
                                                )
                                            );?>
                                        </p>
                                    </div>
                                </div>
                                <div class="contacts-market__map">
                                    <a href="#" class="road-map-link">Открыть карту проезда</a>
                                </div>
                                <div class="social">
                                    <?
                                    // <a href="#" class="social__link icon-facebook"></a>
                                    // <a href="#" class="social__link icon-linkedin"></a>
                                    // <a href="#" class="social__link icon-twitter"></a>
                                    // <a href="#" class="social__link icon-youtube-play"></a>
                                    // <!--a href="#" class="social__link icon-instagram"></a>
                                    // <a href="#" class="social__link icon-vkontakte"></a>
                                    // <a href="#" class="social__link icon-whatsapp"></a-->
                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/footer__social.php"
                                        )
                                    );?>
                                </div>
                                <div class="footer__producer">
                                    <? // © 2021 Market Access Consulting
                                    $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/footer__copyright.php"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!---/Footer-->
        <? else: ?>
        <!---Footer-->
        <footer class="footer">
            <div class="footer-line"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 animUp _anim-items _anim-no-hide">
                        <div class="footer__producer">
                            <? // © 2021 Market Access Consulting
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/footer__copyright.php"
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!---/Footer-->
        <? endif; ?>

    </div>

</body>
</html>