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

<? $i = 1; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="page-section-item <?=($i%2) ? '' : 'page-section-item--gray'?>">

    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <?foreach($arItem["FIELDS"] as $code=>$value):?>
    <div class="anchor" id="page<?=$value;?>"></div>
    <?endforeach;?>
    <div class="page-section-item__content animUp _anim-items _anim-no-hide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="container">

            <div class="page-section-item__heading">
                    <span class="page-section-item__number">
                        <span class="page-section-item__number-current"><?=($i > 9) ? '' : '0';?><?= $i; ?></span>
                        <span class="page-section-item__number-all">03</span>
                    </span>
                <span class="page-section-item__name">Примеры <br>реализованных <br>проектов</span>
            </div>

            <div class="page-section-item__body">
                <div class="page-section-item__row">
                    <div class="page-section-item__col">

                        <div class="page-section-item__holder border-item-top">
                        <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                            <?if(!empty($pid == "ITEM_TITLE")):?>
                            <h2 class="page-section-item__title">
                                <?=$arProperty["DISPLAY_VALUE"];?>
                            </h2>
                            <?endif;?>
                        <?endforeach;?>
                        </div>

                    </div>
                    <div class="page-section-item__col">
                        <div class="page-section-item__holder border-item-top">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                            <h3 class="page-section-item__caption">
                                <?if(!empty($pid == "ITEM_SUBTITLE")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            </h3>
                            <?endforeach;?>
                            <ul class="list-info">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if(!empty($pid == "ITEM_LIST")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            <?endforeach;?>
                            </ul>

                        </div>
                    </div>
                </div>

                <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <?if(!empty($pid == "ITEM_BUTTON")):?>
                <div class="page-section-item__row">
                    <div class="page-section-item__col">
                        <div class="page-section-item__holder">
                            <a href="<?=SITE_DIR?>contacts/" class="more-link">Свяжитесь с нами, чтобы обсудить<br>детали вашего проекта</a>
                        </div>
                    </div>
                </div>
                <?endif;?>
                <?endforeach;?>

            </div>

        </div>
    </div>

</div>

<? if($i%2): ?>
<div class="paralax paralax--xs">
    <div class="paralaxImgWrap">
        <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/10.png" alt=""/>
    </div>
    <div class="paralaxLineLeft paralaxLineLeft--green"></div>
    <div class="paralaxLineGreen"></div>
    <div class="paralaxLineDark--bot"></div>
</div>
<? else: ?>
<div class="paralax paralax--sm_two">
    <div class="paralaxImgWrap">
        <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/11.png" alt=""/>
    </div>
    <div class="paralaxLineBotWh"></div>
    <div class="paralaxLineRightWh"></div>
    <div class="paralaxLineLeft paralaxLineLeft--green"></div>
    <div class="paralaxLineGreen"></div>
</div>
<? endif; ?>

<? $i++; ?>
<?endforeach;?>

<!--//-->
<?/*
<div class="news-list">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>

		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>

		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>

		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>

		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>

	</p>
<?endforeach;?>

</div>
*/?>