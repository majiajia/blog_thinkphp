<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-17
 * Time: 下午9:03
 */
class AboutAction extends Action {
    public function index() {

        $team_member_list = array();
        $db_team_members = M("team_members");
        $member_select = $db_team_members->limit(6)->select();
        $index_member = 0;
        foreach($member_select as $member_select_item) {
            $team_member_list[$index_member]["member_pic"] = $member_select_item["avatar"];
            $team_member_list[$index_member]["name"] = $member_select_item["name"];
            $team_member_list[$index_member]["job_title"] = $member_select_item["title"];
            $team_member_list[$index_member]["brief"] = $member_select_item["brief"];
            $team_member_list[$index_member]["weibo"] = $member_select_item["weibo"];
            $index_member ++;
        }

//        $team_member_list = array(
//            array("member_pic"=>"home-banner-phone.jpg","name"=>"John Smith","job_title"=>"CEO","brief"=>"没有简介"),
//            array("member_pic"=>"home-banner-phone.jpg","name"=>"John Smith","job_title"=>"CEO","brief"=>"没有简介"),
//            array("member_pic"=>"home-banner-phone.jpg","name"=>"John Smith","job_title"=>"CEO","brief"=>"没有简介"),
//            array("member_pic"=>"home-banner-phone.jpg","name"=>"John Smith","job_title"=>"CEO","brief"=>"没有简介"),
//            array("member_pic"=>"home-banner-phone.jpg","name"=>"John Smith","job_title"=>"CEO","brief"=>"没有简介"),
//            array("member_pic"=>"home-banner-phone.jpg","name"=>"John Smith","job_title"=>"CEO","brief"=>"没有简介")
//        );

        $customers_list = array();
        $db_customers = M("customers");
        $customers_select =  $db_customers->limit(6)->select();
        $index = 0;
        foreach($customers_select as $customers_select_item) {
            $customers_list[$index]["curtomer_href"] = $customers_select_item["link"];
            $customers_list[$index]["curtomer_img"] = $customers_select_item["path"];
            $customers_list[$index]["title"] = $customers_select_item["name"];
            $index ++;
        }

        $this->assign('title',"关于我们")->
            assign("team_member_list",$team_member_list)->
            assign("customers_list",$customers_list)->
            assign('item_index_strategy',"1")->
            assign("item_index_rent_car","2")->
            assign("item_index_take_pic","3")->
            assign("item_index_blog","4")->
            display();
    }
}