<?php

namespace ElemeOpenApi\Api;

/**
 * 新消息服务
 */
class MsgNewService extends RpcService
{

    /** 获取推送失败的消息列表
     * @param $msg_query_request 查询条件
     * @return mixed
     */
    public function get_push_fail_msg($msg_query_request)
    {
        return $this->client->call("eleme.msgNew.getPushFailMsg", array("msgQueryRequest" => $msg_query_request));
    }

    /** _i_s_v通过该接口向平台确认已成功拉取消息
     * @param $msg_confirm_request 查询条件
     * @return mixed
     */
    public function confirm_pull_msg($msg_confirm_request)
    {
        return $this->client->call("eleme.msgNew.confirmPullMsg", array("msgConfirmRequest" => $msg_confirm_request));
    }

}