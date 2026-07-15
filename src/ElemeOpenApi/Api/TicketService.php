<?php

namespace ElemeOpenApi\Api;

/**
 * 小票服务
 */
class TicketService extends RpcService
{

    /** 创建小票设置页面token
     * @param $ticket_token_request 创建小票token信息
     * @return mixed
     */
    public function create_ticket_token($ticket_token_request)
    {
        return $this->client->call("eleme.ticket.createTicketToken", array("ticketTokenRequest" => $ticket_token_request));
    }

    /** 根据店铺id获取店铺小票打印联配置数据
     * @param $shop_id 店铺ID
     * @return mixed
     */
    public function query_print_settings($shop_id)
    {
        return $this->client->call("eleme.ticket.queryPrintSettings", array("shopId" => $shop_id));
    }

    /** 根据店铺id修改店铺小票打印联配置数据
     * @param $request 打印联设置
     * @return mixed
     */
    public function update_print_settings($request)
    {
        return $this->client->call("eleme.ticket.updatePrintSettings", array("request" => $request));
    }

    /** 打印测试小票
     * @param $shop_id 店铺ID
     * @param $ticket_type 打印联信息
     * @return mixed
     */
    public function get_test_ticket_data($shop_id, $ticket_type)
    {
        return $this->client->call("eleme.ticket.getTestTicketData", array("shopId" => $shop_id, "ticketType" => $ticket_type));
    }

    /** 小票补打接口
     * @param $request 小票补打信息
     * @return mixed
     */
    public function get_ticket_data_for_pull($request)
    {
        return $this->client->call("eleme.ticket.getTicketDataForPull", array("request" => $request));
    }

}