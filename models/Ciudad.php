<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property string $codigo
 * @property string $nombre
 * 
 * @property Presidente[] $presidentes 
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'nombre'], 'required'],
            [['codigo'], 'string', 'max' => 3],
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
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
        ];
    }

    /** 
     * @return \yii\db\ActiveQuery 
     */ 
    public function getPresidentes() 
    { 
       return $this->hasMany(Presidente::className(), ['ciudad_codigo' => 'codigo']); 
    } 
}
