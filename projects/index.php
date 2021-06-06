<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проекты");
?>

    <div class="heading-page">
        <div class="container">
            <div class="heading-page__content">
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">Наши<br> проекты</h1>
                <div class="heading-page__text animUp _anim-items _anim-no-hide">
                    <?
                    // Несколько примеров успешно реализованных стратегий по совершенствованию оказания медицинской помощи больным.
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/projects__subtitle.php"
                        )
                    );?>
                </div>
                <nav class="nav-page animUp _anim-items _anim-no-hide">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.line",
                        "projects_nav",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "300",
                            "CACHE_TYPE" => "A",
                            "DETAIL_URL" => "#page#ELEMENT_ID#",
                            "FIELD_CODE" => array("ID","CODE",""),
                            "IBLOCKS" => array("6"),
                            "IBLOCK_TYPE" => "projects",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "ID",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC"
                        )
                    );?>
                </nav>
            </div>
            <div class="heading-page__img-wrap _anim-items _anim-no-hide">
                <div class="heading-page__paralax">
                    <div class="heading-page__paralaxWrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/banner-page/3.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax-anim _anim-items _anim-no-hide">
        <div class="paralax paralax--sm paralax--r_green">
            <div class="paralaxImgWrap">
                <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/9.png" alt=""/>
            </div>
            <div class="paralaxLineBotWh"></div>
            <div class="paralaxLineRightWh"></div>
            <div class="paralaxLinePattern"></div>
            <div class="paralaxLineLeft paralaxLineLeft--green"></div>
            <div class="paralaxLineGreen-sm"></div>
        </div>
    </div>

    <div class="page-section-item">
        <div class="anchor" id="page22"></div>
        <div class="page-section-item__content animUp _anim-items _anim-no-hide">
            <div class="container">
                <div class="page-section-item__heading">
                    <span class="page-section-item__number">
                        <span class="page-section-item__number-current">01</span>
                        <span class="page-section-item__number-all">03</span>
                    </span>
                    <span class="page-section-item__name">Примеры <br>реализованных <br>проектов</span>
                </div>
                <div class="page-section-item__body">
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h2 class="page-section-item__title">Проект по совершенствованию оказания медицинской помощи <span>больным с воспалительными заболеваниями кишечника</span></h2>
                            </div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h3 class="page-section-item__caption">За время работы с данной нозологией нам удалось добиться существенных результатов.</h3>
                                <ul class="list-info">
                                    <li>Увеличение тарифов ОМС на лечение ВЗК</li>
                                    <li>Внедрение отдельных видов КСГ в субъектах в рамках ОМС</li>
                                    <li>Внесение изменений в нормативную документацию (в том числе изменений в Порядок оказания медицинской помощи по профилям «гастроэнтерология» и «колопроктология» в части оказания медицинской помощи пациентам с ВЗК) </li>
                                    <li>Создание специализированных центров по лечению ВЗК в более чем 10 субъектах РФ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax paralax--xs">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/10.png" alt=""/>
        </div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineDark--bot"></div>
    </div>

    <div class="page-section-item page-section-item--gray">
        <div class="anchor" id="page23"></div>
        <div class="page-section-item__content animUp _anim-items _anim-no-hide">
            <div class="container">
                <div class="page-section-item__heading">
                    <span class="page-section-item__number">
                        <span class="page-section-item__number-current">02</span>
                        <span class="page-section-item__number-all">03</span>
                    </span>
                    <span class="page-section-item__name">Примеры <br>реализованных <br>проектов</span>
                </div>
                <div class="page-section-item__body">
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h2 class="page-section-item__title">Проект по совершенствованию оказания медицинской помощи <span>больным с сердечно-сосудистыми заболеваниями</span></h2>
                            </div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h3 class="page-section-item__caption">В ходе работы над проблемами с ССЗ наше агентство повлияло на принятие решения в пользу запуска региональных проектов по обеспечению лиц, перенесших острое нарушение мозгового кровообращения, инфаркт миокарда и другие, острые сердечно-сосудистые заболевания, лекарственными препаратами в амбулаторных условиях. Данные проекты делают возможным достижение целей, показателей и результатов федерального проекта «Борьба с сердечно-сосудистыми заболеваниями» Национального проекта «Здравоохранение».</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax paralax--sm_two">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/11.png" alt=""/>
        </div>
        <div class="paralaxLineBotWh"></div>
        <div class="paralaxLineRightWh"></div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineGreen"></div>
    </div>

    <div class="page-section-item">
        <div class="anchor" id="page24"></div>
        <div class="page-section-item__content animUp _anim-items _anim-no-hide">
            <div class="container">
                <div class="page-section-item__heading">
                    <span class="page-section-item__number">
                        <span class="page-section-item__number-current">03</span>
                        <span class="page-section-item__number-all">03</span>
                    </span>
                    <span class="page-section-item__name">Примеры <br>реализованных <br>проектов</span>
                </div>
                <div class="page-section-item__body">
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h2 class="page-section-item__title">Проект по совершенствованию оказания медицинской помощи <span>больным с орфанными заболеваниями</span></h2>
                            </div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h3 class="page-section-item__caption">В результате проведенных исследований, мероприятий и PR активностей наша компания стала участником проекта, который завершился решением о внесении изменений в Федеральный закон N 323-ФЗ от 21.11.2011 г.  «Об основах охраны здоровья граждан в Российской Федерации») в части включения дополнительных заболеваний (гемолитико-уремический синдром, пароксизмальная ночная гемоглобинурия, мукополисахаридоз I, II, VI типы), лечение которых является высокозатратным для субъектов Российской Федерации.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder">
                                <a href="<?=SITE_DIR?>contacts/" class="more-link">Свяжитесь с нами, чтобы обсудить<br>детали вашего проекта</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/12.png" alt=""/>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>