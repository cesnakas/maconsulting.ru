<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

    <div class="heading-page">
        <div class="container">
            <div class="heading-page__content">
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">
                    <? // Тренинги и образовательные программы в области Market Access
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/training__title.php"
                        )
                    );?>
                </h1>
                <nav class="nav-page animUp _anim-items _anim-no-hide">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.line",
                        "projects__nav",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "300",
                            "CACHE_TYPE" => "A",
                            "DETAIL_URL" => "#page#ELEMENT_ID#",
                            "FIELD_CODE" => array("ID","CODE",""),
                            "IBLOCKS" => array("7"),
                            "IBLOCK_TYPE" => "training",
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
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/banner-page/2.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax-anim _anim-items _anim-no-hide">
        <div class="paralax paralax--sm paralax--r_green">
            <div class="paralaxImgWrap">
                <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/7.png" alt=""/>
            </div>
            <div class="paralaxLineBotWh"></div>
            <div class="paralaxLineRightWh"></div>
            <div class="paralaxLinePattern"></div>
            <div class="paralaxLineLeft paralaxLineLeft--green"></div>
            <div class="paralaxLineGreen-sm"></div>
        </div>
    </div>

    <div class="page-section-item">
        <div class="anchor" id="page1"></div>
        <div class="page-section-item__content animUp _anim-items _anim-no-hide">
            <div class="container">
                <div class="page-section-item__heading">
                    <span class="page-section-item__number">
                        <span class="page-section-item__number-current">01</span>
                        <span class="page-section-item__number-all">02</span>
                    </span>
                    <span class="page-section-item__name">Тренинги <br>Market Access</span>
                </div>
                <div class="page-section-item__body">
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h2 class="page-section-item__title">Образовательные программы и тренинги <span>для сотрудников фармацевтических компаний</span></h2>
                            </div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h3 class="page-section-item__caption">Разработка авторских образовательных
                                    программ и организация корпоративных
                                    тренингов по продвижению медицинских
                                    технологий на рынок государственного
                                    финансирования. </h3>
                                <div class="page-section-item__text">
                                    <p>Тренинги разрабатываются с учетом Ваших потребностей и с
                                        акцентом на терапевтические области и медицинские технологии
                                        именно Вашей компании.</p>
                                    <p>Участие в тренинге позволит получить актуальные знания о
                                        принципах организации и финансирования медицинской помощи в
                                        РФ, оценки технологий здравоохранения, фармакоэкономики и
                                        ценообразования, а также эксклюзивные навыки использования
                                        современных технологий и методов Market Access, GR и Public Affairs.</p>
                                    <p>Мы предлагаем модульную систему наполнения тренингов, а также
                                        поэтапное обучение сотрудников, исходя из приоритетов Вашей
                                        компании и диагностики компетенций.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder">
                                <h3 class="subtitle subtitle--black">Модули тренингов</h3>
                                <ul class="list-info">
                                    <li>Нормативно-правовая база и тренды здравоохранения</li>
                                    <li>Market Access: разработка и реализация стратегии</li>
                                    <li>Внешнее взаимодействие: создание благоприятной среды, лоббирование, GR, PR</li>
                                    <li>Ценообразование и стратегия вывода медицинских технологий на рынок</li>
                                    <li>Фармакоэкономика и доказательная база</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder">
                                <h3 class="subtitle subtitle--black">Лекторский состав</h3>
                                <ul class="list-info">
                                    <li>Ведущие эксперты отрасли и Key Opinion Leaders</li>
                                    <li>Главные специалисты и  эксперты, имеющие опыт работы в органах управления здравоохранением</li>
                                    <li>Представители научно-экспертного сообщества</li>
                                    <li>Бизнес-консультанты и бизнес-тренеры</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder"></div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder">
                                <h3 class="subtitle subtitle--black">Формат мероприятия (онлайн или очный)</h3>
                                <ul class="list-info">
                                    <li>Лекции экспертов и самообучение на основе предоставляемых материалов</li>
                                    <li>Тьюторство, консультирование и ответы на вопросы</li>
                                    <li>Кейсы и групповые дискуссии</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder">
                                <a href="<?=SITE_DIR?>contacts/" class="more-link">Связаться с нашим<br>специалистом</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="paralax paralax--xs">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/8.png" alt=""/>
        </div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineDark--bot"></div>
    </div>

    <div class="page-section-item  page-section-item--gray">
        <div class="anchor" id="page2"></div>
        <div class="page-section-item__content animUp _anim-items _anim-no-hide">
            <div class="container">
                <div class="page-section-item__heading">
                    <span class="page-section-item__number">
                        <span class="page-section-item__number-current">02</span>
                        <span class="page-section-item__number-all">02</span>
                    </span>
                    <span class="page-section-item__name">Тренинги <br>Market Access</span>
                </div>
                <div class="page-section-item__body">
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h2 class="page-section-item__title">Семинары для организаторов здравоохранения
                                    и врачей</h2>
                            </div>
                        </div>
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder border-item-top">
                                <h3 class="page-section-item__caption">Мы разрабатываем образовательные программы и организовываем обучающие семинары для представителей управленческого звена здравоохранения и медицинского сообщества.</h3>
                                <h3 class="subtitle">Направления обучения</h3>
                                <ul class="list-info">
                                    <li>Система организации и финансирования медицинской помощи</li>
                                    <li>Система контроля качества медицинской помощи</li>
                                    <li>Оценка медицинских технологий.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-section-item__row">
                        <div class="page-section-item__col">
                            <div class="page-section-item__holder">
                                <a href="<?=SITE_DIR?>contacts/" class="more-link">Связаться с нашим<br>специалистом</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "training__work",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array("ID", ""),
            "FILE_404" => "",
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "IBLOCK_ID" => "7",
            "IBLOCK_TYPE" => "training",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK" => "",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_PARAMS_NAME" => "arrPager",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array("TRAINING_TITLE", "TRAINING_SUBTITLE", "TRAINING_TEXT", "TRAINING_LIST_LEFT", "TRAINING_LIST_RIGHT", "TRAINING_LIST_ONLY_RIGHT", "TRAINING_BUTTON"),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ID",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    );?>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/6.png" alt=""/>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>