<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>

<div style="min-height: 50vh;">

    <?$APPLICATION->IncludeComponent(
        "bitrix:photo.section",
        "slider__clients",
        Array(
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_SORT_FIELD" => "id",
            "ELEMENT_SORT_ORDER" => "asc",
            "FIELD_CODE" => array("",""),
            "FILTER_NAME" => "arrFilter",
            "IBLOCK_ID" => "7",
            "IBLOCK_TYPE" => "main",
            "LINE_ELEMENT_COUNT" => "5",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "",
            "META_KEYWORDS" => "",
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
            "SET_TITLE" => "N",
            "SHOW_404" => "N"
        )
    );?>

</div>


<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>