<?php

namespace ElemeOpenApi\Api;

/**
 * 渠道管理服务
 */
class AllianceService extends RpcService
{

    /** 创建三级渠道
     * @param $channel_level3_create_request 三级渠道信息
     * @return mixed
     */
    public function create_channel_level3($channel_level3_create_request)
    {
        return $this->client->call("eleme.alliance.createChannelLevel3", array("channelLevel3CreateRequest" => $channel_level3_create_request));
    }

    /** 编辑三级渠道配置数据
     * @param $channel_level3_batch_update_request 渠道配置批量编辑
     * @return mixed
     */
    public function update_channel_level3($channel_level3_batch_update_request)
    {
        return $this->client->call("eleme.alliance.updateChannelLevel3", array("channelLevel3BatchUpdateRequest" => $channel_level3_batch_update_request));
    }

    /** 查询三级渠道配置数据
     * @param $channel_level3_query_request 渠道信息批量查询
     * @return mixed
     */
    public function query_channel_level3_list($channel_level3_query_request)
    {
        return $this->client->call("eleme.alliance.queryChannelLevel3List", array("channelLevel3QueryRequest" => $channel_level3_query_request));
    }

    /** 查询订单信息
     * @param $channel_order_query_request 订单信息查询
     * @return mixed
     */
    public function query_order_info($channel_order_query_request)
    {
        return $this->client->call("eleme.alliance.queryOrderInfo", array("channelOrderQueryRequest" => $channel_order_query_request));
    }

    /** 查询机构账单
     * @param $query_institution_bill_request 机构账单查询
     * @return mixed
     */
    public function query_institution_bill($query_institution_bill_request)
    {
        return $this->client->call("eleme.alliance.queryInstitutionBill", array("queryInstitutionBillRequest" => $query_institution_bill_request));
    }

}