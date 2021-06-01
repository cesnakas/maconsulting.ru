<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?/*
<div class="mb-4">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<div class="form-group">
			<label for="mainFeedback_name"><?=GetMessage("MFT_NAME");?><?
				if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-control-required">*</span><?endif;?></label>
			<input
				type="text"
				id="mainFeedback_name"
				name="user_name"
				class="form-control"
				value="<?=$arResult["AUTHOR_NAME"]?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>required<?endif?>
			/>
		</div>

		<div class="form-group">
			<label for="mainFeedback_email"><?=GetMessage("MFT_EMAIL")?><?
				if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-control-required">*</span><?endif?></label>
			<input
				type="text"
				name="user_email"
				id="mainFeedback_email"
				class="form-control"
				value="<?=$arResult["AUTHOR_EMAIL"]?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
			/>
		</div>


		<div class="form-group">
			<label for="mainFeedback_message"><?=GetMessage("MFT_MESSAGE")?><?
				if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-control-required">*</span><?endif?></label>
			<textarea class="form-control" id="mainFeedback_message" name="MESSAGE" rows="5"><?=$arResult["MESSAGE"]?></textarea>
		</div>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="form-row">
			<div class="form-group col-auto">
				<label><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-control-required">*</span></label><br/>
				<input type="text" if="mainFeedback_captcha" class="form-control" name="captcha_word" size="30" maxlength="50" value=""/><br/>
			</div>
			<div class="form-group col">
				<label for="mainFeedback_captcha"><?=GetMessage("MFT_CAPTCHA")?></label> <div style="clear:both"></div>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="38" alt="CAPTCHA">
			</div>
		</div>
		<?endif;?>

		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="submit" name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary">
	</form>
</div>
*/?>

<!--//-->

<? if(!empty($arResult["ERROR_MESSAGE"])) {
    foreach($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '') { ?>
    <div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div>
<? } ?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="row">

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-wrap__control">
                <label class="form-wrap__label">Ваше имя*</label>
                <input
                    class="form-wrap__input"
                    id="mainFeedback_name"
                    type="text"
                    name="user_name"
                    value="<?=$arResult["AUTHOR_NAME"]?>"
                    <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>required<?endif?>
                />
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-wrap__control">
                <label class="form-wrap__label">Компания</label>
                <input class="form-wrap__input" type="text" name=""/>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-wrap__control">
                <label class="form-wrap__label">Email*</label>
                <input
                    class="form-wrap__input"
                    id="mainFeedback_email"
                    type="email"
                    name="user_email"
                    value="<?=$arResult["AUTHOR_EMAIL"]?>"
                    <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
                />
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-wrap__control">
                <label class="form-wrap__label">Телефон*</label>
                <input class="form-wrap__input phone" placeholder="+7 (___) ___-__-__" type="tel" name=""/>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-wrap__control">
                <label class="form-wrap__label">Сообщение</label>
                <textarea
                    class="form-wrap__input"
                    id="mainFeedback_message"
                    name="MESSAGE"
                ><?=$arResult["MESSAGE"]?></textarea>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-wrap__control">
                <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                <input class="form-wrap__submit more-link" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
                <!--<button class="form-wrap__submit more-link" type="submit" name="submit">
                    Отправить<br>сообщение
                </button>-->
            </div>
        </div>

    </div>
</form>