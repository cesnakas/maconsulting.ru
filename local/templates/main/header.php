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
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

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
                        <ul class="nav__ul">
                            <li class="nav__li"><a href="<?=SITE_DIR?>about/" class="nav__link nav__link-anim">О Компании</a></li>
                            <li class="nav__li"><a href="#servicesMain__anchor" class="nav__link nav__link-anim link-anchor">Услуги</a></li>
                            <li class="nav__li"><a href="<?=SITE_DIR?>training/" class="nav__link nav__link-anim">Тренинги Market Access</a></li>
                            <li class="nav__li"><a href="<?=SITE_DIR?>projects/" class="nav__link nav__link-anim">Проекты</a></li>
                            <li class="nav__li"><a href="<?=SITE_DIR?>contacts/" class="nav__link nav__link-anim">Контакты</a></li>
                        </ul>
                    </nav>
                    <button class="menu-burger menu-burger-js">
                        <span class="menu-burger__name">Меню</span>
                        <span class="menu-burger__icon">
                                <span class="menu-burger__icon-line"></span>
                            </span>
                    </button>
                    <div class="phone-group">
                        <a href="tel:+74956200947" class="phone-link">+7 495 620 09 47</a>
                    </div>
                </div>
            </div>
        </header>
        <!---/Header-->
        <!---Main Content-->
        <section class="mainContent">

