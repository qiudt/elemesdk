<?php

namespace ElemeOpenApi\Api;

/**
 * CRM会员开放平台-权益服务
 */
class CrmService extends RpcService
{

    /** 根据经纬度查询范围内的会员权益
     * @param $request 请求入参
     * @return mixed
     */
    public function query_member_benefit_by_poi($request)
    {
        return $this->client->call("eleme.crm.queryMemberBenefitByPoi", array("request" => $request));
    }

    /** 会员退会
     * @param $request 请求参数
     * @return mixed
     */
    public function exit_membership($request)
    {
        return $this->client->call("eleme.crm.exitMembership", array("request" => $request));
    }

}