<?php

namespace ElemeOpenApi\Api;

/**
 * 商户服务
 */
class UserService extends RpcService
{

    /** 获取商户账号信息
    
     * @return mixed
     */
    public function get_user()
    {
        return $this->client->call("eleme.user.getUser", array());
    }

    /** 获取当前授权账号的手机号,特权接口仅部分帐号可以调用
    
     * @return mixed
     */
    public function get_phone_number()
    {
        return $this->client->call("eleme.user.getPhoneNumber", array());
    }

    /** 获取授权token状态
     * @param $token 授权token
     * @return mixed
     */
    public function get_token_status($token)
    {
        return $this->client->call("eleme.user.getTokenStatus", array("token" => $token));
    }

    /** 批量解除令牌授权
     * @param $auth_operate_req 查询条件
     * @return mixed
     */
    public function auth_del_operate($auth_operate_req)
    {
        return $this->client->call("eleme.user.authDelOperate", array("authOperateReq" => $auth_operate_req));
    }

    /** 批量恢复令牌授权
     * @param $auth_operate_req 查询条件
     * @return mixed
     */
    public function auth_recover_operate($auth_operate_req)
    {
        return $this->client->call("eleme.user.authRecoverOperate", array("authOperateReq" => $auth_operate_req));
    }

    /** 获取新的用户_i_d(open_user_id)
     * @param $user_id userId或者userIdStr均可
     * @return mixed
     */
    public function get_open_user_id_by_user_id($user_id)
    {
        return $this->client->call("eleme.user.getOpenUserIdByUserId", array("userId" => $user_id));
    }

}