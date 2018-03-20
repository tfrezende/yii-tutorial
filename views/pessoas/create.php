<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pessoas2 */

$this->title = 'Create Pessoas2';
$this->params['breadcrumbs'][] = ['label' => 'Pessoas2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
