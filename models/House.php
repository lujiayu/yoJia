<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "house".
 *
 * @property integer $id
 * @property string $price
 * @property string $houseArea
 * @property string $type
 * @property string $floor
 * @property string $fitment
 * @property string $county
 * @property string $community
 * @property string $address
 * @property string $owner
 * @property string $phone
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','price', 'houseArea','type', 'floor', 'fitment', 'county', 'community', 'address', 'owner', 'phone', 'pic1', 'pic2', 'pic3', 'pic4', 'pic5'], 'required'],
            [['price', 'houseArea', 'floor', 'fitment'], 'string', 'max' => 10],
            [['title'],'string','max'=>25],
            [['type', 'county', 'community', 'owner'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title'=>'标题',
            'price' => '总价(万)',
            'houseArea' => '面积(㎡)',
            'type' => '户型',
            'floor' => '楼层',
            'fitment' => '装修(精装、清水房、普装等)',
            'county' => '区县',
            'community' => '小区',
            'address' => '地址',
            'owner' => '联系人',
            'phone' => '电话号码',
            'pic1' => '图片1',
            'pic2' => '图片2',
            'pic3' => '图片3',
            'pic4' => '图片4',
            'pic5' => '图片5',
        ];
    }
}
