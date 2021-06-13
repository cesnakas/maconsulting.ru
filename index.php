<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

    <div class="sliderMainWrap">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main__slider",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "slider",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ID",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER1" => 'ASC',
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        </div>
    </div>

    <section class="aboutMain">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="aboutMain__caption animUp _anim-items _anim-no-hide">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/main/main__about-left.php"
                            )
                        );?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="aboutMain__content animUp _anim-items _anim-no-hide">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/main/main__about-right.php"
                            )
                        );?>
                        <a href="<?=SITE_DIR?>about/" class="more-link">Подробнее о нас.<br>Кто мы и что мы делаем.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/2.png" alt="img"/>
        </div>
        <div class="paralaxLineRight"></div>
    </div>

    <div class="servicesMain">
        <div class="anchor" id="servicesMain__anchor"></div>
        <div class="container">
            <h2 class="title animUp _anim-items _anim-no-hide">
                Наши услуги
            </h2>
            <div class="servicesMain__list animUp _anim-items _anim-no-hide">
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service1/" class="servicesMain__link">
                        <span class="servicesMain__count">01</span>
                        Анализ организации медицинской помощи, сбор информации и аналитика
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service2/" class="servicesMain__link">
                        <span class="servicesMain__count">02</span>
                        Формирование<br> доказательной базы
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service3/" class="servicesMain__link">
                        <span class="servicesMain__count">03</span>
                        Government relations
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service4/" class="servicesMain__link">
                        <span class="servicesMain__count">04</span>
                        Юридический консалтинг
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service5/" class="servicesMain__link">
                        <span class="servicesMain__count">05</span>
                        PR-технологии
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service6/" class="servicesMain__link">
                        <span class="servicesMain__count">06</span>
                        Стратегия доступа на рынок
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service7/" class="servicesMain__link">
                        <span class="servicesMain__count">07</span>
                        Мониторинг и аналитика
                    </a>
                </div>
                <div class="servicesMain__item">
                    <a href="<?=SITE_DIR?>service8/" class="servicesMain__link">
                        <span class="servicesMain__count">08</span>
                        Конференции и семинары
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/3.png" alt="img"/>
        </div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineLeft"></div>
    </div>

    <div class="trainingMain">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/main/main__training-title.php"
                            )
                        );?>
                    </h2>
                </div>
                <div class="col-12">
                    <h3 class="subtitle animUp _anim-items _anim-no-hide">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/main/main__training-subtitle.php"
                            )
                        );?>
                    </h3>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="trainingMain__caption animUp _anim-items _anim-no-hide">Мы эксперты по разработке авторских образовательных программ и организации корпоративных тренингов, посвященных продвижению медицинских технологий на рынок государственного финансирования. </div>
                    <a href="<?=SITE_DIR?>training/" class="d-none d-md-block more-link animUp _anim-items _anim-no-hide">Подробнее о наших<br> тренингах</a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="trainingMain__content animUp _anim-items _anim-no-hide">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="trainingMain__item">
                                    <div class="trainingMain__count">01</div>
                                    <div class="trainingMain__name">Образовательные программы и тренинги для сотрудников фармацевтических компаний</div>
                                    <p>Разработка авторских образовательных программ и организация корпоративных тренингов по продвижению медицинских технологий на рынок государственного финансирования.</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="trainingMain__item">
                                    <div class="trainingMain__count">02</div>
                                    <div class="trainingMain__name">Семинары для организаторов здравоохранения и врачей</div>
                                    <p>Мы разрабатываем образовательные программы и организовываем обучающие семинары для представителей управленческого звена здравоохранения и медицинского сообщества.</p>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <a href="<?=SITE_DIR?>training/" class="more-link animUp _anim-items _anim-no-hide">Подробнее о наших<br> тренингах</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/4.png" alt="img"/>
        </div>
        <div class="paralaxLineRight paralaxLineRight--gray"></div>
    </div>

    <div class="clientsMain">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">Наши клиенты</h2>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:photo.section",
            "slider__clients",
            Array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_ORDER" => "asc",
                "FIELD_CODE" => array("",""),
                "FILTER_NAME" => "arrFilter",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "sliders",
                "LINE_ELEMENT_COUNT" => "3",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Фотографии",
                "PAGE_ELEMENT_COUNT" => "20",
                "PROPERTY_CODE" => array("",""),
                "SECTION_CODE" => "",
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("",""),
                "SET_LAST_MODIFIED" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N"
            )
        );?>
    </div>

    <div class="aboutUsMain">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="subtitle subtitle--black animUp _anim-items _anim-no-hide">О нас говорят</h3>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main__reviews",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("",""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "sliders",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("REVIEW_POST","REVIEW_COMPANY","REVIEW_DETAIL",""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ID",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/1.png" alt=""/>
        </div>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>