<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="nav__ul">
    <li class="nav__li">
        <a href="<?=SITE_DIR?>" class="nav__link nav__link-anim nav__link--active">Главная страница</a>
    </li>
    <li class="nav__li">
        <a href="<?=SITE_DIR?>about/" class="nav__link nav__link-anim">О Компании</a>
    </li>
    <li class="nav__li">
        <? if (CSite::InDir(SITE_DIR.'index.php')): ?>
            <a href="#servicesMain__anchor" class="nav__link nav__link-anim link-anchor">Услуги</a>
        <? else: ?>
            <a href="<?=SITE_DIR?>#servicesMain__anchor" class="nav__link link-anchor-inner">Услуги</a>
        <? endif; ?>
    </li>
    <li class="nav__li">
        <a href="<?=SITE_DIR?>training/" class="nav__link nav__link-anim">Тренинги Market Access</a>
    </li>
    <li class="nav__li">
        <a href="<?=SITE_DIR?>projects/" class="nav__link nav__link-anim">Проекты</a>
    </li>
</ul>

<?/*
<?if (!empty($arResult)):?>
<ul class="left-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>
*/?>