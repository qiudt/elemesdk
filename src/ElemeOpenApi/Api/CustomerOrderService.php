<?php

namespace ElemeOpenApi\Api;

/**
 * 订单服务
 */
class CustomerOrderService extends RpcService
{

    /** 查询用户当前月订单信息
     * @param $request 手机号信息
     * @return mixed
     */
    public function query_curr_mon_trade_info($request)
    {
        return $this->client->call("eleme.customerOrder.queryCurrMonTradeInfo", array("request" => $request));
    }

}