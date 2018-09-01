<?php

/**
 * @var $directoryAsset
 */

?>

<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'home', 'url' => ['/']],
                    [
                        'label' => 'RBAC',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Role', 'icon' => 'file-code-o', 'url' => ['/role'],],
                            ['label' => 'Permission', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>
</aside>
