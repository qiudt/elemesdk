<?php

namespace ElemeOpenApi\Api;

/**
 * 生意参谋服务
 */
class CanmouService extends RpcService
{

    /** 查询实时店铺总览数据
     * @param $request 查询条件
     * @return mixed
     */
    public function query_shop_realtime_overview($request)
    {
        return $this->client->call("eleme.canmou.queryShopRealtimeOverview", array("request" => $request));
    }

    /** 查询实时店铺流量数据
     * @param $request 查询条件
     * @return mixed
     */
    public function query_shop_realtime_flow($request)
    {
        return $this->client->call("eleme.canmou.queryShopRealtimeFlow", array("request" => $request));
    }

    /** 分页查询实时店铺商品数据
     * @param $request 查询条件
     * @return mixed
     */
    public function query_shop_realtime_item($request)
    {
        return $this->client->call("eleme.canmou.queryShopRealtimeItem", array("request" => $request));
    }

    /** 分页查询近30天店铺商品数据
     * @param $request 查询条件
     * @return mixed
     */
    public function query_shop_history_item($request)
    {
        return $this->client->call("eleme.canmou.queryShopHistoryItem", array("request" => $request));
    }

    /** 查询近30天店铺热销商品排行
     * @param $request 查询条件
     * @return mixed
     */
    public function query_shop_item_rank($request)
    {
        return $this->client->call("eleme.canmou.queryShopItemRank", array("request" => $request));
    }

    /** 查询实时商圈流量数据
     * @param $request 查询条件
     * @return mixed
     */
    public function query_market_realtime_flow($request)
    {
        return $this->client->call("eleme.canmou.queryMarketRealtimeFlow", array("request" => $request));
    }

    /** 查询近30天商圈热销商品排行
     * @param $request 查询条件
     * @return mixed
     */
    public function query_market_item($request)
    {
        return $this->client->call("eleme.canmou.queryMarketItem", array("request" => $request));
    }

    /** 查询近30天商圈同品类门店月售
     * @param $request 查询条件
     * @return mixed
     */
    public function query_market_shop_sale($request)
    {
        return $this->client->call("eleme.canmou.queryMarketShopSale", array("request" => $request));
    }

}