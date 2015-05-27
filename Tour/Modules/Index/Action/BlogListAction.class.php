<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-17
 * Time: 下午9:07
 */
class BlogListAction extends Action {
    public function index() {
        $blog_list = array(
            array('blog_title'=>'博文标题','blog_author'=>'博文作者','blog_publish_time'=>'发布时间',
                'blog_pic'=>'qrcode.jpg',
                'blog_content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.',
                'item_index'=>'1'),
            array('blog_title'=>'博文标题','blog_author'=>'博文作者','blog_publish_time'=>'发布时间',
                'blog_pic'=>'qrcode.jpg',
                'blog_content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.',
                'item_index'=>'3'),
            array('blog_title'=>'博文标题','blog_author'=>'博文作者','blog_publish_time'=>'发布时间',
                'blog_pic'=>'qrcode.jpg',
                'blog_content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.',
                'item_index'=>'2'),
        );
        // 纯洁 幸福
        $tag_list_1 = array(array('tag_name'=>'清新'),
            array('tag_name'=>'风景'),
            array('tag_name'=>'旅游'),
            array('tag_name'=>'浪漫'),
                    );
        $tag_list_2 = array(
            array('tag_name'=>'心情'),
            array('tag_name'=>'国外'),
            array('tag_name'=>'纯洁'),
            array('tag_name'=>'纯洁'),);
        $tag_list_3 = array(
            array('tag_name'=>'浪漫'),
            array('tag_name'=>'幸福'),
            array('tag_name'=>'国外'),
            array('tag_name'=>'幸福'));

        $blog_cate_list_left = array(
            array('cate_name'=>'仲夏欧洲'),
            array('cate_name'=>'白堤之暮'),
            array('cate_name'=>'童趣纪实'),
            array('cate_name'=>'花卉植物'),
        );

        $blog_cate_list_right = array(
            array('cate_name'=>'黑白色彩'),
            array('cate_name'=>'邂逅喵星人'),
            array('cate_name'=>'曲院风荷'),
            array('cate_name'=>'金秋欧洲'),
        );
        $this->assign('title','博客')->assign('subHeading','博客')->assign('blog_list',$blog_list)->
            assign('tag_list_1',$tag_list_1)->assign('tag_list_2',$tag_list_2)->assign('tag_list_3',$tag_list_3)->
            assign('blog_cate_list_left',$blog_cate_list_left)->assign('blog_cate_list_right',$blog_cate_list_right)->
            assign('item_index_strategy',"1")->
            assign("item_index_rent_car","2")->
            assign("item_index_take_pic","3")->
            assign("item_index_blog","4")->
            display();

    }
}