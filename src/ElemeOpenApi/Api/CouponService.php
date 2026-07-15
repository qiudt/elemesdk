<?php

namespace ElemeOpenApi\Api;

/**
 * 卡券订单服务（对外提供）
 */
class CouponService extends RpcService
{

    /** 查询卡券订单信息
     * @param $request 查询条件
     * @return mixed
     */
    public function query_coupon_order($request)
    {
        return $this->client->call("eleme.coupon.queryCouponOrder", array("request" => $request));
    }

}