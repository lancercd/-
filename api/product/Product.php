<?php
namespace api\product;

use \server\Base;
use \server\JsonService as Json;
class Product extends Base{
    public function get_hot_product(){
        return Json::success([
            ['product_id' => 1, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
            ['product_id' => 2, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
            ['product_id' => 3, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
            ['product_id' => 4, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
            ['product_id' => 5, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
        ]);
        // return Json::fail('获取失败!');
    }
    public function get_product_list_1(){
        return Json::success([
            ['product_id' => 1, 'image' => '../public/image/di2-2-1.jpg', 'pro_name' => '小蚁智能摄像机', 'introduce' => '能看能听能说，手机远程观看', 'price' => 149],
            ['product_id' => 2, 'image' => '../public/image/di2-2-2.jpg', 'pro_name' => '小蚁运动相机', 'introduce' => '边玩边录边拍，手机随时分享', 'price' => 399],
            ['product_id' => 3, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
            ['product_id' => 4, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
            ['product_id' => 5, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299],
        ]);
        // return Json::fail('获取失败!');
    }
    public function get_product_list_2(){
        return Json::success([
            ['product_id' => 1, 'image' => '../public/image/di2-2-1.jpg', 'pro_name' => '小蚁智能摄像机', 'introduce' => '能看能听能说，手机远程观看', 'price' => 149, 'comment' => ['content' => '比我以前买的充电宝砖头好太多了！放在包里不占位置...', 'real_name' => 'lc']],
            ['product_id' => 2, 'image' => '../public/image/di2-2-2.jpg', 'pro_name' => '小蚁运动相机', 'introduce' => '边玩边录边拍，手机随时分享', 'price' => 399, 'comment' => ['content' => '比我以前买的充电宝砖头好太多了！放在包里不占位置...', 'real_name' => 'lc']],
            ['product_id' => 3, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299, 'comment' => ['content' => '比我以前买的充电宝砖头好太多了！放在包里不占位置...', 'real_name' => 'lc']],
            ['product_id' => 4, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299, 'comment' => ['content' => '比我以前买的充电宝砖头好太多了！放在包里不占位置...', 'real_name' => 'lc']],
            ['product_id' => 5, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'introduce' => '工艺和手感超乎想象', 'price' => 1299, 'comment' => ['content' => '比我以前买的充电宝砖头好太多了！放在包里不占位置...', 'real_name' => 'lc']],
        ]);
        // return Json::fail('获取失败!');
    }
    public function get_recommend_product(){
        return Json::success([
            ['product_id' => 1, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'tips' => 135000, 'price' => 1299],
            ['product_id' => 2, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'tips' => 135000, 'price' => 1299],
            ['product_id' => 3, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'tips' => 135000, 'price' => 1299],
            ['product_id' => 4, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'tips' => 135000, 'price' => 1299],
            ['product_id' => 5, 'image' => '../public/image/T1UCV_B4dv1RXrhCrK.jpg', 'pro_name' => '小米4', 'tips' => 135000, 'price' => 1299],
        ]);
    }
}