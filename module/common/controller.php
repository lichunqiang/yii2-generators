<?php
/**
 * This is the template for generating a controller class within a module.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\module\Generator */

echo "<?php\n";
?>

namespace <?= $generator->getControllerNamespace() ?>;

use Yii;
use yii\web\Controller;

/**
 * @package <?= $generator->getControllerNamespace() . "\n" ?>
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            '_access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'actions' => [], //empty, apply to all actions
                        'allow' => true,
                        'roles' => ['@'],
                        'verbs' => ['GET']
                    ],
                ],
            ]
        ];
    }

    /**
     * index action
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
