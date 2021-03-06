<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "monstertest".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property string $gender
 */
class Monstertest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monstertest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'gender' => 'Gender',
        ];
    }
}
