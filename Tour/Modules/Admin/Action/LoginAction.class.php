<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-16
 * Time: 下午4:27
 */
class LoginAction extends Action {

    public function index() {
        $this->display();
    }

    public function verify() {
        import("ORG.Util.Image");
        Image::buildImageVerify();
    }

    public function login() {
        if(!IS_AJAX) {
            halt("页面不存在");
        }
        if(md5(I("verify_code","","strtolower")) != session("verify")) {
            $data["status"] = -1;
            $this->ajaxReturn($data,"json");
        }
        $db = M("user");
        $user = $db->where(array("user_name"=>I("user_name")))->find();

        if($user["password"] != I("user_password","","md5") ) {
            $data["status"] = 1;
            $this->ajaxReturn($data,"json");
        } else {
            $update_data = array(
                'login_ip' => get_client_ip(),
                'login_time' => time()
            );
            // 更新的条件
            $condition['user_name'] = 'admin';
            $result = $db->where(array("user_name"=>I("user_name")))->save($update_data);

            session("user_name",I("user_name"));
            session("login_time",date("Y-m-d H:i:s",time()));
            session("login_ip",get_client_ip());

            $data["status"] = 0;
            $data["url"] = '/'.strtolower(APP_NAME) . "/Admin";

            $this->ajaxReturn($data,"json");
        }
    }

    public function register() {
        var_dump($_POST);
    }

    //给指定邮箱发送验证链接
    public function forget_password() {

    }

}