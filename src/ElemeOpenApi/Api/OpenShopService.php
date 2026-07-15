<?php

namespace ElemeOpenApi\Api;

/**
 * 开店服务
 */
class OpenShopService extends RpcService
{

    /** 获取所有餐饮频道的类目信息
    
     * @return mixed
     */
    public function get_all_catering_category()
    {
        return $this->client->call("eleme.openShop.getAllCateringCategory", array());
    }

    /** 获取所有行政区划信息
    
     * @return mixed
     */
    public function get_all_division_info()
    {
        return $this->client->call("eleme.openShop.getAllDivisionInfo", array());
    }

    /** 资质证照类文件上传
     * @param $request 请求参数
     * @return mixed
     */
    public function upload_file($request)
    {
        return $this->client->call("eleme.openShop.uploadFile", array("request" => $request));
    }

    /** 保存草稿
     * @param $request 请求参数
     * @return mixed
     */
    public function save_draft($request)
    {
        return $this->client->call("eleme.openShop.saveDraft", array("request" => $request));
    }

    /** 查询草稿
     * @param $request 请求参数
     * @return mixed
     */
    public function get_draft($request)
    {
        return $this->client->call("eleme.openShop.getDraft", array("request" => $request));
    }

    /** 开店申请预校验
     * @param $request 请求参数
     * @return mixed
     */
    public function pre_check($request)
    {
        return $this->client->call("eleme.openShop.preCheck", array("request" => $request));
    }

    /** 提交开店申请
     * @param $request 请求参数
     * @return mixed
     */
    public function submit($request)
    {
        return $this->client->call("eleme.openShop.submit", array("request" => $request));
    }

    /** 查询开店申请
     * @param $request 请求参数
     * @return mixed
     */
    public function get_detail_by_apply_id($request)
    {
        return $this->client->call("eleme.openShop.getDetailByApplyId", array("request" => $request));
    }

    /** 创建开店申请
     * @param $request 请求参数
     * @return mixed
     */
    public function create($request)
    {
        return $this->client->call("eleme.openShop.create", array("request" => $request));
    }

}