<?php

/**
 * This is the model class for table "affiliate_group".
 *
 * The followings are the available columns in table 'affiliate_group':
 * @property integer $affiliate_group_id
 * @property string $group_name
 * @property string $delete_flag
 * @property string $update_timestamp
 * @property string $create_timestamp
 */
class AffiliateGroup extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'affiliate_group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_name, delete_flag, update_timestamp', 'required'),
			array('group_name', 'length', 'max'=>30),
			array('delete_flag', 'length', 'max'=>3),
			array('create_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('affiliate_group_id, group_name, delete_flag, update_timestamp, create_timestamp', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		//$BB>BPB>$N>l9g$O%^%C%T%s%0%F!<%V%k$OI,MW(B
		return array(
			'affiliate'=>array(self::MANY_MANY, 'Affiliate','map_affiliate_group(affiliate_group_id, affiliate_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'affiliate_group_id' => 'Affiliate Group',
			'group_name' => 'Group Name',
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

		$criteria->compare('affiliate_group_id',$this->affiliate_group_id);
		$criteria->compare('group_name',$this->group_name,true);
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
	 * @return AffiliateGroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
