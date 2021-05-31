<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
// fancybox
$asset->addCss('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
$asset->addJs('https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
?>

    <div class="heading-page">
        <div class="container">
            <div class="heading-page__content">
                <h1 class="heading-page__title animUp _anim-items _anim-no-hide">Market Access Consulting – комплексные решения и проекты в области здравоохранения</h1>
                <nav class="nav-page animUp _anim-items _anim-no-hide">
                    <ul class="nav-page__ul">
                        <li class="nav-page__li">
                            <a href="#page1" class="nav-page__link link-anchor">
                                <span class="nav-page__count">01</span>
                                <span class="nav-page__name">О компании</span>
                            </a>
                        </li>
                        <li class="nav-page__li">
                            <a href="#page2" class="nav-page__link link-anchor">
                                <span class="nav-page__count">02</span>
                                <span class="nav-page__name">Наши принципы</span>
                            </a>
                        </li>
                        <li class="nav-page__li">
                            <a href="#page3" class="nav-page__link link-anchor">
                                <span class="nav-page__count">03</span>
                                <span class="nav-page__name">Направления<br> работы в 2021</span>
                            </a>
                        </li>
                        <li class="nav-page__li">
                            <a href="#page4" class="nav-page__link link-anchor">
                                <span class="nav-page__count">04</span>
                                <span class="nav-page__name">Галерея</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="heading-page__img-wrap _anim-items _anim-no-hide">
                <div class="heading-page__paralax">
                    <div class="heading-page__paralaxWrap">
                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/banner-page/1.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax-anim _anim-items _anim-no-hide">
        <div class="anim-line">
            <div class="paralaxLineLeft paralaxLineLeft--green"></div>
            <div class="paralaxLineDark--right"></div>
            <div class="paralaxLineGreen"></div>
        </div>
    </div>

    <div class="aboutPage">
        <div class="anchor" id="page1"></div>
        <div class="container">
            <div class="aboutPage__item animUp _anim-items _anim-no-hide">
                <h2 class="subtitle">О компании</h2>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3 class="aboutPage__caption">Founded in 1991, Market Access Consulting is an industry-leading manufacturer of advanced optical fiber and copper structured cabling systems. We are proud of our 30 year history of continuous growth driven by our commitment to real customer satisfaction. From humble beginnings, we now serve customers throughout the Americas, and their projects around the world.</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="aboutPage__text">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <p>Другими словами, нежели на главной странице, говорим о том, какие услуги мы предоставляем + тут же о проведении конференций….</p>
                                    <p>Мы предоставляем услуги полного цикла, начиная от подготовки аналитических отчетов и сбора статистических данных по различным терапевтическим областям до разработки долгосрочных, эффективных стратегий.</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <p>Другими словами, нежели на главной странице, говорим о том, что мы предлагаем в плане образовательных программ……</p>
                                    <p>Мы эксперты по разработке авторских образовательных программ и организации корпоративных тренингов, посвященных продвижению медицинских технологий на рынок государственного финансирования.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/13.png" alt=""/>
        </div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineLeft"></div>
        <div class="paralaxLineDark--top"></div>
        <div class="paralaxLineDark--top_r_sm"></div>
        <div class="paralaxLineBotWh--r"></div>
    </div>

    <div class="our-principles">
        <div class="anchor" id="page2"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">Наши принципы</h2>
                </div>
                <div class="col-12">
                    <div class="spoilersWrap animUp _anim-items _anim-no-hide">
                        <div class="spoilersItem">
                            <button class="spoilersItem__btn active">Профессионализм<span class="spoilersItem__icon"></span></button>
                            <div class="spoilersItem__content" style="display: block;">
                                <div class="spoilersItem__flex">
                                    <div class="spoilersItem__text">
                                        <p>Глубокое знание рынка, профессиональное ориентирование в системе нормативно-правового регулирования,  непрерывный мониторинг изменений и умение прогнозировать тенденции в сфере здравоохранения помогают нам оказывать высококвалифицированные услуги, используя современные и актуальные подходы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spoilersItem">
                            <button class="spoilersItem__btn">Клиентоориентированность<span class="spoilersItem__icon"></span></button>
                            <div class="spoilersItem__content">
                                <div class="spoilersItem__flex">
                                    <div class="spoilersItem__text">
                                        <p>Глубокое знание рынка, профессиональное ориентирование в системе нормативно-правового регулирования,  непрерывный мониторинг изменений и умение прогнозировать тенденции в сфере здравоохранения помогают нам оказывать высококвалифицированные услуги, используя современные и актуальные подходы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spoilersItem">
                            <button class="spoilersItem__btn">Инновационность<span class="spoilersItem__icon"></span></button>
                            <div class="spoilersItem__content">
                                <div class="spoilersItem__flex">
                                    <div class="spoilersItem__text">
                                        <p>Глубокое знание рынка, профессиональное ориентирование в системе нормативно-правового регулирования,  непрерывный мониторинг изменений и умение прогнозировать тенденции в сфере здравоохранения помогают нам оказывать высококвалифицированные услуги, используя современные и актуальные подходы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spoilersItem">
                            <button class="spoilersItem__btn">Юридические и этические нормы<span class="spoilersItem__icon"></span></button>
                            <div class="spoilersItem__content">
                                <div class="spoilersItem__flex">
                                    <div class="spoilersItem__text">
                                        <p>Глубокое знание рынка, профессиональное ориентирование в системе нормативно-правового регулирования,  непрерывный мониторинг изменений и умение прогнозировать тенденции в сфере здравоохранения помогают нам оказывать высококвалифицированные услуги, используя современные и актуальные подходы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/14.png" alt=""/>
        </div>
        <div class="paralaxLineRight paralaxLineRight--top"></div>
        <div class="paralaxLineDark--right"></div>
        <div class="paralaxLinTopWh"></div>
    </div>

    <div class="direction_of_work">
        <div class="anchor" id="page3"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">Направления работы в 2021 году</h2>
                </div>
                <div class="col-12">
                    <h3 class="subtitle animUp _anim-items _anim-no-hide">Тренинги и образовательные программы</h3>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="direction_of_work__caption animUp _anim-items _anim-no-hide">Текст про то, что мы выбрали наиболее актуальные для российского рынка вопросы, что мы следим за тенденциями и корректируем повестку……</div>
                    <a href="#" class="d-none d-md-block more-link animUp _anim-items _anim-no-hide">Примеры наших<br>реализованных проектов</a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="direction_of_work__content animUp _anim-items _anim-no-hide">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">01</div>
                                    <div class="direction_of_work__name">Генно-клеточная терапия и молекулярно-генетическая диагностика</div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">02</div>
                                    <div class="direction_of_work__name">Применение «офф-лейбл» лекарственных препаратов в клинической практике</div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">03</div>
                                    <div class="direction_of_work__name">Инновационные модели лекарственного обеспечения. Инновационные контракты</div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="direction_of_work__item">
                                    <div class="direction_of_work__count">04</div>
                                    <div class="direction_of_work__name">Повышение доступности оказания медицинской помощи для пациентов с редкими (орфанными) заболеваниями, ССЗ, онкологическими заболеваниями, онко гематологическими заболеваниями</div>
                                </div>
                            </div>
                            <div class="col-12 d-block d-md-none">
                                <a href="#" class="more-link animUp _anim-items _anim-no-hide">Примеры наших<br>реализованных проектов</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/15.png" alt=""/>
        </div>
        <div class="paralaxLineGreen"></div>
        <div class="paralaxLineLeft paralaxLineLeft--green"></div>
        <div class="paralaxLineLeft"></div>
        <div class="paralaxLineDark--top"></div>
        <div class="paralaxLineDark--top_r_sm"></div>
        <div class="paralaxLineBotWh--r"></div>
    </div>

    <div class="galleryWrap">
        <div class="anchor" id="page4"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="title animUp _anim-items _anim-no-hide">Галерея</h2>
                </div>
                <div class="col-12">
                    <div class="galleryItem animUp _anim-items _anim-no-hide">
                        <div class="row">
                            <div class="col-12">
                                <div class="galleryItem__number">01</div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="galleryContent">
                                    <div class="galleryContent__title">Тренинг по Мarket Аccess:<br>
                                        «Основные положения доступа на рынок новых ЛС. Нормативно-правовое регулирование»</div>
                                    <div class="galleryContent__text">
                                        <p>Какая-то информация о тренинге, его успешности, итд итп… 24 марта 2020 года мы провели тренинг для…..  Мы разрабатываем образовательные программы и организовываем обучающие семинары для представителей управленческого звена здравоохранения и медицинского сообщества.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="galleryContent__video-wrap">
                                    <a href="#" class="galleryContent__video">
                                        <img class="galleryContent__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/video-img1.png" alt=""/>
                                        <span class="galleryContent__play-btn"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="galleryItem animUp _anim-items _anim-no-hide">
                        <div class="row">
                            <div class="col-12">
                                <div class="galleryItem__number">02</div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="galleryContent">
                                    <div class="galleryContent__title">Тренинг для журналистов:<br>
                                        «Инновации в российском здравоохранении. Особенности освещения в СМИ»</div>
                                    <div class="galleryContent__text">
                                        <p>Какая-то информация о тренинге, его успешности, итд итп… 24 марта 2020 года мы провели тренинг для…..  Мы разрабатываем образовательные программы и организовываем обучающие семинары для представителей управленческого звена здравоохранения и медицинского сообщества.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="galleryContent__video-wrap">
                                    <a href="#" class="galleryContent__video">
                                        <img class="galleryContent__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/video-img2.png" alt=""/>
                                        <span class="galleryContent__play-btn"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container galleryCarousel galleryCarousel-js">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/1.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/1.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/2.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/2.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/3.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/3.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/4.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/4.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="slider-btn slider-btn-next"></div>
                            <div class="slider-btn slider-btn-prev"></div>
                        </div>
                    </div>
                    <div class="galleryItem animUp _anim-items _anim-no-hide">
                        <div class="row">
                            <div class="col-12">
                                <div class="galleryItem__number">03</div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="galleryContent">
                                    <div class="galleryContent__title">Тренинг для журналистов:<br>
                                        «Инновации в российском здравоохранении. Особенности освещения в СМИ»</div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="galleryContent galleryContent--right">
                                    <div class="galleryContent__text">
                                        <p>Какая-то информация о тренинге, его успешности, итд итп… 24 марта 2020 года мы провели тренинг для…..  Мы разрабатываем образовательные программы и организовываем обучающие семинары для представителей управленческого звена здравоохранения и медицинского сообщества.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container galleryCarousel galleryCarousel-js">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery2" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/5.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/5.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery2" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/6.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/6.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery2" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/7.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/7.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery2" href="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/8.png" class="galleryCarousel__slide">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/gallery/8.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="slider-btn slider-btn-next"></div>
                            <div class="slider-btn slider-btn-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="paralax">
        <div class="paralaxImgWrap">
            <img class="paralaxImg" src="<?=SITE_TEMPLATE_PATH?>/dist/img/bg/5.png" alt=""/>
        </div>
    </div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>