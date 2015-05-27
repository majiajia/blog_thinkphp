<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-20
 * Time: 下午12:19
 */
class ServiceDetailAction extends Action {
    public function index() {
        $title = "服务详情";

        $url_index = $_GET["_URL_"][2];

        $db_service_detail = M("service_detail");
        $db_service_brief = M("service_brief");

        $result_service_detail = $db_service_detail->where("id = $url_index")->select();
        $project_name = $result_service_detail[0]["project_name"];
        $project_brief = $result_service_detail[0]["project_brief"];
        $image_list = explode(';',$result_service_detail[0]["image_name"]);
        $project_image_list = array();
        $index_image = 0;
        foreach($image_list as $image_item) {
            if($index_image == 0) {
                $index_image ++;
                continue;
            }
            if($index_image == 1) {
                $project_image_list[$index_image]["active"] = "active";
            } else {
                $project_image_list[$index_image]["active"] = "";
            }
            $project_image_list[$index_image]["image_name"] = $image_item;
            $index_image ++;
        }


        $project_detail_list = array();
        $detail_list = explode(';',$result_service_detail[0]["project_detail"]);
        for($index_detail = 0;$index_detail < count($detail_list);$index_detail++) {
            $project_detail_list[$index_detail]["detail"] = $detail_list[$index_detail];
        }
        $service_index = $result_service_detail[0]["service_type"];
        switch($service_index) {
            case '1':
                $service_type = "攻 略";
                break;
            case '2':
                $service_type = "租 车";
                break;
            case '3':
                $service_type = "跟 拍";
                break;
            case '4':
                $service_type = "纪 实";
                break;
            default:
                $service_type = "其 他";
                break;
        }

        $relate_project_list = array(
            array("index"=>"1","image_name"=>"home-banner-phone.jpg"),
            array("index"=>"2","image_name"=>"home-banner-phone.jpg"),
            array("index"=>"3","image_name"=>"home-banner-phone.jpg"),
            array("index"=>"4","image_name"=>"home-banner-phone.jpg"),
        );

        $result_all_detail = $db_service_detail->select();
        $array = array();
        $index_array = 0;
        foreach($result_all_detail as $result_all_detail_item) {
            $array[$index_array] = $result_all_detail_item["id"];
            $index_array++;
        }

//        var_dump(array_rand($array,4));
//        $index_temp = 0;
//        foreach($result_all_detail as $result_all_detail_item) {
//            if($result_all_detail_item["id"])
//            $relate_project_list[$index_temp]["index"] = "";
//            $relate_project_list[$index_temp]["image_name"] = "";
//        }

        $this->assign("title",$title)->
            assign("service_name",$service_type)->
            assign("project_name",$project_name)->
            assign("project_brief",$project_brief)->
            assign("project_image_list",$project_image_list)->
            assign("project_detail_list",$project_detail_list)->
            assign("relate_project_list",$relate_project_list)->
            assign('item_index_strategy',"1")->
            assign("item_index_rent_car","2")->
            assign("item_index_take_pic","3")->
            assign("item_index_blog","4")->
            display();
    }
}