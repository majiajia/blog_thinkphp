<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-17
 * Time: 下午9:08
 */
class ContactAction extends Action {
    public function index() {
        $db_address_info = M("contact_info");
        $select_address_info = $db_address_info->limit(1)->select();

        $address_brief = $select_address_info[0]["address_brief"];
        $address_detail = $select_address_info[0]["address_detail"];
        $telephone = $select_address_info[0]["telephone"];
        $email = $select_address_info[0]["email"];
        $work_time = $select_address_info[0]["work_time"];


        $this->assign('title','联系我们')->
            assign('detail_address',$address_detail)->
            assign('brief_address',$address_brief)->
            assign('tele_phone',$telephone)->
            assign('mail_address',$email)->
            assign('work_time',$work_time)->
            assign('item_index_strategy',"1")->
            assign("item_index_rent_car","2")->
            assign("item_index_take_pic","3")->
            assign("item_index_blog","4")->
            display();
    }

    public function submitDemand() {
        if(!IS_AJAX) {
            halt("页面不存在");
        }

        $db = M("demand");
        $data = array(
            "name"=>I("name"),
            "phone"=>I("phone"),
            "email"=>I("email"),
            "message"=>I("message"),
        );
        $db->add($data);

        $return_data["status"] = 0;
        $this->ajaxReturn($return_data,"json");
    }
}