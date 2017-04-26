<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vesti */

$this->title = 'Create Vesti';
$this->params['breadcrumbs'][] = ['label' => 'Vestis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vesti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
