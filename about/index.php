<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// fancybox
$asset->addCss('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
$asset->addJs('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
?>

    <section class="heading-page">
        <div class="container">
            <div class="heading-page__content">
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."about/include/about__heading-title.php"
                        ]
                    );?>
                </h1>
                <nav class="nav-page animUp _anim-items _anim-no-hide">
                    <ul class="nav-page__ul">
                        <li class="nav-page__li">
                            <a href="#page1" class="nav-page__link link-anchor">
                                <span class="nav-page__count">01</span>
                                <span class="nav-page__name">О компании</span>
                            </a>
                        </li>
                        <li class="nav-page__li">
                            <a href="#page2" class="nav-page__link link-anchor">
                                <span class="nav-page__count">02</span>
                                <span class="nav-page__name">Наши принципы</span>
                            </a>
                        </li>
                        <li class="nav-page__li">
                            <a href="#page3" class="nav-page__link link-anchor">
                                <span class="nav-page__count">03</span>
                                <span class="nav-page__name">Направления<br> работы в 2021</span>
                            </a>
                        </li>
                        <li class="nav-page__li">
                            <a href="#page4" class="nav-page__link link-anchor">
                                <span class="nav-page__count">04</span>
                                <span class="nav-page__name">Галерея</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="heading-page__img-wrap _anim-items _anim-no-hide">
                <div class="heading-page__paralax">
                    <div class="heading-page__paralaxWrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/banner-page/1.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paralax-anim _anim-items _anim-no-hide">
        <div class="anim-line">
            <div class="paralaxLineLeft paralaxLineLeft--green"></div>
            <div class="paralaxLineDark--right"></div>
            <div class="paralaxLineGreen"></div>
        </div>
    </div>

    <section class="aboutPage">
        <div class="anchor" id="page1"></div>
        <div class="container">
            <div class="aboutPage__item animUp _anim-items _anim-no-hide">
                <h2 class="subtitle">
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."about/include/about__about-title.php"
                        ]
                    );?>
                </h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3 class="aboutPage__caption">
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_DIR."about/include/about__about-left.php"
                                ]
                            );?>
                        </h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="aboutPage__text">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <?php
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_DIR."about/include/about__about-right-col-1.php"
                                        ]
                                    );?>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <?php
                                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                        [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => SITE_DIR."about/include/about__about-right-col-2.php"
                                        ]
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/13.png" alt="img">
        </div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineLeft"></div>
        <div class="paralaxLineDark--top"></div>
        <div class="paralaxLineDark--top_r_sm"></div>
        <div class="paralaxLineBotWh--r"></div>
    </div>

    <section class="our-principles">
        <div class="anchor" id="page2"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."about/include/about__list-title.php"
                            ]
                        );?>
                    </h2>
                </div>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "about__list",
                    [
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
                        "FIELD_CODE" => ["", ""],
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "6",
                        "IBLOCK_TYPE" => "principles",
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
                        "PROPERTY_CODE" => ["", ""],
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
                    ]
                );?>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/14.png" alt="img">
        </div>
        <div class="paralaxLineRight paralaxLineRight--top"></div>
        <div class="paralaxLineDark--right"></div>
        <div class="paralaxLinTopWh"></div>
    </div>

    <section class="direction_of_work">
        <div class="anchor" id="page3"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."about/include/about__areas_work-title.php",
                            ]
                        );?>
                    </h2>
                </div>
                <div class="col-12">
                    <h3 class="subtitle animUp _anim-items _anim-no-hide">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."about/include/about__areas_work-subtitle.php",
                            ]
                        );?>
                    </h3>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="direction_of_work__caption animUp _anim-items _anim-no-hide">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."about/include/about__areas_work-left.php",
                            ]
                        );?>
                    </div>
                    <a href="<?=SITE_DIR?>projects/" class="d-none d-md-block more-link animUp _anim-items _anim-no-hide">
                        Примеры наших<br>реализованных проектов
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="direction_of_work__content animUp _anim-items _anim-no-hide">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">01</div>
                                    <div class="direction_of_work__name">
                                        <?php
                                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                            [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => SITE_DIR."about/include/about__areas_work-right-01.php",
                                            ]
                                        );?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">02</div>
                                    <div class="direction_of_work__name">
                                        <?php
                                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                                            [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => SITE_DIR."about/include/about__areas_work-right-02.php",
                                            ]
                                        );?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">03</div>
                                    <div class="direction_of_work__name">
                                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                            [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => SITE_DIR."about/include/about__areas_work-right-03.php",
                                            ]
                                        );?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">04</div>
                                    <div class="direction_of_work__name">
                                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                            [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => SITE_DIR."about/include/about__areas_work-right-04.php",
                                            ]
                                        );?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <a href="<?=SITE_DIR?>projects/" class="more-link animUp _anim-items _anim-no-hide">
                                    Примеры наших<br>реализованных проектов
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/15.png" alt="img">
        </div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineLeft"></div>
        <div class="paralaxLineDark--top"></div>
        <div class="paralaxLineDark--top_r_sm"></div>
        <div class="paralaxLineBotWh--r"></div>
    </div>

    <section class="galleryWrap">
        <div class="anchor" id="page4"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."about/include/about__gallery-title.php"
                            ]
                        );?>
                    </h2>
                </div>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "about__gallery",
                    [
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
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
                        "FIELD_CODE" => ["", ""],
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "about",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MEDIA_PROPERTY" => "",
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
                        "PROPERTY_CODE" => [
                            "LEFT_TITLE",
                            "RIGHT_VIDEO",
                            "LEFT_TEXT",
                            "RIGHT_TEXT",
                            "MORE_PHOTOS"
                        ],
                        "SEARCH_PAGE" => "/search/",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SLIDER_PROPERTY" => "",
                        "SORT_BY1" => "ID",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "TEMPLATE_THEME" => "",
                        "USE_RATING" => "N",
                        "USE_SHARE" => "N"
                    ]
                );?>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/5.png" alt="img">
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>