<?php
/* @var $this MainStoryController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=$pages->title;
$this->breadcrumbs=array(
	'GJアテンザのページ',
);
?>

<h1>GJアテンザのページ</h1>
<?php
        foreach($pages as $key => $value){
                echo CHtml::image($value->menu_img_url,'','');
                echo CHtml::link(CHtml::encode($value->title), array('view', 'id'=>$value->page_id));
                echo "<br>";
        }
 ?>
