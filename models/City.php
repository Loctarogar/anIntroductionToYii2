<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "City".
 *
 * @property int $id
 * @property string $Name
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'City';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Name'], 'required'],
            [['id'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['Name'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
        ];
    }
}
