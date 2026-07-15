<?php

namespace ElemeOpenApi\Api;

/**
 * 自然人商户入驻服务
 */
class MerchantService extends RpcService
{

    /** 查询商户电子签合同模版
    
     * @return mixed
     */
    public function get_merchant_contract_template()
    {
        return $this->client->call("eleme.merchant.getMerchantContractTemplate", array());
    }

    /** 文件上传(用于资质证照类文件上传)
     * @param $request 请求参数
     * @return mixed
     */
    public function upload($request)
    {
        return $this->client->call("eleme.merchant.upload", array("request" => $request));
    }

    /** 发送普通短信验证码(下发短信验证码至商户手机号)
     * @param $request 请求参数
     * @return mixed
     */
    public function send_verify_code($request)
    {
        return $this->client->call("eleme.merchant.sendVerifyCode", array("request" => $request));
    }

    /** 实名认证发送验证码请求(此接口用于商户姓名、身份证、手机号或银行卡等关键要素校验, 以及认证验证码的发送)
     * @param $request 请求参数
     * @return mixed
     */
    public function send_auth_verify_code($request)
    {
        return $this->client->call("eleme.merchant.sendAuthVerifyCode", array("request" => $request));
    }

    /** 创建商户入驻申请
     * @param $request 请求参数
     * @return mixed
     */
    public function create_apply($request)
    {
        return $this->client->call("eleme.merchant.createApply", array("request" => $request));
    }

    /** 修改商户入驻申请的商户身份信息
     * @param $request 请求参数
     * @return mixed
     */
    public function modify_identity_apply($request)
    {
        return $this->client->call("eleme.merchant.modifyIdentityApply", array("request" => $request));
    }

    /** 修改商户入驻申请的认证信息，需携带实名认证验证码
     * @param $request 请求参数
     * @return mixed
     */
    public function modify_auth_apply($request)
    {
        return $this->client->call("eleme.merchant.modifyAuthApply", array("request" => $request));
    }

    /** 商户入驻申请送审
     * @param $request 请求参数
     * @return mixed
     */
    public function submit_audit($request)
    {
        return $this->client->call("eleme.merchant.submitAudit", array("request" => $request));
    }

    /** 发送签约短信验证码
     * @param $request 请求参数
     * @return mixed
     */
    public function send_sign_verify_code($request)
    {
        return $this->client->call("eleme.merchant.sendSignVerifyCode", array("request" => $request));
    }

    /** 商户签约(签署电子合同)
     * @param $request 请求参数
     * @return mixed
     */
    public function sign_contract($request)
    {
        return $this->client->call("eleme.merchant.signContract", array("request" => $request));
    }

    /** 查询商户入驻申请详情
     * @param $request 请求参数
     * @return mixed
     */
    public function get_by_id($request)
    {
        return $this->client->call("eleme.merchant.getById", array("request" => $request));
    }

    /** 修改已生效商户认证信息，需携带实名认证验证码
     * @param $request 请求参数
     * @return mixed
     */
    public function modify_auth_info($request)
    {
        return $this->client->call("eleme.merchant.modifyAuthInfo", array("request" => $request));
    }

    /** 根据证件号+证件类型修改商户认证信息，需携带实名认证验证码
     * @param $request 请求参数
     * @return mixed
     */
    public function modify_by_license_type_and_no($request)
    {
        return $this->client->call("eleme.merchant.modifyByLicenseTypeAndNo", array("request" => $request));
    }

    /** 根据证件类型+证件号码查询自然人商户(返回信息不包含入驻申请_i_d和商户_i_d等信息，且身份信息会脱敏处理)
     * @param $request 请求参数
     * @return mixed
     */
    public function get_by_license_type_and_no($request)
    {
        return $this->client->call("eleme.merchant.getByLicenseTypeAndNo", array("request" => $request));
    }

    /** 根据证件类型+证件号码查询自然人商户详情，需要携带商户身份签名+短信验证
     * @param $request 请求参数
     * @return mixed
     */
    public function get_merchant_by_verify_code($request)
    {
        return $this->client->call("eleme.merchant.getMerchantByVerifyCode", array("request" => $request));
    }

}