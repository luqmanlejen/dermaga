<?php

use \backend\models\Menu;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= yii\helpers\Html::img('@web/img/user-icon.png', ['class' => 'img-circle']); ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->fullname ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $i = 0;
        $menuItems = array();
        $pages_record = Menu::find()->where(['type'=>'cms','parent_id'=>0,'display_status'=>1])->all();
        $i = 0;
        foreach ($pages_record as $data) {

            $path = \Yii::$app->request->BaseUrl . "/index.php?r=" . $data->url;
            $menuItems[$i] = array('label' => $data->title_my, 'url' => $path);

            //submenu
            $pages_sub_rec = Menu::findAll(['parent_id' => $data['id']]);
            foreach ($pages_sub_rec as $sub_value) {
                $menuItems[$i]['items'][] = array('label' => $sub_value->title_my, 'url' => \Yii::$app->request->BaseUrl.'/'.$sub_value->url);
            }
            //submenu
            $i++;
        }
        ?>
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => $menuItems,
                ]
        )
        ?>

    </section>

</aside>
