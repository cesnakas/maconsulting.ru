<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (!empty($arResult)): ?>
<ul class="nav__ul">

<?
foreach($arResult as $key => $arItem):
    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
        continue;
?>

    <? if ($key == 1): ?>

        <? if (CSite::InDir(SITE_DIR.'index.php')): ?>
        <li class="nav__li">
            <a href="#servicesMain__anchor" class="nav__link nav__link-anim link-anchor"><?=$arItem["TEXT"]?></a>
        </li>
        <? else: ?>
        <li class="nav__li">
            <? if ($arItem['SELECTED'] ||
                CSite::InDir(SITE_DIR.'service1/') ||
                CSite::InDir(SITE_DIR.'service2/') ||
                CSite::InDir(SITE_DIR.'service3/') ||
                CSite::InDir(SITE_DIR.'service4/') ||
                CSite::InDir(SITE_DIR.'service5/') ||
                CSite::InDir(SITE_DIR.'service6/') ||
                CSite::InDir(SITE_DIR.'service7/') ||
                CSite::InDir(SITE_DIR.'service8/'))
            { ?>
            <a href="<?=SITE_DIR?>#servicesMain__anchor" class="nav__link link-anchor-inner nav__link--active"><?=$arItem["TEXT"]?></a>
            <? } else { ?>
            <a href="<?=SITE_DIR?>#servicesMain__anchor" class="nav__link link-anchor-inner"><?=$arItem["TEXT"]?></a>
            <? } ?>
        </li>
        <? endif; ?>

    <? else: ?>

        <? if ($arItem["SELECTED"]): ?>
        <li class="nav__li">
            <a href="<?=$arItem["LINK"]?>" class="nav__link nav__link-anim nav__link--active"><?=$arItem["TEXT"]?></a>
        </li>
        <? else: ?>
        <li class="nav__li">
            <a href="<?=$arItem["LINK"]?>" class="nav__link nav__link-anim"><?=$arItem["TEXT"]?></a>
        </li>
        <? endif; ?>

    <? endif; ?>

<? endforeach; ?>

</ul>
<? endif; ?>