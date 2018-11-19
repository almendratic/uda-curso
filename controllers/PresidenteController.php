<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Presidente;

class PresidenteController extends Controller
{
    public function actionIndex()
    {
        $query = Presidente::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $presidentes = $query->orderBy('nombre')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'presidentes' => $presidentes,
            'pagination' => $pagination,
        ]);
    }
}
