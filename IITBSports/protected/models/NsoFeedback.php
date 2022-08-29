<?php

/**
 * This is the model class for table "nso_feedback".
 *
 * The followings are the available columns in table 'nso_feedback':
 * @property integer $id
 * @property string $Roll
 * @property string $Date
 * @property string $Sport
 * @property integer $one
 * @property integer $two
 * @property integer $three
 * @property integer $four
 * @property integer $five
 * @property integer $six
 * @property integer $seven
 * @property integer $eight
 * @property integer $nine
 * @property integer $ten
 * @property integer $eleven
 * @property integer $twelve
 * @property integer $thirteen
 * @property integer $fourteen
 * @property integer $fifteen
 * @property integer $sixteen
 * @property integer $seventeen
 * @property integer $eighteen
 * @property integer $nineteen
 * @property string $feedback
 */
class NsoFeedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nso_feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Roll, Date, Sport, one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve, thirteen, fourteen, fifteen, sixteen, seventeen, eighteen, nineteen', 'required'),
			array('one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve, thirteen, fourteen, fifteen, sixteen, seventeen, eighteen, nineteen', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Roll, Date, Sport, one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve, thirteen, fourteen, fifteen, sixteen, seventeen, eighteen, nineteen, feedback', 'safe', 'on'=>'search'),
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
			'Roll' => 'Roll',
			'Date' => 'Date',
			'Sport' => 'Sport',
			'one' => 'One',
			'two' => 'Two',
			'three' => 'Three',
			'four' => 'Four',
			'five' => 'Five',
			'six' => 'Six',
			'seven' => 'Seven',
			'eight' => 'Eight',
			'nine' => 'Nine',
			'ten' => 'Ten',
			'eleven' => 'Eleven',
			'twelve' => 'Twelve',
			'thirteen' => 'Thirteen',
			'fourteen' => 'Fourteen',
			'fifteen' => 'Fifteen',
			'sixteen' => 'Sixteen',
			'seventeen' => 'Seventeen',
			'eighteen' => 'Eighteen',
			'nineteen' => 'Nineteen',
			'feedback' => 'Feedback',
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
		$criteria->compare('Roll',$this->Roll,true);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Sport',$this->Sport,true);
		$criteria->compare('one',$this->one);
		$criteria->compare('two',$this->two);
		$criteria->compare('three',$this->three);
		$criteria->compare('four',$this->four);
		$criteria->compare('five',$this->five);
		$criteria->compare('six',$this->six);
		$criteria->compare('seven',$this->seven);
		$criteria->compare('eight',$this->eight);
		$criteria->compare('nine',$this->nine);
		$criteria->compare('ten',$this->ten);
		$criteria->compare('eleven',$this->eleven);
		$criteria->compare('twelve',$this->twelve);
		$criteria->compare('thirteen',$this->thirteen);
		$criteria->compare('fourteen',$this->fourteen);
		$criteria->compare('fifteen',$this->fifteen);
		$criteria->compare('sixteen',$this->sixteen);
		$criteria->compare('seventeen',$this->seventeen);
		$criteria->compare('eighteen',$this->eighteen);
		$criteria->compare('nineteen',$this->nineteen);
		$criteria->compare('feedback',$this->feedback,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NsoFeedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
