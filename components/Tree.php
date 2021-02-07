<?php


namespace app\components;


use yii\db\ActiveRecord;

class Tree
{
    public $tree;
    public $data;

    public function __construct(ActiveRecord $activeRecord)
    {
        $this->data = $activeRecord::find()->asArray()->indexBy('id')->all();
    }
    public function getTree()
    {
        $tree = [];
        foreach ($this->data as $id=>&$node){
            if(!$node['parent'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent']]['children'][$node['id']] = &$node;
        }
        return $tree;
    }


}
