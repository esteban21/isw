<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            
            <div class="pull-left info">
                <p></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
             
            </div>
        </form>     -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                   ['label' => 'Menu ', 'options' => ['class' => 'header']],
                    ['label' => 'Lista Electivos', 'icon' => 'fa fa-circle', 'url' => ['asignatura/ver']],
                   
                    
                    [
                        'label' => 'Gestionar Electivo',
                        'icon' => 'fa fa-circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Agregar Electivo', 'icon' => 'fa fa-circle-o', 'url' => ['asignatura/create'],],
                            ['label' => 'Editar Electivo', 'icon' => 'fa fa-circle-o', 'url' => ['asignatura/gestion'],],
                            ['label' => 'Eliminar Electivo', 'icon' => 'fa fa-circle-o', 'url' => ['asignatura/gestion'],],
                        ],
                    ],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
