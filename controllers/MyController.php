<?php

namespace app\controllers;

class MyController extends AppController {
    
    public function actionIndex($id = null) {
        $hi = 'Hello, world!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        if (!$id) {
            $id = 'missed';
        }

        //return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render(
            'index',
            compact (
                'hi',
                'names',
                'id'
            )
        );
    }

}

?>