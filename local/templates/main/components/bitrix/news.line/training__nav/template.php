<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<ul class="nav-page__ul">
<? $i = 1; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<li class="nav-page__li" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="nav-page__link link-anchor">
                <span class="nav-page__count"><?= ($i > 9) ? '' : '0';?><?= $i; ?></span>
                <span class="nav-page__name"><?echo $arItem["NAME"]?></span>
            </a>
            <?else:?>
            <a href="#" class="nav-page__link link-anchor">
                <span class="nav-page__count"><?= ($i > 9) ? '' : '0';?><?= $i; ?></span>
                <span class="nav-page__name"><?echo $arItem["NAME"]?></span>
            </a>
            <?endif;?>
        <?endif;?>

	</li>
<? $i++; ?>
<?endforeach;?>
</ul>