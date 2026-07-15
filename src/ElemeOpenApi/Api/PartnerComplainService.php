<?php

namespace ElemeOpenApi\Api;

/**
 * 开放服务
 */
class PartnerComplainService extends RpcService
{

    /** 创建woos工单
     * @param $create_ticket_dto 查询条件
     * @return mixed
     */
    public function create_ticket($create_ticket_dto)
    {
        return $this->client->call("eleme.partnerComplain.createTicket", array("createTicketDto" => $create_ticket_dto));
    }

    /** 上传工单附件
     * @param $upload_ticket_file_dto 查询条件
     * @return mixed
     */
    public function upload_ticket_file($upload_ticket_file_dto)
    {
        return $this->client->call("eleme.partnerComplain.uploadTicketFile", array("uploadTicketFileDto" => $upload_ticket_file_dto));
    }

    /** 查询工单信息
     * @param $ticket_query_dto 查询条件
     * @return mixed
     */
    public function get_ticket_info($ticket_query_dto)
    {
        return $this->client->call("eleme.partnerComplain.getTicketInfo", array("ticketQueryDto" => $ticket_query_dto));
    }

    /** 催促工单
     * @param $urge_ticket_dto 查询条件
     * @return mixed
     */
    public function urge_ticket($urge_ticket_dto)
    {
        return $this->client->call("eleme.partnerComplain.urgeTicket", array("urgeTicketDto" => $urge_ticket_dto));
    }

}