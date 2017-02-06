<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $image
 * @property string $nombre
 * @property integer $cedula
 * @property string $Email
 * @property string $Fecha_nacimiento
 */

class Cliente extends CActiveRecord

{
	 public $image;
    // ... other attributes
 
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, cedula, Email', 'required'),
			array('cedula', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('Email', 'email'),
			array('image, Fecha_nacimiento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('image, nombre, cedula, Email, Fecha_nacimiento', 'safe', 'on'=>'search'),
            array('image', 'file', 'types'=>'jpg, gif, png', 'safe' => false),
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
			'image' => 'image',
			'nombre' => 'Nombre',
			'cedula' => 'Cedula',
			'Email' => 'Email',
			'Fecha_nacimiento' => 'Fecha Nacimiento',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('image',$this->image,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Fecha_nacimiento',$this->Fecha_nacimiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
class ImagenForm extends CFormModel{
    public $image;
    
    public function rules()
    {
        return array(
           array('image','file','types'=>'jpg, jpeg, png, gif')
            );
    }
    
    public function attributeLabels()
	{
		return array(
                        'image'=>'image',			
		);
	}
    
}