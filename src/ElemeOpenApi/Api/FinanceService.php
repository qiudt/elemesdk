<?php

namespace ElemeOpenApi\Api;

/**
 * 金融服务
 */
class FinanceService extends RpcService
{

    /** 查询商户余额 返回可用余额和子账户余额明细
     * @param $shop_id 饿了么总店店铺id
     * @return mixed
     */
    public function query_new_balance($shop_id)
    {
        return $this->client->call("eleme.finance.queryNewBalance", array("shopId" => $shop_id));
    }

    /** 查询余额流水,有流水改动的交易
     * @param $request 查询条件
     * @return mixed
     */
    public function query_balance_log($request)
    {
        return $this->client->call("eleme.finance.queryBalanceLog", array("request" => $request));
    }

    /** 查询总店账单(新接口)
     * @param $shop_id 饿了么总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_head_bills_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryHeadBillsNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询总店订单(新接口)
     * @param $shop_id 饿了么总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_head_orders_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryHeadOrdersNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询分店账单(新接口)
     * @param $shop_id 饿了么分店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_branch_bills_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryBranchBillsNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询分店订单(新接口)
     * @param $shop_id 饿了么分店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_branch_orders_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryBranchOrdersNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询订单(新接口)
     * @param $shop_id 饿了么店铺id
     * @param $order_id 订单id
     * @return mixed
     */
    public function get_order_new($shop_id, $order_id)
    {
        return $this->client->call("eleme.finance.getOrderNew", array("shopId" => $shop_id, "orderId" => $order_id));
    }

    /** 查询返现汇总信息账单
     * @param $shop_id 饿了么分店、单店、总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_allowance_bills($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryAllowanceBills", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询返现每日详单
     * @param $shop_id 饿了么分店、单店、总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_allowance_bill_detail($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryAllowanceBillDetail", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询商户帐期和名称
     * @param $term_and_name_query 查询条件
     * @return mixed
     */
    public function query_term_and_name($term_and_name_query)
    {
        return $this->client->call("eleme.finance.queryTermAndName", array("termAndNameQuery" => $term_and_name_query));
    }

    /** 子资金账号查询关系
     * @param $relations_request 查询条件
     * @return mixed
     */
    public function query_by_slave($relations_request)
    {
        return $this->client->call("eleme.finance.queryBySlave", array("relationsRequest" => $relations_request));
    }

    /** 查询连锁总店结算子门店关系列表
     * @param $chain_id 饿了么连锁店店铺id
     * @param $checkout_date 入账日期
     * @return mixed
     */
    public function query_slave_shop_ids_by_chain_id($chain_id, $checkout_date)
    {
        return $this->client->call("eleme.finance.querySlaveShopIdsByChainId", array("chainId" => $chain_id, "checkoutDate" => $checkout_date));
    }

    /** 批量查询分店商品维度的账单数据
     * @param $settle_account_shop_id 结算入账ID
     * @param $shop_id_list 门店id列表（限制100）
     * @param $query 查询条件
     * @return mixed
     */
    public function query_goods_orders($settle_account_shop_id, $shop_id_list, $query)
    {
        return $this->client->call("eleme.finance.queryGoodsOrders", array("settleAccountShopId" => $settle_account_shop_id, "shopIdList" => $shop_id_list, "query" => $query));
    }

    /** 分页查询总店通兑卡账单
     * @param $page_query 总店账单分页查询条件
     * @return mixed
     */
    public function query_head_shop_generic_card_bills($page_query)
    {
        return $this->client->call("eleme.finance.queryHeadShopGenericCardBills", array("pageQuery" => $page_query));
    }

    /** 分页查询分店通兑卡账单列表
     * @param $page_query 分页查询条件
     * @return mixed
     */
    public function query_branch_shop_generic_card_bills($page_query)
    {
        return $this->client->call("eleme.finance.queryBranchShopGenericCardBills", array("pageQuery" => $page_query));
    }

    /** 查询外卖订单通兑卡账单信息
     * @param $order_bill_query 外卖订单查询条件
     * @return mixed
     */
    public function query_generic_card_bill_by_order($order_bill_query)
    {
        return $this->client->call("eleme.finance.queryGenericCardBillByOrder", array("orderBillQuery" => $order_bill_query));
    }

    /** 分页查询店铺返佣账单信息
     * @param $page_query 分页查询返佣账单条件
     * @return mixed
     */
    public function query_chain_shop_reward_bill($page_query)
    {
        return $this->client->call("eleme.finance.queryChainShopRewardBill", array("pageQuery" => $page_query));
    }

    /** 查询外卖订单的返佣账单信息
     * @param $query 分页查询返佣账单条件
     * @return mixed
     */
    public function query_reward_bill_by_order($query)
    {
        return $this->client->call("eleme.finance.queryRewardBillByOrder", array("query" => $query));
    }

    /** 分页查询总店推广账单
     * @param $page_query 总店账单分页查询条件
     * @return mixed
     */
    public function page_query_chain_shop_promotion_bill($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryChainShopPromotionBill", array("pageQuery" => $page_query));
    }

    /** 分页查询单店推广账单
     * @param $branch_shop_bill_page_query 分页账单查询条件
     * @return mixed
     */
    public function page_query_branch_shop_promotion_bill($branch_shop_bill_page_query)
    {
        return $this->client->call("eleme.finance.pageQueryBranchShopPromotionBill", array("branchShopBillPageQuery" => $branch_shop_bill_page_query));
    }

    /** 查询外卖订单推广账单
     * @param $order_bill_query 外卖订单查询条件
     * @return mixed
     */
    public function query_promotion_bills_by_order($order_bill_query)
    {
        return $this->client->call("eleme.finance.queryPromotionBillsByOrder", array("orderBillQuery" => $order_bill_query));
    }

    /** 分页查询总店保险账单
     * @param $page_query 总店账单分页查询条件
     * @return mixed
     */
    public function page_query_chain_shop_insurance_bills($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryChainShopInsuranceBills", array("pageQuery" => $page_query));
    }

    /** 分页查询单店保险账单
     * @param $page_query 分页查询条件
     * @return mixed
     */
    public function page_query_branch_shop_insurance_bills($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryBranchShopInsuranceBills", array("pageQuery" => $page_query));
    }

    /** 查询外卖订单保险账单
     * @param $order_bill_query 外卖订单查询条件
     * @return mixed
     */
    public function query_insurance_bills_by_order($order_bill_query)
    {
        return $this->client->call("eleme.finance.queryInsuranceBillsByOrder", array("orderBillQuery" => $order_bill_query));
    }

    /** 分页查询总店代运营账单
     * @param $page_query 总店账单分页查询条件
     * @return mixed
     */
    public function page_query_chain_shop_agent_commission_bills($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryChainShopAgentCommissionBills", array("pageQuery" => $page_query));
    }

    /** 分页查询单店代运营账单
     * @param $page_query 分页查询条件
     * @return mixed
     */
    public function page_query_branch_shop_agent_commission_bills($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryBranchShopAgentCommissionBills", array("pageQuery" => $page_query));
    }

    /** 查询外卖订单代运营账单
     根据订单_i_d查询
     一笔订单可能有多个代运营账单，存在正常单和退单
     * @param $order_bill_query 外卖订单查询条件
     * @return mixed
     */
    public function query_agent_commission_bills_by_order($order_bill_query)
    {
        return $this->client->call("eleme.finance.queryAgentCommissionBillsByOrder", array("orderBillQuery" => $order_bill_query));
    }

    /** 分页查询单店商品明细订单
     * @param $page_query 分页查询条件
     * @return mixed
     */
    public function query_branch_shop_goods_orders($page_query)
    {
        return $this->client->call("eleme.finance.queryBranchShopGoodsOrders", array("pageQuery" => $page_query));
    }

    /** 分页查询总店商品明细订单
     * @param $page_query 总店账单分页查询条件
     * @return mixed
     */
    public function page_query_chain_shop_goods_orders($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryChainShopGoodsOrders", array("pageQuery" => $page_query));
    }

    /** 分页查询总店商家手工账单
     * @param $page_query 总店账单分页查询条件
     * @return mixed
     */
    public function page_query_chain_shop_manual_account_bills($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryChainShopManualAccountBills", array("pageQuery" => $page_query));
    }

    /** 分页查询单店商家手工账单
     * @param $page_query 分页查询条件
     * @return mixed
     */
    public function page_query_branch_shop_manual_account_bills($page_query)
    {
        return $this->client->call("eleme.finance.pageQueryBranchShopManualAccountBills", array("pageQuery" => $page_query));
    }

}