<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-20
 * Time: 下午5:57
 */

class CommonAction extends Action {
    protected static $item_index_strategy;
    protected static $item_index_rent_car;
    protected static $item_index_take_pic;
    protected static $item_index_blog;
    public function __construct() {
        $db_service_brief = M("service_brief");
        $data_service_brief = $db_service_brief->select();

        foreach($data_service_brief as $data_service_brief_item) {
            switch($data_service_brief_item["service_type"]) {
                case '1':
                    $item_index_strategy = $data_service_brief_item["service_type"];
                    $service_strategy_brief = $data_service_brief_item["service_brief"];
                    break;
                case '2':
                    $item_index_rent_car = $data_service_brief_item["service_type"];
                    $service_rentcar_brief = $data_service_brief_item["service_brief"];
                    break;
                case '3':
                    $item_index_take_pic = $data_service_brief_item["service_type"];
                    $service_takepic_brief = $data_service_brief_item["service_brief"];
                    break;
                case '4':
                    $item_index_blog = $data_service_brief_item["service_type"];
                    $service_blog_brief = $data_service_brief_item["service_brief"];
                    break;
            }
        }
    }
}