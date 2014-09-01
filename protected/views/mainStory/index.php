<?php
/* @var $this MainStoryController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle="GJアテンザのページ";
$this->breadcrumbs=array(
	'GJアテンザのページ',
);
?>

<h1>GJアテンザのページ</h1>
<?php
echo CHtml::image('http://legacy-on.jp/img4/P1020388_2.jpg','','');
        foreach($mainstorys as $key => $value){
                echo CHtml::image($value->menu_img_url,'','');
                echo CHtml::link(CHtml::encode($value->title), array('view', 'id'=>$value->story_id));
                echo "<br>";
        }
 ?>
