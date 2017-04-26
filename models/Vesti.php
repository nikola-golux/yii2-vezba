<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vesti".
 *
 * @property integer $id
 * @property string $naslov
 * @property string $sadrzaj
 * @property integer $korisnik_id
 *
 * @property Korisnici $korisnik
 */
class Vesti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vesti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sadrzaj'], 'string'],
            [['korisnik_id'], 'integer'],
            [['naslov'], 'string', 'max' => 100],
            [['korisnik_id'], 'exist', 'skipOnError' => true, 'targetClass' => Korisnici::className(), 'targetAttribute' => ['korisnik_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naslov' => 'Naslov',
            'sadrzaj' => 'Sadrzaj',
            'korisnik_id' => 'Korisnik ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKorisnik()
    {
        return $this->hasOne(Korisnici::className(), ['id' => 'korisnik_id']);
    }
}
