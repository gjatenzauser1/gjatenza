<?php
/* @var $this MainStoryController */
/* @var $model MainStory */
/* @var $model2 Page */
$this->pageTitle=$model->title;
$this->breadcrumbs=array(
	'Main Stories'=>array('index'),
	$model->title,
);
?>

<h1><?php echo $model->title; ?></h1>

<?php
echo $config;
	echo CHtml::image($model->main_img_url,'','');
	echo '<br>';
	echo $model->main_message;
	echo '<br>';
 ?>
<?php
	foreach($modelpages as $key => $value){
		echo CHtml::image($value->menu_img_url,'','');
		echo CHtml::link(CHtml::encode($value->title), array('/Page/view', 'id'=>$value->page_id)); 
		echo "<br>";
	}

