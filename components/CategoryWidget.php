<?php


namespace app\components;


use app\models\Pcategory;
use yii\base\Widget;
use yii\helpers\Url;

class CategoryWidget extends Widget
{
    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $categoryHtml;

    public function init()
    {
        parent::init();
        if($this->ul_class === null){
            $this->ul_class = 'category__list';
        }
        if($this->tpl === null){
            $this->tpl = 'category';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        // get cache
        $category = \Yii::$app->cache->get('category');
        if ($category){
            return $category;
        }

        $this->data = Pcategory::find()->select('id, parent, title, slug')->asArray()->indexBy('id')->all();
        $this->tree = $this->getTree();
        $this->categoryHtml = '<ul class="' . $this->ul_class . '">';
        $this->categoryHtml .= $this->getCategoryHtml($this->tree);
        $this->categoryHtml .= '</ul>';

        //set cache
        \Yii::$app->cache->set('category', $this->categoryHtml, 15);

        return $this->categoryHtml;
    }

//    public function getTree()
//    {
//        $tree = [];
//        foreach ($this->data as $id=>&$node){
//            if(!$node['parent'])
//                $tree[$id] = &$node;
//            else
//                $this->data[$node['parent']]['children'][$node['id']] = &$node;
//        }
//        return $tree;
//    }

    public function getCategoryHtml($tree)
    {
        $str = '';
        foreach ($tree as $category){
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }

    public function catToTemplate($category)
    {
        ob_start();
        include __DIR__ . '/tpl/' . $this->tpl;
        return ob_get_clean();
    }
}