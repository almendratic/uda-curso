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
            [['codigo', 'nombre', 'ciudad_codigo'], 'required'],
            [['anio'], 'integer'],
            [['codigo'], 'string', 'max' => 2],
            [['nombre'], 'string', 'max' => 52],
            [['ciudad_codigo'], 'string', 'max' => 3], 
            [['codigo'], 'unique'],
            [['ciudad_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['ciudad_codigo' => 'codigo']], 
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
            'ciudad_codigo' => 'Ciudad',
        ];
    }

    /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getCiudad() 
   { 
       return $this->hasOne(Ciudad::className(), ['codigo' => 'ciudad_codigo']); 
   } 
}
