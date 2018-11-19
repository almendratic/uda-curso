<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegistroForm extends Model
{
    public $nombre;
    public $email;

    public function rules()
    {
        return [
            [['nombre', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
