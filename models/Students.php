<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $birth_date
 * @property integer $school_id
 *
 * @property Schools $school
 */
class Students extends \yii\db\ActiveRecord
{
    
    public $file;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birth_date', 'school_id'], 'required'],
            [['birth_date'], 'safe'],
            [['school_id'], 'integer'],
            [['file'], 'file'],
            [['name', 'surname', 'photo'], 'string', 'max' => 255],
            [['school_id'], 'exist', 'skipOnError' => true, 'targetClass' => Schools::className(), 'targetAttribute' => ['school_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'birth_date' => 'Birth Date',
            'file'=> 'Photo',
            'school_id' => 'School',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(Schools::className(), ['id' => 'school_id']);
    }
}
