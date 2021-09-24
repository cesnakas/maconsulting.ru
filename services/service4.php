<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

    <div class="heading-page heading-page--service">
        <div class="container">
            <div class="heading-page__content">
                <a href="<?=SITE_DIR?>#servicesMain__anchor" class="back-service"><span class="back-service__label">Вернуться к списку услуг</span></a>
                <div class="service-pagination">
                    <div class="page-section-item__heading">
                        <span class="page-section-item__number">
                            <span class="page-section-item__number-current">04</span>
                            <span class="page-section-item__number-all">08</span>
                        </span>
                        <span class="page-section-item__name">Наши услуги</span>
                    </div>
                    <div class="service-pagination__btn">
                        <a href="<?=SITE_DIR?>service3/" class="service-pagination__btn-prev nav__link-anim"></a>
                        <a href="<?=SITE_DIR?>service5/" class="service-pagination__btn-next nav__link-anim"></a>
                    </div>
                </div>
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">Юридический<br>
                    консалтинг</h1>
            </div>
            <div class="heading-page__img-wrap _anim-items _anim-no-hide">
                <div class="heading-page__paralax">
                    <div class="heading-page__paralaxWrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/services/4.png" alt="img">
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
                    <h2 class="service-heading-about__caption animUp _anim-items _anim-no-hide">Опираясь на многолетний опыт, мы предлагаем
                        вам услуги в области юридического консультирования. Разработка, сопровождение и внесение новых законопроектов и нормативно-правовых актов, а также анализ существующей системы и предложения по ее изменению.</h2>
                </div>
                <div class="service-heading-about__item">
                    <div class="service-heading-about__content animUp _anim-items _anim-no-hide">
                        <ul class="list-info">
                            <li>Проведение анализа нормативно-правового
                                регулирования, составление отчета с перечислением
                                законов, НПА, приказов и других документов в
                                соответствии с запросами клиента.</li>
                            <li>Сравнение российского НПР с практикой зарубежных стран.</li>
                            <li>Выявление системных проблем и барьеров для
                                функционирования бизнеса клиента в
                                законодательстве.</li>
                            <li>Разработка предложений, рекомендаций и концепции
                                вносимых изменений.</li>
                            <li>Написание законопроектов или внесение изменений в
                                существующие.</li>
                            <li>Сопровождение и поддержка клиента на всех этапах
                                внедрения законопроекта, в том числе, используя GR\PR
                                технологии.</li>
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
                        <a class="servicePageBot__link linkPageService" href="<?=SITE_DIR?>service3/">
                            <span class="linkPageService__content">
                                <span class="linkPageService__number">
                                    <span class="linkPageService__number-current">03</span>
                                    <span class="linkPageService__number-all">08</span>
                                </span>
                                <span class="linkPageService__text">
                                    <span class="linkPageService__name-category">Наши услуги</span>
                                    <span class="linkPageService__name-page">Government Relations</span>
                                </span>
                            </span>
                        </a>
                    </div>
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
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/20.png" alt=""/>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>