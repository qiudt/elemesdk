<?php

namespace ElemeOpenApi\Api;

/**
 * 斗金服务
 */
class AdService extends RpcService
{

    /** 查询斗金推广设置
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_cpc_solution($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinCpcSolution", array("request" => $request));
    }

    /** 查询斗金推广点击分布信息
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_click_distribution_report($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinClickDistributionReport", array("request" => $request));
    }

    /** 查询斗金推广效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_effect_report($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinEffectReport", array("request" => $request));
    }

    /** 设置斗金时段
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_time($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinTime", array("request" => $request));
    }

    /** 设置斗金定向
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_target($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinTarget", array("request" => $request));
    }

    /** 设置斗金预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_budget($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinBudget", array("request" => $request));
    }

    /** 设置斗金出价
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_bid($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinBid", array("request" => $request));
    }

    /** 设置斗金状态
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_state($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinState", array("request" => $request));
    }

    /** 创建斗金计划
     * @param $request 请求参数
     * @return mixed
     */
    public function create_dou_jin_solution($request)
    {
        return $this->client->call("eleme.ad.doujincpc.createDouJinSolution", array("request" => $request));
    }

    /** 查询斗金最大可用余额
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_account_balance($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinAccountBalance", array("request" => $request));
    }

    /** 查询账户余额
     * @param $request 请求参数
     * @return mixed
     */
    public function find_account_balance($request)
    {
        return $this->client->call("eleme.ad.common.findAccountBalance", array("request" => $request));
    }

    /** 分页查询斗金连锁计划
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_cpc_solution($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.findDouJinCpcSolution", array("request" => $request));
    }

    /** 创建斗金连锁计划
     * @param $request 请求参数
     * @return mixed
     */
    public function create_dou_jin_solution($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.createDouJinSolution", array("request" => $request));
    }

    /** 设置斗金连锁计划状态
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_state($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinState", array("request" => $request));
    }

    /** 设置斗金连锁计划时段
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_time($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinTime", array("request" => $request));
    }

    /** 设置斗金连锁计划日期
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_date($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinDate", array("request" => $request));
    }

    /** 设置斗金连锁计划名称
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_title($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinTitle", array("request" => $request));
    }

    /** 设置斗金连锁计划日预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_budget($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinBudget", array("request" => $request));
    }

    /** 设置斗金连锁计划门店出价
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_bid($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinBid", array("request" => $request));
    }

    /** 设置斗金连锁计划门店预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_shop_budget($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinShopBudget", array("request" => $request));
    }

    /** 设置斗金连锁计划定向
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_target($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.updateDouJinTarget", array("request" => $request));
    }

    /** 新增斗金连锁计划门店
     * @param $request 请求参数
     * @return mixed
     */
    public function add_dou_jin_shop($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.addDouJinShop", array("request" => $request));
    }

    /** 删除斗金连锁计划门店
     * @param $request 请求参数
     * @return mixed
     */
    public function delete_dou_jin_shop($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.deleteDouJinShop", array("request" => $request));
    }

    /** 查询门店的最低预算和最低出价
     * @param $request 请求参数
     * @return mixed
     */
    public function find_shop_city_price($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.findShopCityPrice", array("request" => $request));
    }

    /** 斗金连锁品牌资金计划维度效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_effect_report_with_campaign_and_date($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.findEffectReportWithCampaignAndDate", array("request" => $request));
    }

    /** 斗金连锁分店资金门店x日期维度效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_effect_report_with_shop_and_date($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.findEffectReportWithShopAndDate", array("request" => $request));
    }

    /** 斗金连锁品牌资金门店x计划x日期维度效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_effect_report_with_campaign_and_shop_and_date($request)
    {
        return $this->client->call("eleme.ad.doujincpcchain.findEffectReportWithCampaignAndShopAndDate", array("request" => $request));
    }

    /** 查询优享大牌推广设置
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_cpc_solution($request)
    {
        return $this->client->call("eleme.ad.displaycpc.findDisplayCpcSolution", array("request" => $request));
    }

    /** 查询优享大牌推广效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_effect_report($request)
    {
        return $this->client->call("eleme.ad.displaycpc.findDisplayEffectReport", array("request" => $request));
    }

    /** 设置优享大牌时段
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_time($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayTime", array("request" => $request));
    }

    /** 设置优享大牌定向
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_target($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayTarget", array("request" => $request));
    }

    /** 设置优享大牌预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_budget($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayBudget", array("request" => $request));
    }

    /** 设置优享大牌出价
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_bid($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayBid", array("request" => $request));
    }

    /** 设置优享大牌状态
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_state($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayState", array("request" => $request));
    }

    /** 创建优享大牌计划
     * @param $request 请求参数
     * @return mixed
     */
    public function create_display_solution($request)
    {
        return $this->client->call("eleme.ad.displaycpc.createDisplaySolution", array("request" => $request));
    }

    /** 查询优享大牌最大可用余额
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_account_balance($request)
    {
        return $this->client->call("eleme.ad.displaycpc.findDisplayAccountBalance", array("request" => $request));
    }

    /** 分页查询优享大牌连锁计划
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_cpc_solution($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.findDisplayCpcSolution", array("request" => $request));
    }

    /** 创建优享大牌连锁计划
     * @param $request 请求参数
     * @return mixed
     */
    public function create_display_solution($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.createDisplaySolution", array("request" => $request));
    }

    /** 设置优享大牌连锁计划状态
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_state($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayState", array("request" => $request));
    }

    /** 设置优享大牌连锁计划时段
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_time($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayTime", array("request" => $request));
    }

    /** 设置优享大牌连锁计划日期
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_date($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayDate", array("request" => $request));
    }

    /** 设置优享大牌连锁计划名称
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_title($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayTitle", array("request" => $request));
    }

    /** 设置优享大牌连锁计划日预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_budget($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayBudget", array("request" => $request));
    }

    /** 设置优享大牌连锁计划门店出价
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_bid($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayBid", array("request" => $request));
    }

    /** 设置优享大牌连锁计划门店预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_shop_budget($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayShopBudget", array("request" => $request));
    }

    /** 设置优享大牌连锁计划定向
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_target($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.updateDisplayTarget", array("request" => $request));
    }

    /** 新增优享大牌连锁计划门店
     * @param $request 请求参数
     * @return mixed
     */
    public function add_display_shop($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.addDisplayShop", array("request" => $request));
    }

    /** 删除优享大牌连锁计划门店
     * @param $request 请求参数
     * @return mixed
     */
    public function delete_display_shop($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.deleteDisplayShop", array("request" => $request));
    }

    /** 查询门店的最低预算和最低出价
     * @param $request 请求参数
     * @return mixed
     */
    public function find_shop_city_price($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.findShopCityPrice", array("request" => $request));
    }

    /** 优享cpc连锁品牌资金计划维度效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_effect_report_with_campaign_and_date($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.findEffectReportWithCampaignAndDate", array("request" => $request));
    }

    /** 优享cpc连锁分店资金门店x日期维度效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_effect_report_with_shop_and_date($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.findEffectReportWithShopAndDate", array("request" => $request));
    }

    /** 优享cpc连锁品牌资金门店x计划x日期维度效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_effect_report_with_campaign_and_shop_and_date($request)
    {
        return $this->client->call("eleme.ad.displaycpcchain.findEffectReportWithCampaignAndShopAndDate", array("request" => $request));
    }

}