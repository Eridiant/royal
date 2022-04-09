<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Главные настройки', 'icon' => 'home', 'url' => ['/site/index']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Квартиры',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Этажи', 'icon' => 'building', 'url' => ['/floor/index'],],
                            // ['label' => 'Этажи', 'icon' => 'building', 'url' => ['/floor/multy', 'block' => 'a'],],
                            ['label' => 'Квартиры', 'icon' => 'wpforms', 'url' => ['/flat/index'],],
                            ['label' => 'Квартиры', 'icon' => 'wpforms', 'url' => ['/flat/status'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>