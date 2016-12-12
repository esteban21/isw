<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">

        <!--
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
-->
        <!-- search form -->
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
                    //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                                        ['label' => 'registarse', 'url' => ['site/register'], 'visible' => Yii::$app->user->isGuest],

                    ['label' => 'recuperar contraseña', 'url' => ['site/recoverpass'], 'visible' => Yii::$app->user->isGuest],

                      
                        ['label' => 'Lista de Electivos', 'url' => ['/asignatura/index'],'visible' => !(Yii::$app->user->isGuest)],

                        //['label' => 'alumno', 'url' => ['/alumno/index'],'visible' => !(Yii::$app->user->isGuest)],

                       
                           ['label' => 'Eliminar Inscripcion', 'url' => ['/inscribe/index'],'visible' => !(Yii::$app->user->isGuest)],



//['label' => 'departamento', 'url' => ['/departamento/index'],'visible' => !(Yii::$app->user->isGuest)],
//['label' => 'dicta', 'url' => ['/dicta/index'],'visible' => !(Yii::$app->user->isGuest)],
//['label' => 'facultad', 'url' => ['/facultad/index'],'visible' => !(Yii::$app->user->isGuest)],
['label' => 'inscribir', 'url' => ['/inscribe/index'],'visible' => !(Yii::$app->user->isGuest)],
//['label' => 'profesor', 'url' => ['/profesor/index'],'visible' => !(Yii::$app->user->isGuest)],
                       // ['label' => 'users', 'url' => ['/users/index'],'visible' => !(Yii::$app->user->isGuest)],
                       // ['label' => 'register', 'url' => ['/site/register']],

                        //['label' => 'login', 'url' => ['/site/login']],
                         //    ['label' => 'recoverpass', 'url' => ['/site/recoverpass']],
             
                ],










            ]
        ) ?>

    </section>

</aside>
