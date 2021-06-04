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

<div class="col-12">
    <div class="spoilersWrap animUp _anim-items _anim-no-hide">

    <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <? if ($key == 0): ?>
        <div class="spoilersItem" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

            <button class="spoilersItem__btn active"><?=$arItem["NAME"]?><span class="spoilersItem__icon"></span></button>

            <div class="spoilersItem__content" style="display: block;">
                <div class="spoilersItem__flex">
                    <div class="spoilersItem__text">
                        <p><?=$arItem["PREVIEW_TEXT"];?></p>
                    </div>
                </div>
            </div>

        </div>
        <? else: ?>
        <div class="spoilersItem" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

            <button class="spoilersItem__btn"><?=$arItem["NAME"]?><span class="spoilersItem__icon"></span></button>

            <div class="spoilersItem__content">
                <div class="spoilersItem__flex">
                    <div class="spoilersItem__text">
                        <p><?=$arItem["PREVIEW_TEXT"];?></p>
                    </div>
                </div>
            </div>

        </div>
        <? endif; ?>
    <?endforeach;?>

    </div>
</div>