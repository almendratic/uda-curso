<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "presidente".
 *
 * @property string $codigo
 * @property string $nombre
 * @property int $anio
 */
class Presidente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presidente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'nombre'], 'required'],
            [['anio'], 'integer'],
            [['codigo'], 'string', 'max' => 2],
            [['nombre'], 'string', 'max' => 52],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Código',
            'nombre' => 'Nombre',
            'anio' => 'Año',
        ];
    }
}
