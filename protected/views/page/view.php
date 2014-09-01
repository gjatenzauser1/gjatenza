<?php
/* @var $this MainStoryController */
/* @var $model MainStory */
/* @var $model2 Page */
$this->pageTitle=$model->title;
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title,
);
?>

<h1><?php echo $model->title; ?></h1>

<?php
	echo CHtml::image($model->main_img_url,'','');
	echo '<br>';
	echo $model->main_message;
	echo '<br>';
 ?>
<?php
	foreach($modelpagelists as $key => $value){
		echo "<br>";
		echo CHtml::image($value->img_url,'','');
		echo "<br>";
		echo $value->comment;
		echo "<br>";
	}
 ?>
<?php
        foreach($modelaffiliatelists as $key => $value){
                echo "<br>★私も装着してます★<br>";
                echo $value->affiliate->explain;
                echo $value->affiliate->link_url;
		//ジョインした値は↑のように取得する（重要）
        }
 ?>
