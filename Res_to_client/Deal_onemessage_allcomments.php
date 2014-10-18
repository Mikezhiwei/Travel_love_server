<?php
/*
 * Created on 2014-10-16
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include_once("../ResponseMents/CommuncitaionResponse.php");
        $res_comment_one_all=new CommentReponse();
        $res_comment_one_all->response_get_comments_one_all($_POST['msg_id']);
?>
