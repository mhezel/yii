<?php
namespace app\models;
use common\models\User;
use Yii;

/**
 * This is the model class for table "tb_projects".
 *
 * @property int $id
 * @property string|null $posted_by
 * @property string|null $title
 * @property string|null $body
 * @property string|null $image
 * @property string $created_at
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'title','body'], 'required'],
            [['body'], 'string'],
            [['created_at','posted_by','image'], 'safe'],
            [['posted_by', 'title'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posted_by' => 'Posted By',
            'title' => 'Title',
            'body' => 'Body',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }

}
