<?php

namespace ElemeOpenApi\Api;

/**
 * 短信服务
 */
class SmsService extends RpcService
{

    /** 根据订单号发送短信
     * @param $request 短信发送请求
     * @return mixed
     */
    public function send_message($request)
    {
        return $this->client->call("eleme.sms.sendMessage", array("request" => $request));
    }

    /** 根据手机号发送短信
     * @param $request 短信发送请求
     * @return mixed
     */
    public function send_message_by_phone($request)
    {
        return $this->client->call("eleme.sms.sendMessageByPhone", array("request" => $request));
    }

    /** 查询短信发送结果
     * @param $task_ids 短信发送taskId列表,一次最多20个
     * @return mixed
     */
    public function query_send_result($task_ids)
    {
        return $this->client->call("eleme.sms.querySendResult", array("taskIds" => $task_ids));
    }

}