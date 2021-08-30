<?php

namespace common\models;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "{{%lessons}}".
 *
 * @property int $id
 * @property string $name
 * @property int $weekday
 * @property string $start_time
 * @property string $end_time
 * @property string $created_at
 * @property string $updated_at
 * @property int $teacher_id
 * @property int $class_id
 * @property int $group_id
 */
class Lessons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%lessons}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                    'value' => function() { return date('Y-m-d H:i:s');}
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'start_time', 'weekday' ,'end_time', 'teacher_id', 'class_id', 'group_id'], 'required'],
            [[ 'teacher_id', 'class_id', 'group_id'], 'integer'],
            [['start_time', 'end_time', 'created_at', 'updated_at'], 'safe'],
            [['name', 'weekday'], 'string', 'max' => 255],
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
            'weekday' => 'Weekday',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'teacher_id' => 'Teacher ',
            'class_id' => 'Class ',
            'group_id' => 'Group ',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LessonsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LessonsQuery(get_called_class());
    }
}
