<?php

/**
 * This is the model class for table "page".
 *
 * The followings are the available columns in table 'page':
 * @property integer $page_id
 * @property string $title
 * @property string $url
 * @property string $menu_img_url
 * @property string $main_img_url
 * @property string $main_message
 * @property integer $affiliate_group_id
 * @property integer $story_id
 * @property string $delete_flag
 * @property string $update_timestamp
 * @property string $create_timestamp
 */
class Page extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, url, menu_img_url, main_img_url, main_message, story_id, delete_flag, update_timestamp', 'required'),
			array('affiliate_group_id, story_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('url, menu_img_url, main_img_url', 'length', 'max'=>200),
			array('delete_flag', 'length', 'max'=>3),
			array('create_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('page_id, title, url, menu_img_url, main_img_url, main_message, affiliate_group_id, story_id, delete_flag, update_timestamp, create_timestamp', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'page_id' => 'Page',
			'title' => 'Title',
			'url' => 'Url',
			'menu_img_url' => 'Menu Img Url',
			'main_img_url' => 'Main Img Url',
			'main_message' => 'Main Message',
			'affiliate_group_id' => 'Affiliate Group',
			'story_id' => 'Story',
			'delete_flag' => 'Delete Flag',
			'update_timestamp' => 'Update Timestamp',
			'create_timestamp' => 'Create Timestamp',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('menu_img_url',$this->menu_img_url,true);
		$criteria->compare('main_img_url',$this->main_img_url,true);
		$criteria->compare('main_message',$this->main_message,true);
		$criteria->compare('affiliate_group_id',$this->affiliate_group_id);
		$criteria->compare('story_id',$this->story_id);
		$criteria->compare('delete_flag',$this->delete_flag,true);
		$criteria->compare('update_timestamp',$this->update_timestamp,true);
		$criteria->compare('create_timestamp',$this->create_timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
