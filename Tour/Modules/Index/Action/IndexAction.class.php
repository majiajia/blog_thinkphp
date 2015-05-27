<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-17
 * Time: 下午8:22
 */
class IndexAction extends Action {
    public function index() {
        $db_index_banner = M("index_banner");
        $data_banner_img = $db_index_banner->limit(3)->select();
        $header_list = array();
        $index_header = 0;
        foreach($data_banner_img as $data_banner_item) {
            $header_list[$index_header]["image_name"] = $data_banner_item["banner_img_name"];
            $header_list[$index_header]["caption"] = $data_banner_item["banner_caption"];
            $header_list[$index_header]["status"] = $data_banner_item["banner_status"];
            $index_header ++;
        }

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

        $db_share = M("share_list");
        $data_share = $db_share->limit(6)->select();
        $share_list = array();
        $index_share = 0;
        foreach($data_share as $data_share_item) {
            $share_list[$index_share]["image_name"] = $data_share_item["image_name"];
            $share_list[$index_share]["item_index"] = $data_share_item["share_index"];
            $share_list[$index_share]["title"] = $data_share_item["title"];
            $index_share ++;
        }

        $this->assign('header_list',$header_list)->
                assign('share_list',$share_list)->
                assign('service_strategy_brief',$service_strategy_brief)->
                assign('service_rentcar_brief',$service_rentcar_brief)->
                assign('service_takepic_brief',$service_takepic_brief)->
                assign('service_blog_brief',$service_blog_brief)->
                assign('item_index_strategy',$item_index_strategy)->
                assign("item_index_rent_car",$item_index_rent_car)->
                assign("item_index_take_pic",$item_index_take_pic)->
                assign("item_index_blog",$item_index_blog)->
                assign("title","小樟树")->display();
    }
}