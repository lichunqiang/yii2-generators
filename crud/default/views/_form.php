<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-5 col-md-offset-3">
    <?= "<?php " ?>$form = ActiveForm::begin(); ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(
            $model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>,
            [
                'class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-primary btn-lg btn-block',
                'data-loading-text' => <?= $generator->generateString('Saving') ?>
            ]
        ) ?>
    </div>
    <?= "<?php " ?>ActiveForm::end(); ?>
</div>
