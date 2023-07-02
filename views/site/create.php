<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Yii Crud Application';

?>
<div class="site-index">
    <h1>Create Post</h1>
    <div class="body-content">
        <?php $form = ActiveForm::begin() ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'title') ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'description')->textarea(['row' => '6']); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?php $items = ['ecommerce' => 'ecommerce', 'sales' => 'sales', 'LMS' => 'LMS'] ?>
                    <?= $form->field($post, 'category')->dropDownList($items, ['prompt' => 'Select']); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    
                        <div class="col-lg-3">
                            <?= Html::submitButton('Create Post', ['class' => 'btn btn-primary']); ?>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?php echo yii::$app->homeUrl; ?>" class="btn btn-primary">Go Back</a>
                        </div>
                   
                </div>
            </div>

        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>