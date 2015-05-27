<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-17
 * Time: 下午9:09
 */
class ServiceListAction extends Action {
    public function index() {
        $url_index = $_GET["_URL_"][2];
        $subHeading = '';

        $db_service_brief = M('service_brief');
        $service_brief_result = $db_service_brief->select();
        $service_brief_list = array();

        foreach($service_brief_result as $service_brief_item) {
            if($service_brief_item["service_type"] == $url_index) {
                $subHeading = $service_brief_item["service_name"];
                break;
            }
        }
        if($subHeading == '') {
            $this->redirect('/ServiceList/index/1');
        }


//        $db_service_detail = M('service_detail');
//
//        $project_count = $db_service_detail->where(array("service_type"=>$url_index))->select();
//        $project_count = count($project_count);
//
//        $project_list_result = $db_service_detail->order('id ASC')->where(array("service_type"=>$url_index))->limit($p->firstRow.','.$p->listRows)->select();

        $db_service_detail = M('service_detail');

        $project_count = $db_service_detail->where(array("service_type"=>$url_index))->select();
        $project_count = count($project_count);

        $service_type = $url_index;
        $page_no = $_GET["p"];

        if($page_no == -1) {
            $page_no = 1;
        }else if ($page_no == 0) {
            $page_no = ceil($project_count / 5);
        }

        $start_no = ($page_no-1)*5+1;
        $end_no = ($page_no-1)*5+5;

        $project_list_result =
            $db_service_detail->
                    order('id ASC')->
                    where("id>=$start_no and id <= $end_no and service_type=$url_index")->
                    select();

        $project_list = array();

        $index_project = 0;
        foreach($project_list_result as $project_item_result) {
            $project_list[$index_project]["project_index"] = $project_item_result["id"];
            $project_list[$index_project]["img_name"] = explode(';',$project_item_result["image_name"])[0] ;
            $project_list[$index_project]["project_name"] = $project_item_result["project_name"];
            $project_list[$index_project]["project_brief"] = $project_item_result["project_brief"];
            $index_project ++;
        }

        $sum_page_num = ceil($project_count / 5) ;
        for($index_temp = 1;$index_temp <= $sum_page_num;$index_temp++) {
            $page_list[$index_temp-1]["page_index"] = $index_temp;
        }

        $this->assign('title','服务列表')->
            assign('subHeading',$subHeading)->
            assign('project_list', $project_list)->
            assign('page_list',$page_list)->
            assign('item_index_strategy',"1")->
            assign("item_index_rent_car","2")->
            assign("item_index_take_pic","3")->
            assign("item_index_blog","4")->
            display();
    }
}