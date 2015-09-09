<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audience".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 */
class Audience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'audience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email'], 'required'],
            [['first_name', 'last_name', 'email'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
