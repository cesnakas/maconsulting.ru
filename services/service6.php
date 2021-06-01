<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

    <div class="heading-page heading-page--service">
        <div class="container">
            <div class="heading-page__content">
                <a href="<?=SITE_DIR?>#servicesMain__anchor" class="back-service"><span class="back-service__label">Вернуться к списку услуг</span></a>
                <div class="service-pagination">
                    <div class="page-section-item__heading">
                        <span class="page-section-item__number">
                            <span class="page-section-item__number-current">06</span>
                            <span class="page-section-item__number-all">08</span>
                        </span>
                        <span class="page-section-item__name">Наши услуги</span>
                    </div>
                    <div class="service-pagination__btn">
                        <a href="<?=SITE_DIR?>service5/" class="service-pagination__btn-prev nav__link-anim"></a>
                        <a href="<?=SITE_DIR?>service7/" class="service-pagination__btn-next nav__link-anim"></a>
                    </div>
                </div>
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">Стратегия доступа<br>на рынок</h1>
            </div>
            <div class="heading-page__img-wrap _anim-items _anim-no-hide">
                <div class="heading-page__paralax">
                    <div class="heading-page__paralaxWrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/services/6.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax-anim _anim-items _anim-no-hide">
        <div class="anim-line-sm">
            <div class="anim-line-sm__gray"></div>
        </div>
    </div>

    <div class="service-heading-about">
        <div class="container">
            <div class="service-heading-about__items">
                <div class="service-heading-about__item">
                    <h2 class="service-heading-about__caption animUp _anim-items _anim-no-hide">Наша компания готова предложить вам Маркет Аксесс стратегии, которые будут удовлетворять вашим запросам. Мы разрабатываем тактический план действий на основе анализа  данных заболевания, социально-экономической среды, а также подходов в организации и финансировании медицинской помощи по конкретному профилю. </h2>
                </div>
                <div class="service-heading-about__item">
                    <div class="service-heading-about__content animUp _anim-items _anim-no-hide">
                        <p>Стратегия, разработанная нашей компанией, включает в себя подробное описание всех активностей и плана «В» в случае незапланированных изменений.</p>
                        <p>Наша команда также поможет и в реализации предложенной стратегии.</p>
                        <br><br>
                        <h3 class="subtitle subtitle--black">Маркет аксесс стратегия</h3>
                        <ul class="list-info">
                            <li>Доказательная база. Правильный анализ и способ подачи собранных данных станет веским инструментом для продвижения продукта и выстраивания аргументаций для ЛПРов.
                            </li>
                            <li>Мониторинг путей финансирования и поиск оптимальных мер по включению продукта в перечни, КР, СМП и другие программы в зависимости от задач компании.  </li>
                            <li>Актуализация проблемы и формирование потребности. Предпринимаются четкие и спланированные активности, направленные на поднятие информированности общественности и стейкхолдеров о существующей проблеме, путей решения и преимуществах данной технологии.</li>
                            <li>Закрепление результатов. Контроль исполнения рекомендаций, принятия управленческих решений и тд.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="serviceSpoilers">
        <div class="container">
            <a href="#" class="more-link animUp _anim-items _anim-no-hide">Связаться с нашим<br>специалистом</a>
            <div class="servicePageBot animUp _anim-items _anim-no-hide">
                <div class="servicePageBot__inner">
                    <div class="servicePageBot__item">
                        <a class="servicePageBot__link linkPageService" href="<?=SITE_DIR?>service5/">
                            <span class="linkPageService__content">
                                <span class="linkPageService__number">
                                    <span class="linkPageService__number-current">05</span>
                                    <span class="linkPageService__number-all">08</span>
                                </span>
                                <span class="linkPageService__text">
                                    <span class="linkPageService__name-category">Наши услуги</span>
                                    <span class="linkPageService__name-page">PR-технологии</span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="servicePageBot__item">
                        <a class="servicePageBot__link linkPageService" href="<?=SITE_DIR?>service7/">
                            <span class="linkPageService__content">
                                <span class="linkPageService__number">
                                    <span class="linkPageService__number-current">07</span>
                                    <span class="linkPageService__number-all">08</span>
                                </span>
                                <span class="linkPageService__text">
                                    <span class="linkPageService__name-category">Наши услуги</span>
                                    <span class="linkPageService__name-page">Мониторинг и аналитика</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/22.png" alt=""/>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>