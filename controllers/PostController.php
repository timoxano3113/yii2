<?php

namespace app\controllers;

use Yii;

class PostController extends AppController {

    public function actionTest() {
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        //echo '<hr style="margin-top:100px;">';
        //print_r(Yii::$app);
        //var_dump($names);

        //$this->debug(Yii::$app);

        return $this -> render('test');
    }

}

?>