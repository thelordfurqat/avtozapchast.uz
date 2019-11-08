<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property integer $az_id
 * @property integer $count
 * @property integer $price
 * @property string $adress
 *
 * @property Azinfo $az
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'az_id', 'count', 'adress'], 'required'],
            [['az_id', 'count', 'price'], 'integer'],
            [['email'],'email'],
            [['name', 'phone', 'email', 'adress'], 'string', 'max' => 255],
            [['az_id'], 'exist', 'skipOnError' => true, 'targetClass' => Azinfo::className(), 'targetAttribute' => ['az_id' => 'id']],
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
            'phone' => 'Phone',
            'email' => 'Email',
            'az_id' => 'Az ID',
            'count' => 'Count',
            'price' => 'Price',
            'adress' => 'Adress',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAz()
    {
        return $this->hasOne(Azinfo::className(), ['id' => 'az_id']);
    }
}
