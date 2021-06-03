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

<div class="swiper-container aboutUsSlider aboutUsSlider-js animUp _anim-items _anim-no-hide">
    <div class="swiper-wrapper">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="aboutUsMain__name" data-swiper-animation="animate__fadeInUp" data-duration=".8s" data-delay=".3s" data-swiper-out-animation="animate__fadeOutDown" data-out-duration=".7s">
                    <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                        <?echo $arItem["NAME"]?>
                    <?endif;?>
                    </div>
                    <div class="aboutUsMain__post" data-swiper-animation="animate__fadeInUp" data-duration=".8s" data-delay=".5s" data-swiper-out-animation="animate__fadeOutDown" data-out-duration=".7s">
                    <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                        <?if($pid == "REVIEW_POST"):?>
                            <?=$arProperty["DISPLAY_VALUE"];?>
                        <?endif;?>
                        <?if($pid == "REVIEW_COMPANY"):?>
                            <br>
                            <?=$arProperty["DISPLAY_VALUE"];?>
                        <?endif;?>
                    <?endforeach;?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="aboutUsMain__content" data-swiper-animation="animate__fadeInRight" data-duration="1s" data-delay=".3s" data-swiper-out-animation="animate__fadeOutRight" data-out-duration=".9s">
                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                        <?endif;?>
                        <div class="aboutUsMain__info-detail">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if($pid == "REVIEW_DETAIL"):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            <?endforeach;?>
                        </div>
                    </div>
                <?/*
                if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <img
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                        </a>
                    <?else:?>
                        <img
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                    <?endif;?>
                <?endif
                */?>
                </div>

            <?/*
            if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
            <?endif
            */?>

            <?/*
            if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
                <?else:?>
                    <b><?echo $arItem["NAME"]?></b><br />
                <?endif;?>
            <?endif;
            */?>

            <?/*
            foreach($arItem["FIELDS"] as $code=>$value):?>
                <small>
                <?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
                </small><br />
            <?endforeach;
            */?>

            <?/*
            foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <small>
                <?=$arProperty["NAME"]?>:&nbsp;
                <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
                    <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                <?else:?>
                    <?=$arProperty["DISPLAY_VALUE"];?>
                <?endif?>
                </small><br />
            <?endforeach;
            */?>

            </div>
        </div>
<?endforeach;?>
    </div>
    <div class="swiper-pagination"></div>
</div>