<?php

namespace app\modules\store\helpers;

class StoreConstants {
    
    const IMG_FIELD = [
        'store_img' => 'store_img',
        'consignee_img' => 'consignee_img',
        'consignee_img2' => 'consignee_img2',
        'consignee_card_img1' => 'consignee_card_img1',
        'consignee_card_img2' => 'consignee_card_img2',
        'consignee_card_img3' => 'consignee_card_img3',
        'consignee_card_img4' => 'consignee_card_img4',
        'old_owner_card_img1' => 'old_owner_card_img1',
        'old_owner_card_img2' => 'old_owner_card_img2',
        'business_license_img' => 'business_license_img',
        'competing_img' => 'competing_img',
        'football_img' => 'football_img',
        'sports_nums_img' => 'sports_nums_img',
        'sports_fre_img' => 'sports_fre_img',
        'north_single_img' => 'north_single_img',
        'welfare_nums_img' => 'welfare_nums_img',
        'welfare_fre_img' => 'welfare_fre_img'
    ];
    
    const REAL_STATUS = [
        '0' => '未认证',
        '1' => '认证成功',
        '2' => '待审核',
        '3' => '审核失败'
    ];
    
    const CERT_STATUS = [
        '0' => '未认证',
        '1' => '未认证',
        '2' => '审核中',
        '3' => '已通过',
        '4' => '未通过'
    ];
    
    const OUT_IMG_FIELD = [
        'order_img1' => 'order_img1',
        'order_img2' => 'order_img2',
        'order_img3' => 'order_img3',
        'order_img4' => 'order_img4'
    ];
    /**
     * 大乐透头部
     */
    const DLT_HEAD = [
       "0"=>[1,1,1,0,1,1,1,0,0,0,0,0,1],
       "1"=>[0,0,0,0,0,0,0,0,0,0,0,0,0],
       "2"=>[0,0,0,0,0,0,0,0,0,0,0,0,0],
    ];
    const SD11X5_COORD_DATA=[
    	'head'=>['renxuan'=>['0,2','0,4','0,5','0,6','0,11'],
    		'no_renxuan'=>['0,2','0,4','0,6','0,7','0,8','0,9','0,10','0,11']
    	],
    	'renxuan_x'=>16,
    	'no_renxuan_x'=>31,
    	'y'=>12
    ];
     /**
     * 足球胜负彩头部
     */
    const SPF_HEAD = [
        "0" =>[1,0,1,0,1,0,1,0,1,1,1,1],
    ];
    const JINGZHU_BANQUANCHANG=[
        1=>['head'=>['0,1','0,4','0,5','0,11'],'x'=>16],
    	2=>['head'=>['0,0','0,1','0,2','0,4','0,5','0,8','0,10','0,11'],'x'=>26],
    ];
    const WEEKS = [
        "周一" =>1,
        "周二" =>2,
        "周三" =>3,
        "周四" =>4,
        "周五" =>5,
        "周六" =>6,
        "周日" =>0,
    ];
     //场次数对应的M串N
    const COUNT_MCN = [
        3 => ['4' => '2', '5' => '2,3'],
        4 => ['4' => '2', '5' => '2,3','7' => '3', '8' => '3,6', '9' => '2', '10' => '2,3,6'],
        5 => ['4' => '2', '5' => '2,3','7' => '3', '8' => '3,6', '9' => '2', '10' => '2,3,6','12' => '6', '13' => '6,11', '14' => '2', '15' => '3,6,11', '16' => '2,3', '17' => '2,3,6,11'],
        6 => ['4' => '2', '5' => '2,3','7' => '3', '8' => '3,6', '9' => '2', '10' => '2,3,6','12' => '6', '13' => '6,11', '14' => '2', '15' => '3,6,11', '16' => '2,3', '17' => '2,3,6,11','19' => '11', '20' => '11,18', '21' => '2', '22' => '3', '23' => '6,11,18', '24' => '2,3', '25' => '3,6,11,18', '26' => '2,3,6', '27' => '2,3,6,11,18'],
        7 => ['4' => '2', '5' => '2,3','7' => '3', '8' => '3,6', '9' => '2', '10' => '2,3,6','12' => '6', '13' => '6,11', '14' => '2', '15' => '3,6,11', '16' => '2,3', '17' => '2,3,6,11','19' => '11', '20' => '11,18', '21' => '2', '22' => '3', '23' => '6,11,18', '24' => '2,3', '25' => '3,6,11,18', '26' => '2,3,6', '27' => '2,3,6,11,18','29' => '18', '30' => '18,28', '31' => '11', '32' => '6', '33' => '2,3,6,11,18,28'],
        8 => ['4' => '2', '5' => '2,3','7' => '3', '8' => '3,6', '9' => '2', '10' => '2,3,6','12' => '6', '13' => '6,11', '14' => '2', '15' => '3,6,11', '16' => '2,3', '17' => '2,3,6,11','19' => '11', '20' => '11,18', '21' => '2', '22' => '3', '23' => '6,11,18', '24' => '2,3', '25' => '3,6,11,18', '26' => '2,3,6', '27' => '2,3,6,11,18','29' => '18', '30' => '18,28', '31' => '11', '32' => '6', '33' => '2,3,6,11,18,28','36' => '28', '37' => '28,35', '38' => '18', '39' => '11', '40' => '6', '41' => '2,3,6,11,18,28,35']
    ];
    const JINGZHU_BIFEN=[
    	1=>['head'=>['0,1','0,6','0,7','0,9','0,11'],'x'=>21],
    	2=>['head'=>['0,1','0,2','0,4','0,5','0,9','0,12'],'x'=>36],
    ];
    /**
     * 足球混合投注7、8场
     */
    const HHSE_HEAD = [
        "0" =>[1,0,1,0,1,0,1,1,1,0,0,0,1],
    ];
}
