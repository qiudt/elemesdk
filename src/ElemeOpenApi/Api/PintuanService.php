<?php

namespace ElemeOpenApi\Api;

/**
 * 拼团服务
 */
class PintuanService extends RpcService
{

    /** 批量查询店铺拼团商品
     * @param $shop_id 店铺ID
     * @return mixed
     */
    public function get_all_pin_items($shop_id)
    {
        return $this->client->call("eleme.pintuan.getAllPinItems", array("shopId" => $shop_id));
    }

    /** 创建拼团商品映射，更新商品ext_code字段
     * @param $request 拼团商品映射信息
     * @return mixed
     */
    public function update_pin_item_mapping($request)
    {
        return $this->client->call("eleme.pintuan.updatePinItemMapping", array("request" => $request));
    }

    /** 查询单个拼团商品明细
     * @param $request 查询单个拼团商品的入参
     * @return mixed
     */
    public function query_single_pin_item($request)
    {
        return $this->client->call("eleme.pintuan.querySinglePinItem", array("request" => $request));
    }

    /** 操作拼团商品的上下架
     * @param $request 拼团商品上下架请求的入参
     * @return mixed
     */
    public function update_pin_item_on_shelf($request)
    {
        return $this->client->call("eleme.pintuan.updatePinItemOnShelf", array("request" => $request));
    }

    /** 修改拼团商品的库存
     * @param $request 库存信息
     * @return mixed
     */
    public function update_pin_item_stock($request)
    {
        return $this->client->call("eleme.pintuan.updatePinItemStock", array("request" => $request));
    }

}