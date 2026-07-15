<?php

namespace ElemeOpenApi\Api;

/**
 * 抖音商品信息补全服务
 */
class PartnerCustomerService extends RpcService
{

    /** _p_o_i&_l_i_v_e&_s_q_u_a_r_e&_l_i_s_t配送信息和跳转链接实时补全（接入方必须做数据安全防控）
     * @param $request 查询条件
     * @return mixed
     */
    public function query_commodity_info_by_location($request)
    {
        return $this->client->call("eleme.partnerCustomer.queryCommodityInfoByLocation", array("request" => $request));
    }

}