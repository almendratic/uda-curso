<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Menu extends Widget
{
    public $titulo;

    public function init()
    {
        parent::init();
        if ($this->titulo === null) {
            $this->titulo = 'Menu';
        }
    }

    public function run()
    {        
        return $this->render('menu', [
            'titulo' => $this->titulo
        ]);
    }
}
