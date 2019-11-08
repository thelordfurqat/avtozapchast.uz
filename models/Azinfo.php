<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "azinfo".
 *
 * @property integer $id
 * @property string $titile
 * @property string $short
 * @property string $body
 * @property string $alias
 * @property string $image
 * @property integer $price
 * @property integer $type_id
 *
 * @property Type $type
 * @property Orders[] $orders
 */
class Azinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'azinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titile', 'short', 'body', 'alias', 'price', 'type_id'], 'required'],
            [['price', 'type_id'], 'integer'],
            [['body',], 'string'],
            [['image',], 'file','extensions'=>['png','jpg','gif']],
            [['titile', 'short', 'alias', 'image'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titile' => 'Titile',
            'short' => 'Short',
            'body' => 'Body',
            'alias' => 'Alias',
            'image' => 'Image',
            'price' => 'Price',
            'type_id' => 'Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['az_id' => 'id']);
    }
}
