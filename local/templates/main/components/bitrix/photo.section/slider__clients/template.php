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

<div class="swiper-container clientsSlider clientsSlider-js animUp _anim-items _anim-no-hide">

    <div class="swiper-wrapper">
	<? foreach($arResult["ROWS"] as $arItems): ?>

		<? foreach($arItems as $arItem): ?>
			<? if(is_array($arItem)): ?>

				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="swiper-slide" width="<?=$arResult["TD_WIDTH"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					&nbsp;
					<? if($arResult["USER_HAVE_ACCESS"]): ?>
						<? if(is_array($arItem["PICTURE"])): ?>
							<a class="clients-slide" href="#<?/*=$arItem["DETAIL_PAGE_URL"]*/?>">
                                <img
									src="<?=$arItem["PICTURE"]["SRC"]?>"
									width="<?=$arItem["PICTURE"]["WIDTH"]?>"
									height="<?=$arItem["PICTURE"]["HEIGHT"]?>"
									alt="<?=$arItem["PICTURE"]["ALT"]?>"
									title="<?=$arItem["PICTURE"]["TITLE"]?>"
                                />
                            </a>
						<? endif; ?>
					<? else: ?>
						<? if(is_array($arItem["PICTURE"])): ?>
							<img
								src="<?=$arItem["PICTURE"]["SRC"]?>"
								width="<?=$arItem["PICTURE"]["WIDTH"]?>"
								height="<?=$arItem["PICTURE"]["HEIGHT"]?>"
								alt="<?=$arItem["PICTURE"]["ALT"]?>"
								title="<?=$arItem["PICTURE"]["TITLE"]?>"
                            />
						<? endif; ?>
					<? endif; ?>
				</div>

			<? endif; ?>
		<? endforeach; ?>

	<? endforeach; ?>
    </div>

</div>