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

use Bitrix\Main\Page\Asset;
// fancybox
Asset::getInstance()->addCss('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
Asset::getInstance()->addJs('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
?>

<div class="col-12">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="galleryItem animUp _anim-items _anim-no-hide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="row">

            <div class="col-12">
            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <div class="galleryItem__number">
                <?if(!empty($pid == "LEFT_NUMBER")):?>
                    <?=$arProperty["DISPLAY_VALUE"];?>
                <?endif;?>
                </div>
            <?endforeach;?>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <div class="galleryContent">
                    <?if(!empty($pid == "LEFT_TITLE")):?>
                    <div class="galleryContent__title">
                        <?=$arProperty["DISPLAY_VALUE"];?>
                    </div>
                    <?endif;?>
                    <?if(!empty($pid == "LEFT_TEXT")):?>
                    <div class="galleryContent__text">
                        <p><?=$arProperty["DISPLAY_VALUE"];?></p>
                    </div>
                    <?endif;?>
                </div>
            <?endforeach;?>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

                <?if(!empty($pid == "RIGHT_VIDEO")):?>
                <div class="galleryContent__video-wrap">
                    <a href="#<?/*=$arItem["DETAIL_PAGE_URL"]*/?>" class="galleryContent__video">
                        <img
                            class="galleryContent__img"
                            src="<?=SITE_TEMPLATE_PATH?>/dist/img/video-img2.png"
                            <?/*
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            */?>
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                        <span class="galleryContent__play-btn"></span>
                    </a>
                </div>
                <br>
                <?endif;?>

                <?if(!empty($pid == "RIGHT_TEXT")):?>
                <div class="galleryContent galleryContent--right">
                    <div class="galleryContent__text">
                        <p><?=$arProperty["DISPLAY_VALUE"];?></p>
                    </div>
                </div>
                <?endif;?>

            <?endforeach;?>
            </div>

        </div>

        <?if(!empty($pid == "MORE_PHOTOS")):?>
        <div class="swiper-container galleryCarousel galleryCarousel-js">
            <div class="swiper-wrapper">
            <?
            $arItem["MORE_PHOTOS"] = array();
            if(isset($arItem["PROPERTIES"]["MORE_PHOTOS"]["VALUE"]) && is_array($arItem["PROPERTIES"]["MORE_PHOTOS"]["VALUE"]))
            {
                foreach($arItem["PROPERTIES"]["MORE_PHOTOS"]["VALUE"] as $FILE)
                {
                    $FILE = CFile::GetFileArray($FILE);
                    if(is_array($FILE))
                        $arItem["MORE_PHOTOS"][]=$FILE;
                }
            }
            ?>

                <?foreach($arItem["MORE_PHOTOS"] as $PHOTO):?>
                <div class="swiper-slide">
                    <a data-fancybox="gallery" href="<?=$PHOTO["SRC"]?>" class="galleryCarousel__slide">
                        <img
                            src="<?=$PHOTO["SRC"]?>"
                            width="<?=$PHOTO["WIDTH"]?>"
                            height="<?=$PHOTO["HEIGHT"]?>"
                            alt="<?=$arItem["NAME"]?>"
                            title="<?=$arItem["NAME"]?>"
                        />
                    </a>
                </div>
                <?endforeach?>

            </div>
            <div class="slider-btn slider-btn-next"></div>
            <div class="slider-btn slider-btn-prev"></div>
        </div>
        <?endif;?>

    </div>
<?endforeach;?>
</div>