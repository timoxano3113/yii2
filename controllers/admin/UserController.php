<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController {

    public function actionIndex() {
        $id = 123;

        if ($id = 123) {
            $id = 'miss';
        }

        return $this->render('index', compact('id'));
    }

}

?>