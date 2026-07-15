<?php

namespace ElemeOpenApi\Api;

/**
 * 店铺分服务
 */
class StoreScoreService extends RpcService
{

    /** 查询店铺店铺分及待提升项
     * @param $request 查询条件
     * @return mixed
     */
    public function query_operation_shop_growth($request)
    {
        return $this->client->call("eleme.storeScore.queryOperationShopGrowth", array("request" => $request));
    }

}