<?php
use common\models\User;

$user = Yii::$app->user->identity;
$settings = \common\models\Settings::find()->one();
?>

<div class="loader"></div>
<header>
    <div class="header">
        <div class="logo">
            <a href="/"><img src="/img/logo.png" alt=""></a>
        </div>
        <nav class="header-nav">
            <li class="d-flex align-items-center justify-content-between d-lg-none mb-5 m-lg-0">
                <div class="logo">
                    <a href="/"><img src="/img/sadibar-logo.svg" alt=""></a>
                </div>
                <p class="burgerClose">
                    <img src="/img/bugergClose.svg" alt="">
                </p>
            </li>
            <?foreach (Yii::$app->params['menuItems'] as $item):?>
                <li class="header-item active"><a href="/<?=$item['url']?>"><?=$item['name'];?></a></li>
            <?endforeach;?>
        </nav>
        <div class="log">
            <div class="language d-none">
                <p class="language-name">EN</p>
            </div>
<!--            <div class="phone mr-2">-->
<!--                <a href="tel:--><?//=str_replace(' ', '', $settings->getMainPhone());?><!--" rel="nofollow">-->
<!--                    <div class="circle-st header-circle">-->
<!--                        <img src="/img/icon/phone-icon.svg" alt="">-->
<!--                    </div>-->
<!--                    <p class="phone-link d-none d-lg-block">--><?//=$settings->getMainPhone();?><!--</p>-->
<!--                </a>-->
<!--            </div>-->
                <?php if (Yii::$app->user->isGuest) : ?>
                    <p class="button btn-header d-none d-xl-block">
                        Войти
                        <a href="/auth/login"></a>
                    </p>
                <?php else : ?>
                    <div class="header-user d-flex align-items-center">
                        <div class="circle-st header-circle ">
                            <span class="user-avatar"><?= $user ? $user->getShortName():''?></span>
                        </div>
                        <span class="user-fio d-none d-lg-block"><?= $user ? $user->getShortFio():''?></span>
                        <div class="header-user__select">
                            <a class="header-select__item" href="/profile/index">Личный кабинет</a>
                            <a class="header-select__item" href="/auth/logout" data-method="post">Выйти</a>
                        </div>
                    </div>
                <?php endif; ?>
            <div class="burger d-flex d-lg-none">
                <img src="/img/header-burger.svg" alt="">
            </div>
        </div>

    </div>
</header>