<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\themes\adminLTE\components\ThemeNav;

?>
<?php $this->beginContent('@app/themes/adminLTE/layouts/main.php'); ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

     <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/user_accounts.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>
                      <?php
                          $info[] = Yii::t('app','Hello');

                          if(isset(Yii::$app->user->identity->username))
                              $info[] = ucfirst(\Yii::$app->user->identity->username);

                          echo implode(', ', $info);
                      ?>
                    </p>
                    <a><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <!-- treeview - treeview-menu -->    
            <ul class="sidebar-menu">
              <li class="header">NAVEGACION PRINCIPAL</li>

              <li class="treeview">
                  <a href="#">Modulo Carreras</a>
                  <ul class="treeview-menu">
                    <li><a href="/carrera/index">Carreras</a></li>                   
                    <li><a href="/nomina-profesores/index">Nomina de profesores</a></li>
                    <li><a href="/nomina-ingreso/index">Nomina de ingreso</a></li>
                    <li><a href="/titulado/index">Titulados</a></li>
                    <li><a href="/encuentro-titulado/index">Encuntro de titulados</a></li>
                    <li><a href="/cae/index">C.A.E</a></li>
                  </ul>
              </li>

              <li class="treeview">
                  <a href="#">Modulo Plan de estudio</a>
                  <ul class="treeview-menu">
                    <li><a href="/plan-estudio/index">Plan de estudio</a></li>
                    <li><a href="/asignatura/index">Asignatura</a></li>
                    <li><a href="/guia-didactica/index">Guia Didactica</a></li>
                    <li><a href="/programa/index">Programa</a></li>
                    <li><a href="/realizador/index">Realizador de programa</a></li>
                  </ul>
              </li>

              <li class="treeview">
                  <a href="#">Modulo Acreditacion</a>
                  <ul class="treeview-menu">
                    <li><a href="/comision/index">Comision</a></li>
                    <li><a href="/reunion-acreditacion/index">Reunion de acreditacion</a></li>
                    <li><a href="/nomina/index">Nomina de reunion</a></li>
                    <li><a href="/informe-autoevaluacion/index">Informe de autoevaluacion</a></li>
                    <li><a href="/evidencia-acreditacion/index">Evidencia de acreditacion</a></li>
                  </ul>
              </li>

              <li class="treeview">
                  <a href="#">Modulo Jefatura</a>
                  <ul class="treeview-menu">
                    <li><a href="/jefatura/index">Jefatura de carrera</a></li>
                    <li><a href="/profesional-apoyo/index">Profesionales de apoyo</a></li>
                    <li><a href="/hitos/index">Hitos de jefatura</a></li>
                  </ul>
              </li>

              <li class="treeview">
                  <a href="#">Modulo Reunion</a>
                  <ul class="treeview-menu">
                    <li><a href="/reunion/index">Reuniones de jefatura</a></li>
                    <li><a href="/citacion/index">Citacion a reunion</a></li>
                    <li><a href="/evidencia-reunion/index">Evidencias de reunion</a></li>
                  </ul>
              </li>

              <li class="treeview">
                  <a href="#">Grupos de carrera</a>
                  <ul class="treeview-menu">
                    <li><a href="/grupo-carrera/index">Grupos de carrera</a></li>
                    <li><a href="/actividad-grupo/index">Actividad de grupo</a></li>
                  </ul>
              </li>

            </ul>

            <!--
            <?php
                echo Menu::widget([
                  'encodeLabels'=>false,
                  'options' => [
                    'class' => 'sidebar-menu'
                  ],
                  'items' => [
                      ['label'=>Yii::t('app','MAIN NAVIGITION'), 'options'=>['class'=>'header']],

                      ['label' => ThemeNav::link('Dashboard', 'fa fa-dashboard'), 'url' => ['site/index']], //'visible'=>!Yii::$app->user->isGuest],
                      
                      ['label' => ThemeNav::link('Carreras'), 'url' => ['carrera/index'],
                        'items' => [
                          ['label' => 'Opcion1', 'icon' => '', 'url' => '#'],
                        ],
                      ],
                      
                      ['label' => ThemeNav::link('Plan de estudio', 'fa fa-database'), 'options'=>['class'=>'treeview'] ,'url' => ['plan-estudio/index'],
                        'items' => [
                          ['label' => ThemeNav::link('Perfil de egreso'),'url' => ['/perfil-egreso']],
                         
                          ['label' => ThemeNav::link('Asignatura'), 'url' => ['/asignatura'],
                            'items' => [
                              
                              ['label' => ThemeNav::link('Guia didactica'),'url' => ['/guia-didactica']],
                              
                              ['label' => ThemeNav::link('Programa'),'url' => ['/programa'],
                                'items' => [
                                  
                                  ['label' => ThemeNav::link('Realizador'),'url' => ['/realizador']],
                                ],
                              ],
                            ],
                          ],
                        ]
                      ],
                  ],
                ]);
            ?>-->

        </section>
  <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <section class="content-header">
        <h1> <?php //echo Html::encode($this->title); ?> </h1>
           <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $content; ?>
    </section><!-- /.content -->

</div><!-- /.right-side -->
<?php $this->endContent();