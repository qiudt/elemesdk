<?php

namespace ElemeOpenApi\Api;

/**
 * 开放平台用户信息查询服务
 */
class AucService extends RpcService
{

    /** 获取预授权令牌
     * @param $request 查询条件
     * @return mixed
     */
    public function get_user_pre_auth_token($request)
    {
        return $this->client->call("eleme.auc.getUserPreAuthToken", array("request" => $request));
    }

    /** 根据令牌查询用户信息
     * @param $request 查询条件
     * @return mixed
     */
    public function query_user_info_by_token($request)
    {
        return $this->client->call("eleme.auc.queryUserInfoByToken", array("request" => $request));
    }

}