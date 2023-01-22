<?php
// author: yandricr

namespace Telegram\Teleuser;

class Teleuser {
    public function Userdata($username = ""){
        if(empty($username)){
            $js = array("message" => "user_not_entered", "description" => "enter a username to get the data");
            return json_encode($js);
        } else {
            function sUser($user){
                $op = @file_get_contents("https://telegramuser.projectsrpp.repl.co/user/".urlencode($user));
                if($op != true){
                    sleep(0);
                    sUser($user);
                } else {
                    return $op;
                }
            }
            return sUser($username);
        }
    }
}
?>