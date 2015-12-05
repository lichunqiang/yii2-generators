<?php
/**
 * This is the template for generating an action view file.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\form\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use light\widgets\ActiveForm;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model <?= $generator->modelClass ?> */
/* @var $form ActiveForm */
<?= "?>\n" ?>
<div class="panel panel-default">
    <div class="panel-heading"><?= '<?= ' ?>$this->title<?= ' ?>' ?></div>
    <div class="panel-body">
        <?= '<?php ' ?>$form = ActiveForm::begin([
            'ajaxSubmitOptions' => [
                'success' => new JsExpression('function(response) {if (response.errcode == 0) {yii.swal(response.errmsg, "", "success")} else {yii.swal(response.errmsg, response.explain, "error")}}'),
                'beforeSubmit' => new JsExpression('function(arr, $form) {$form.find("[type=submit]").button("loading");}'),
                'complete' => new JsExpression('function(xhr, msg, $form) {$form.find("[type=submit]").button("reset");}'),
            ]
        ]); ?>
        <?php foreach ($generator->getModelAttributes() as $attribute): ?>
        <?= '<?= ' ?>$form->field($model, '<?= $attribute ?>') ?>
        <?php endforeach; ?>
        <div class="form-group">
            <?= '<?= ' ?>Html::submitButton(<?= $generator->generateString('Submit') ?>, ['class' => 'btn btn-primary']) ?>
        </div>
        <?= '<?php ' ?>ActiveForm::end(); ?>
    </div>
</div>
