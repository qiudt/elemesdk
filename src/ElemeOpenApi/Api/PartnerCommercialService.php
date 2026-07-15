<?php

namespace ElemeOpenApi\Api;

/**
 * 抖音服务
 */
class PartnerCommercialService extends RpcService
{

    /** 服务商/代运营绑定通知
     * @param $request 查询条件
     * @return mixed
     */
    public function sync_cooperate_relation_change($request)
    {
        return $this->client->call("eleme.partnerCommercial.syncCooperateRelationChange", array("request" => $request));
    }

}