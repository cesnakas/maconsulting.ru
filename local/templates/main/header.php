<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?php
    $APPLICATION->ShowHead();
    // Meta
    $asset->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
    // JQuery
    $asset->addJs('https://code.jquery.com/jquery-3.6.0.min.js');
    // Bootstrap
    $asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    $asset->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');
    // Fonts
    $asset->addCss(SITE_TEMPLATE_PATH.'/dist/css/fontello.css');
    // simpleParallax
    $asset->addJs('https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.1/dist/simpleParallax.min.js');
    // Swiper
    $asset->addCss('https://unpkg.com/swiper/swiper-bundle.min.css');
    $asset->addJs('https://unpkg.com/swiper/swiper-bundle.min.js');
    // Animate CSS
    $asset->addCss('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    $asset->addJs('https://cdn.jsdelivr.net/npm/@cycjimmy/swiper-animation@4/dist/swiper-animation.umd.min.js');
    // Custom
    $asset->addCss(SITE_TEMPLATE_PATH.'/dist/css/main.css');
    $asset->addCss(SITE_TEMPLATE_PATH.'/dist/css/media.css');
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/common.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/dist/img/favicon.png" type="image/png">
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/dist/img/favicon.png" type="image/png">
    <?/*link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"*/?>

</head>
<body>

    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div class="Wrapper">
        <div class="shadow"></div>
        <!---Header-->
        <header class="header">
            <div class="container">
                <div class="header__logo">
                    <a href="<?=SITE_DIR?>" class="header__logo-link">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/logo.svg" alt=""/>
                    </a>
                </div>
                <div class="header__content">
                    <nav class="nav navMain-js">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "navbar__header",
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
                    <button class="menu-burger menu-burger-js">
                        <span class="menu-burger__name">Меню</span>
                        <span class="menu-burger__icon">
                            <span class="menu-burger__icon-line"></span>
                        </span>
                    </button>
                    <div class="phone-group">
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
            </div>
        </header>
        <!---/Header-->
        <!---Main Content-->
        <section class="mainContent">

