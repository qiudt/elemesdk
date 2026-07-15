<?php

namespace ElemeOpenApi\Api;

/**
 * 生活钉接口
 */
class DingdingService extends RpcService
{

    /** 生活钉首页接口
     * @param $request 钉钉入参
     * @return mixed
     */
    public function query_transformer_v1_life_ding($request)
    {
        return $this->client->call("eleme.dingding.queryTransformerV1LifeDing", array("request" => $request));
    }

    /** 生活钉回收接口for推荐列表
     * @param $request 钉钉入参
     * @return mixed
     */
    public function collect_transformer_v1_life_ding($request)
    {
        return $this->client->call("eleme.dingding.collectTransformerV1LifeDing", array("request" => $request));
    }

}