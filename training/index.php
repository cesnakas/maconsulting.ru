<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

    <div class="heading-page">
        <div class="container">
            <div class="heading-page__content">
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">
                    <?php // Тренинги и образовательные программы в области Market Access
                    $APPLICATION->IncludeComponent("bitrix:main.include", "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."training/include/training__title.php"
                        ]
                    );?>
                </h1>
                <nav class="nav-page animUp _anim-items _anim-no-hide">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.line",
                        "training__nav",
                        [
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "300",
                            "CACHE_TYPE" => "A",
                            "DETAIL_URL" => "#page#ELEMENT_ID#",
                            "FIELD_CODE" => array("ID","CODE",""),
                            "IBLOCKS" => array("3"),
                            "IBLOCK_TYPE" => "main",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "ID",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC"
                        ]
                    );?>
                </nav>
            </div>
            <div class="heading-page__img-wrap _anim-items _anim-no-hide">
                <div class="heading-page__paralax">
                    <div class="heading-page__paralaxWrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/banner-page/2.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax-anim _anim-items _anim-no-hide">
        <div class="paralax paralax--sm paralax--r_green">
            <div class="paralaxImgWrap">
                <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/7.png" alt="img">
            </div>
            <div class="paralaxLineBotWh"></div>
            <div class="paralaxLineRightWh"></div>
            <div class="paralaxLinePattern"></div>
            <div class="paralaxLineLeft paralaxLineLeft--green"></div>
            <div class="paralaxLineGreen-sm"></div>
        </div>
    </div>

    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "training__work",
        [
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => ["ID", ""],
            "FILE_404" => "",
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "IBLOCK_ID" => "3",
            "IBLOCK_TYPE" => "training",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK" => "",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_PARAMS_NAME" => "arrPager",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" =>
            [
                "TRAINING_TITLE",
                "TRAINING_SUBTITLE",
                "TRAINING_TEXT",
                "TRAINING_LIST_LEFT",
                "TRAINING_LIST_RIGHT",
                "TRAINING_LIST_ONLY_RIGHT",
                "TRAINING_BUTTON",
                "TRAINING_LIST_LEFT_TITLE",
                "TRAINING_LIST_RIGHT_TITLE",
                "TRAINING_LIST_ONLY_RIGHT_TITLE"
            ],
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

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/6.png" alt="img">
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>