<?php

use yii\helpers\Html;

$this->title = 'Home';

?>
<div class="site-index">
    <?php if (yii::$app->session->hasFlash('message')) : ?>
        <?php echo yii::$app->session->getFlash('message'); ?>
    <?php endif; ?>
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">YII CRUD APPLICATION!</h1>
    </div>
    <div class="row">
        <span>
            <?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary']) ?>
        </span>
    </div>

    <div class="body-content">

        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($posts) > 0) : ?>
                        <?php foreach ($posts as $post) : ?>
                            <tr>
                                <th scope="row"><?php echo $post->id; ?></th>
                                <td><?php echo $post->title; ?></td>
                                <td><?php echo $post->description; ?></td>
                                <td><?php echo $post->category; ?></td>
                                <td>
                                    <?= Html::a('Update', 'Update') ?>
                                    <?= Html::a('Update', 'Delete') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No Records</p>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>