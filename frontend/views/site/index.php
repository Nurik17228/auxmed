<?php
/* @var $this yii\web\View */
/* @var $check_news frontend\controllers\SiteController */
/* @var $courseList common\models\Course[] */
/* @var $newsList common\models\News[] */
/* @var $partners common\models\Partners */

use yii\helpers\Url;
$settings = \common\models\Settings::find()->one();
$this->title = $settings->header;

?>
<main class="landing">
    <section class="welcome-section">
        <div class="main-container">
            <div class="welcome">
                <div class="w-sight">
                    <div>
                        <h1 class="w-sight__title">Aux Med</h1>
                        <p class="w-sight__text"><?= $settings->main_banner?></p>
                    </div>
                        <?if (Yii::$app->user->identity) :?>
                            <p class="button w-sight__button" style="max-width: 300px">
                            Войти в личный кабинет
                            <a href="/cabinet"></a>
                            </p>
                        <?else:?>
                            <p class="button w-sight__button welcome-btn">
                            Регистрация
                            <a href="/auth/signup"></a>
                            </p>
                        <?endif;?>
                </div>
                <img class="w-img" src="/img/landing/welcome.png" alt="" class="welcome-img">
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="main-container">
            <div class="row">
                <div class="main-title d-flex d-lg-none justify-content-center" style="width: 100%;">
                    <p>О нас</p>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-end">
                    <img class="about-img" src="/img/landing/about.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="main-title d-none d-lg-block">
                        <p class="text-left">О нас</p>
                    </div>
                    <div class="about-block">
                        <p class="main-subTitle">Компания Aux Medical Group</p>
                        <p class="my-3 about-text"><?=$settings->about_us?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?=$this->render('@app/views/site/side_course.php')?>


    <section class="advantages-section">
        <div class="main-container">
            <div class="advantages">
                <div class="main-title">
                    <p>Преимущества</p>
                </div>
                <div class="title-text">
                    <p><?=$settings->benefits?></p>
                </div>
                <div class="a-content main-content">
                    <div class="card a-card">
                        <div>
                            <img class="mb-3" src="/img/icon/star-icon.svg" alt="">
                        </div>
                        <p class="a-card-text"><?= $settings->benefits_1?></p>
                    </div>
                    <div class="card a-card">
                        <div>
                            <img class="mb-3" src="/img/icon/a-heart-icon.svg" alt="">
                        </div>
                        <p class="a-card-text"><?= $settings->benefits_2?></p>
                    </div>
                    <div class="card a-card">
                        <div>
                            <img class="mb-4" src="/img/icon/info-icon.svg" alt="">
                        </div>
                        <p class="a-card-text"><?= $settings->benefits_3?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-section">
        <div class="container">
            <div class="clients">
                <div class="main-title">
                    <p>Кому может пригодиться</p>
                </div>
                <div class="cli-content main-content">
                    <!---<div class="cli-item">
                        <img src="/img/landing/client-1.png" alt="" class="cli-img">
                        <div class="explanation">
                            <p class="cli-item__title">Новые родители</p>
                            <div class="cli-item__text">
                                <p>Молодые родители с ребенком в течении первого года жизни </p>
                                <p>Беременные женщины</p>
                                <p>Женщины планирующие беременность</p>
                            </div>
                        </div>
                    </div>
                    <div class="cli-item cli-item-revers">
                        <div class="explanation">
                            <p class="cli-item__title">Родители особенных детей</p>
                            <div class="cli-item__text">
                                <p>Родители с детьми ограниченных возможностей</p>
                                <p>с врожденными потологиями в виде врожденной глухоты, слепоты</p>
                            </div>
                        </div>
                        <img src="/img/landing/client-2.png" alt="" class="cli-img">
                    </div>
                    <div class="cli-item">
                        <img src="/img/landing/client-3.png" alt="" class="cli-img">
                        <div class="explanation">
                            <p class="cli-item__title">Родители подростков</p>
                            <div class="cli-item__text">
                                <p>Родители с детьми подростками</p>
                                <p>Дети и подростки с хроническими заболеваниями</p>
                            </div>
                        </div>
                    </div>------>
                    <div class="card-border mb-3 toggle">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="card-title f-16"><?= $settings->for_who_name_1?></p>
                            <img class="toggle-img" src="/img/icon/polus.svg" alt="">
                        </div>
                        <p class="txt-view cli-item__text toggle-text"><?=$settings->for_who_text_1?></p>
                    </div>
                    <div class="card-border mb-3 toggle">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="card-title f-16"><?=$settings->for_who_name_2?></p>
                            <img class="toggle-img" src="/img/icon/polus.svg" alt="">
                        </div>
                        <p class="txt-view cli-item__text toggle-text"><?=$settings->for_who_text_2?></p>
                    </div>

                    <div class="card-border mb-3 toggle">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="card-title f-16"><?=$settings->for_who_name_3?></p>
                            <img class="toggle-img" src="/img/icon/polus.svg" alt="">
                        </div>
                        <p class="txt-view cli-item__text toggle-text"><?=$settings->for_who_text_3?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-section">
        <div class="container">
            <div class="work">
                <div class="main-title">
                    <p>Как это работает</p>
                </div>
                <div class="main-content wor-content">
                    <div class="wor-l-block">
                        <div class="card wor-card toggle">
                            <div class="wor-card__header">
                                <div class="wor-card__img">
                                    <img src="/img/icon/pen-icon.svg" alt="">
                                </div>
                                <p class="wor-card__title">Courses</p>
                                <div class="wor-circle">
                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">
                                </div>
                            </div>
                            <p class="wor-card__text toggle-text"><?=$settings->how_it_1?></p>
                        </div>
                        <div class="card wor-card toggle">
                            <div class="wor-card__header">
                                <div class="wor-card__img">
                                    <img src="/img/icon/headphones-icon.svg" alt="">
                                </div>
                                <p class="wor-card__title">AuxPodcast</p>
                                <div class="wor-circle">
                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">
                                </div>
                            </div>
                            <p class="wor-card__text toggle-text"><?=$settings->how_it_2?></p>
                        </div>
                        <div class="card wor-card toggle">
                            <div class="wor-card__header">
                                <div class="wor-card__img">
                                    <img src="/img/icon/basket-icon.svg" alt="">
                                </div>
                                <p class="wor-card__title">AuxMart</p>
                                <div class="wor-circle">
                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">
                                </div>
                            </div>
                            <p class="wor-card__text toggle-text"><?=$settings->how_it_3?></p>
                        </div>
                    </div>
                    <img class="d-none d-lg-block" src="/img/landing/w-phone.png" alt="">
                    <div>
                        <div class="card wor-card toggle">
                            <div class="wor-card__header">
                                <div class="wor-card__img">
                                    <img src="/img/icon/w-phone-icon.svg" alt="">
                                </div>
                                <p class="wor-card__title">AuxCall</p>
                                <div class="wor-circle">
                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">
                                </div>
                            </div>
                            <p class="wor-card__text toggle-text"><?=$settings->how_it_4?></p>
                        </div>
                        <div class="card wor-card toggle">
                            <div class="wor-card__header">
                                <div class="wor-card__img">
                                    <img src="/img/icon/search-icon.svg" alt="">
                                </div>
                                <p class="wor-card__title">AuxAdvice</p>
                                <div class="wor-circle">
                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">
                                </div>
                            </div>
                            <p class="wor-card__text toggle-text"><?=$settings->how_it_5?> </p>
                        </div>
                        <div class="card wor-card toggle">
                            <div class="wor-card__header">
                                <div class="wor-card__img">
                                    <img src="/img/icon/globe-icon.svg" alt="">
                                </div>
                                <p class="wor-card__title">AuxNews</p>
                                <div class="wor-circle">
                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">
                                </div>
                            </div>
                            <p class="wor-card__text toggle-text"><?=$settings->how_it_6?></p>
                        </div>
<!--                        <div class="card wor-card toggle">-->
<!--                            <div class="wor-card__header">-->
<!--                                <div class="wor-card__img">-->
<!--                                    <img src="/img/icon/heart-icon.svg" alt="">-->
<!--                                </div>-->
<!--                                <p class="wor-card__title">AuxLike</p>-->
<!--                                <div class="wor-circle">-->
<!--                                    <img class="toggle-img" src="/img/icon/wor-plus.svg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <p class="wor-card__text toggle-text">Каталог врачей и организации в медицинской сфере</p>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?if($check_news === 0):?>
    <?=$this->render('@app/views/site/side_news.php')?>
    <?endif;?>
    <section class="location-section">
        <div class="main-container">
            <div class="main-title">
                <p>Мы во всем Казахстане</p>
            </div>
            <img class="location-img" src="/img/landing/map.png" alt="">
        </div>
    </section>

    <section class="reviews-section">
        <div class="main-container">
            <div class="reviews">
                <div class="main-title">
                    <p>Отзывы</p>
                </div>
                <div class="reviews-content main-content">
                    <div class="card r-card">
                        <div class="r-card__header">
                            <div>
                                <p class="r-header__title">Ажимурат Санжар</p>
                                <p class="r-header__text">25 лет  </p>
                            </div>
                            <p class="r-header__info">
                                <img src="/img/icon/r-star-icon.svg" alt="">
                                5.0
                            </p>
                        </div>
                        <div class="r-card-body">
                            <p class="r-body__title"></p>
                            <p class="r-body__text">Знания в этой сфере для мам это лучшая инвестиция в ребёнка на данном промежутке жизни ,ведь здоровое детство младенца залог здоровья на всем промежутке жизни</p>
                        </div>
                    </div>
                    <div class="card r-card d-none d-sm-block">
                        <div class="r-card__header">
                            <div>
                                <p class="r-header__title">Мадина Молдабекова </p>
                                <p class="r-header__text">20 лет  </p>
                            </div>
                            <p class="r-header__info">
                                <img src="/img/icon/r-star-icon.svg" alt="">
                                5.0
                            </p>
                        </div>
                        <div class="r-card-body">
                            <p class="r-body__title"></p>
                            <p class="r-body__text">Спасибо вам большое 🔥🔥🔥 По вашим советам моему ребенку стало лучше.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-section" style="margin-bottom: 20vh;">
        <div class="main-container">
            <div class="title-text part-title">
                <p>Наши партнеры </p>
            </div>
            <div class="partners-block part-slick">
                <?foreach ($partners as $partner):?>
                <div class="partners-img">
                    <a href="<?=$partner->alias?>"><img src="<?=$partner->image?>" alt=""></a>
                </div>
                <?endforeach;?>
            </div>
            <p class="button btn-course">
                Все партнеры
                <a href="/site/partners"></a>
            </p>
        </div>
</main>
