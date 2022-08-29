<?php

/**
 * This is the model class for table "athleticsgala".
 *
 * The followings are the available columns in table 'athleticsgala':
 * @property integer $id
 * @property string $Time
 * @property string $Name
 * @property string $Phone
 * @property string $Email
 * @property string $College
 * @property string $Gender
 * @property string $Category
 * @property integer $run100
 * @property integer $run200
 * @property integer $run400
 * @property integer $run800
 * @property integer $run1500
 * @property integer $hurdles110
 * @property integer $hurdles400
 * @property integer $longjump
 * @property integer $highjump
 * @property integer $triplejump
 * @property integer $javelin
 * @property integer $shotput
 * @property integer $discus
 * @property integer $polevault
 * @property integer $relay100
 * @property string $relay100_2
 * @property string $relay100_3
 * @property string $relay100_4
 * @property integer $relay400
 * @property string $relay400_2
 * @property string $relay400_3
 * @property string $relay400_4
 */
class Athleticsgala extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'athleticsgala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Time, Name, Phone, Email, College, Gender, Category', 'required'),
			array('run100, run200, run400, run800, run1500, hurdles110, hurdles400, longjump, highjump, triplejump, javelin, shotput, discus, polevault, relay100, relay400', 'numerical', 'integerOnly'=>true),
			array('relay100_2, relay100_3, relay100_4, relay400_2, relay400_3, relay400_4', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Time, Name, Phone, Email, College, Gender, Category, run100, run200, run400, run800, run1500, hurdles110, hurdles400, longjump, highjump, triplejump, javelin, shotput, discus, polevault, relay100, relay100_2, relay100_3, relay100_4, relay400, relay400_2, relay400_3, relay400_4', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Time' => 'Time',
			'Name' => 'Name',
			'Phone' => 'Phone',
			'Email' => 'Email',
			'College' => 'College',
			'Gender' => 'Gender',
			'Category' => 'Category',
			'run100' => 'Run100',
			'run200' => 'Run200',
			'run400' => 'Run400',
			'run800' => 'Run800',
			'run1500' => 'Run1500',
			'hurdles110' => 'Hurdles110',
			'hurdles400' => 'Hurdles400',
			'longjump' => 'Longjump',
			'highjump' => 'Highjump',
			'triplejump' => 'Triplejump',
			'javelin' => 'Javelin',
			'shotput' => 'Shotput',
			'discus' => 'Discus',
			'polevault' => 'Polevault',
			'relay100' => 'Relay100',
			'relay100_2' => 'Relay100 2',
			'relay100_3' => 'Relay100 3',
			'relay100_4' => 'Relay100 4',
			'relay400' => 'Relay400',
			'relay400_2' => 'Relay400 2',
			'relay400_3' => 'Relay400 3',
			'relay400_4' => 'Relay400 4',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Time',$this->Time,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Phone',$this->Phone,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('College',$this->College,true);
		$criteria->compare('Gender',$this->Gender,true);
		$criteria->compare('Category',$this->Category,true);
		$criteria->compare('run100',$this->run100);
		$criteria->compare('run200',$this->run200);
		$criteria->compare('run400',$this->run400);
		$criteria->compare('run800',$this->run800);
		$criteria->compare('run1500',$this->run1500);
		$criteria->compare('hurdles110',$this->hurdles110);
		$criteria->compare('hurdles400',$this->hurdles400);
		$criteria->compare('longjump',$this->longjump);
		$criteria->compare('highjump',$this->highjump);
		$criteria->compare('triplejump',$this->triplejump);
		$criteria->compare('javelin',$this->javelin);
		$criteria->compare('shotput',$this->shotput);
		$criteria->compare('discus',$this->discus);
		$criteria->compare('polevault',$this->polevault);
		$criteria->compare('relay100',$this->relay100);
		$criteria->compare('relay100_2',$this->relay100_2,true);
		$criteria->compare('relay100_3',$this->relay100_3,true);
		$criteria->compare('relay100_4',$this->relay100_4,true);
		$criteria->compare('relay400',$this->relay400);
		$criteria->compare('relay400_2',$this->relay400_2,true);
		$criteria->compare('relay400_3',$this->relay400_3,true);
		$criteria->compare('relay400_4',$this->relay400_4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Athleticsgala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
