<?php

namespace ElemeOpenApi\Api;

/**
 * 开票服务
 */
class InvoiceService extends RpcService
{

    /** 受理成功
     * @param $request 开具单受理成功通知入参
     * @return mixed
     */
    public function accept_success($request)
    {
        return $this->client->call("eleme.invoice.issue.acceptSuccess", array("request" => $request));
    }

    /** 受理失败
     * @param $request 开具单受理失败通知入参
     * @return mixed
     */
    public function accept_failure($request)
    {
        return $this->client->call("eleme.invoice.issue.acceptFailure", array("request" => $request));
    }

    /** 开具成功
     * @param $request 开具单开具成功通知入参
     * @return mixed
     */
    public function issue_success($request)
    {
        return $this->client->call("eleme.invoice.issue.issueSuccess", array("request" => $request));
    }

    /** 开具失败
     * @param $request 开具单开具失败通知入参
     * @return mixed
     */
    public function issue_failure($request)
    {
        return $this->client->call("eleme.invoice.issue.issueFailure", array("request" => $request));
    }

    /** 闪电开票服务注册成功
     * @param $request 注册成功通知入参
     * @return mixed
     */
    public function register_success($request)
    {
        return $this->client->call("eleme.invoice.flash.registerSuccess", array("request" => $request));
    }

    /** 闪电开票服务注册失败
     * @param $request 注册失败通知入参
     * @return mixed
     */
    public function register_failure($request)
    {
        return $this->client->call("eleme.invoice.flash.registerFailure", array("request" => $request));
    }

    /** 闪电开票服务有效期更新
     * @param $request 续签通知入参
     * @return mixed
     */
    public function renew_success($request)
    {
        return $this->client->call("eleme.invoice.flash.renewSuccess", array("request" => $request));
    }

    /** 闪电开票服务退订
     * @param $request 退订通知入参
     * @return mixed
     */
    public function terminate_success($request)
    {
        return $this->client->call("eleme.invoice.flash.terminateSuccess", array("request" => $request));
    }

    /** 批量查询店铺开票设置
     * @param $request 查询请求
     * @return mixed
     */
    public function batch_query_shop_settings($request)
    {
        return $this->client->call("eleme.invoice.seller.batchQueryShopSettings", array("request" => $request));
    }

    /** 批量更新店铺开票设置
     * @param $request 更新请求
     * @return mixed
     */
    public function batch_update_shop_settings($request)
    {
        return $this->client->call("eleme.invoice.seller.batchUpdateShopSettings", array("request" => $request));
    }

    /** 批量查询店铺开票申请
     * @param $request 查询请求
     * @return mixed
     */
    public function batch_query_shop_application($request)
    {
        return $this->client->call("eleme.invoice.seller.batchQueryShopApplication", array("request" => $request));
    }

    /** 批量更新店铺开票申请
     * @param $request 更新请求
     * @return mixed
     */
    public function batch_update_shop_application($request)
    {
        return $this->client->call("eleme.invoice.seller.batchUpdateShopApplication", array("request" => $request));
    }

}