<?php

namespace ElemeOpenApi\Api;

/**
 * 品牌建店服务
 */
class BrandOpenShopService extends RpcService
{

    /** 查询当前账号归属的连锁树结构
     * @return mixed
     */
    public function get_chain_node_tree()
    {
        return $this->client->call("eleme.brandOpenShop.getChainNodeTree", array());
    }

    /** 查询所有餐饮品类信息
     * @return mixed
     */
    public function get_all_catering_category()
    {
        return $this->client->call("eleme.brandOpenShop.getAllCateringCategory", array());
    }

    /** 上传图片
     * @param $request 图片上传请求
     * @return mixed
     */
    public function upload_image($request)
    {
        return $this->client->call("eleme.brandOpenShop.uploadImage", array("request" => $request));
    }

    /** 创建批量开店任务
     * @param $request 批量开店任务创建/更新请求
     * @return mixed
     */
    public function create_shop_batch_task($request)
    {
        return $this->client->call("eleme.brandOpenShop.createShopBatchTask", array("request" => $request));
    }

    /** 创建/更新开店申请单
     * @param $request 开店申请单创建/更新请求
     * @return mixed
     */
    public function create_shop_apply($request)
    {
        return $this->client->call("eleme.brandOpenShop.createShopApply", array("request" => $request));
    }

    /** 开店任务提交审核
     * @param $request 提交审核请求
     * @return mixed
     */
    public function batch_submit_audit($request)
    {
        return $this->client->call("eleme.brandOpenShop.batchSubmitAudit", array("request" => $request));
    }

    /** 开店申请单提交审核
     * @param $request 提交审核请求
     * @return mixed
     */
    public function submit_audit($request)
    {
        return $this->client->call("eleme.brandOpenShop.submitAudit", array("request" => $request));
    }

    /** 查询开店任务详情
     * @param $request 查询条件
     * @return mixed
     */
    public function query_shop_batch_task($request)
    {
        return $this->client->call("eleme.brandOpenShop.queryShopBatchTask", array("request" => $request));
    }

    /** 查询开店申请单详情
     * @param $request 查询条件
     * @return mixed
     */
    public function query_apply_detail($request)
    {
        return $this->client->call("eleme.brandOpenShop.queryApplyDetail", array("request" => $request));
    }

    /** 获取所有支持的餐饮证照配置
     * @return mixed
     */
    public function obtain_all_catering_license_config()
    {
        return $this->client->call("eleme.brandOpenShop.obtainAllCateringLicenseConfig", array());
    }

    /** 获取当前账号支持的品牌信息
     * @return mixed
     */
    public function support_brand_list()
    {
        return $this->client->call("eleme.brandOpenShop.supportBrandList", array());
    }

}