<?php
use app\models\User;

/* @var $this \yii\web\View */
/* @var $content string */
?>


       


<aside class="main-sidebar">



    <section class="sidebar">

        
        <div class="user-panel">
       

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                
              <span class="input-group-btn">
               
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(


            [
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                ['label' => 'Menu Principal', 'options' => ['class' => 'header']],
                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ['label' => 'registarse', 'url' => ['site/register'], 'visible' => Yii::$app->user->isGuest],
                ['label' => 'recuperar contraseña', 'url' => ['site/recoverpass'], 'visible' => Yii::$app->user->isGuest],
                ['label' => 'Lista de Electivos', 'url' => ['/asignatura/index'],'visible' => !(Yii::$app->user->isGuest)],

                ['label' => 'Gestionar Electivo', 'url' => '#','visible' => !(Yii::$app->user->isGuest),
                    'items' => [
                    ['label' => 'Agregar Electivo', 'icon' => 'fa fa-circle-o', 'url' => ['asignatura/create']],
                    ['label' => 'Editar Electivo', 'icon' => 'fa fa-circle-o', 'url' => ['asignatura/editar'],],
                    ['label' => 'Eliminar Electivo', 'icon' => 'fa fa-circle-o', 'url' => ['asignatura/eliminar'],],
                               ],
                ],

                        ['label' => 'alumno', 'url' => ['/alumno/index'],'visible' => !(Yii::$app->user->isGuest)],

                       
                ['label' => 'Gestion Carrera', 'url' => ['/carrera/index'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'departamento', 'url' => ['/departamento/index'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'dicta', 'url' => ['/dicta/index'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'facultad', 'url' => ['/facultad/index'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'Consulta de Inscripcion', 'url' => ['/inscribe/index'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'Inscribir', 'url' => ['/inscribe/create'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'Eliminar Inscripcion', 'url' => ['/inscribe/index'],'visible' => !(Yii::$app->user->isGuest)],
                ['label' => 'profesor', 'url' => ['/profesor/index'],'visible' => !(Yii::$app->user->isGuest)],
                // ['label' => 'users', 'url' => ['/users/index'],'visible' => !(Yii::$app->user->isGuest)],
                // ['label' => 'register', 'url' => ['/site/register']],
                //['label' => 'login', 'url' => ['/site/login']],
                //    ['label' => 'recoverpass', 'url' => ['/site/recoverpass']],
             
                ],
            ]
        ) ?>



       

    </section>

</aside>
