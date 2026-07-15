<?php

namespace ElemeOpenApi\Api;

/**
 * 抖音风险同步服务
 */
class PartnerRiskService extends RpcService
{

    /** 抖音风险同步
     * @param $request 同步参数
     * @return mixed
     */
    public function sync_risk_result($request)
    {
        return $this->client->call("eleme.partnerRisk.syncRiskResult", array("request" => $request));
    }

}