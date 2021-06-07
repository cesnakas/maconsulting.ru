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
                        <?
                        CModule::IncludeModule("iblock");
                        $iblock_id = 7;
                        $arFilter = Array("IBLOCK_ID"=>$iblock_id, "ACTIVE"=>"Y");
                        $res_count = CIBlockElement::GetList(Array(), $arFilter, Array(), false, Array());
                        ?>
                        <span class="page-section-item__number-all"><?=($i > 9) ? '' : '0';?><?=$res_count;?></span>
                    </span>
                <span class="page-section-item__name">Тренинги <br>Market Access</span>
            </div>

            <div class="page-section-item__body">
                <div class="page-section-item__row">
                    <div class="page-section-item__col">

                        <div class="page-section-item__holder border-item-top">
                        <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                            <?if(!empty($pid == "TRAINING_TITLE")):?>
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
                                <?if(!empty($pid == "TRAINING_SUBTITLE")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            </h3>
                            <?endforeach;?>

                            <div class="page-section-item__text">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if(!empty($pid == "TRAINING_TEXT")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            <?endforeach;?>
                            </div>

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

                <div class="page-section-item__row">
                    <div class="page-section-item__col">
                        <div class="page-section-item__holder">
                            <h3 class="subtitle <?=($i%2) ? 'subtitle--black' : ''?>">
                                Модули тренингов
                            </h3>
                            <ul class="list-info">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if(!empty($pid == "TRAINING_LIST_LEFT")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            <?endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <div class="page-section-item__col">
                        <div class="page-section-item__holder">
                            <h3 class="subtitle <?=($i%2) ? 'subtitle--black' : ''?>">
                                Лекторский состав
                            </h3>
                            <ul class="list-info">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if(!empty($pid == "TRAINING_LIST_RIGHT")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            <?endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>

                <?if(!empty($pid == "TRAINING_LIST_ONLY_RIGHT")):?>
                <div class="page-section-item__row">
                    <div class="page-section-item__col">
                        <div class="page-section-item__holder"></div>
                    </div>
                    <div class="page-section-item__col">
                        <div class="page-section-item__holder">
                            <h3 class="subtitle <?=($i%2) ? 'subtitle--black' : ''?>">
                                Формат мероприятия (онлайн или очный)
                            </h3>
                            <ul class="list-info">
                            <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if(!empty($pid == "TRAINING_LIST_ONLY_RIGHT")):?>
                                    <?=$arProperty["DISPLAY_VALUE"];?>
                                <?endif;?>
                            <?endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?endif;?>

                <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <?if(!empty($pid == "TRAINING_BUTTON")):?>
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
        <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/8.png" alt=""/>
    </div>
    <div class="paralaxLineLeft paralaxLineLeft--green"></div>
    <div class="paralaxLineGreen"></div>
    <div class="paralaxLineDark--bot"></div>
</div>
<? else: ?>

<? endif; ?>

<? $i++; ?>
<?endforeach;?>
