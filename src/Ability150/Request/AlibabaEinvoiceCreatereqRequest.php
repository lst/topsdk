<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoiceCreatereqRequest {

    /**
        电商平台代码。TB=淘宝 、TM=天猫 、JD=京东、DD=当当、PP=拍拍、YX=易讯、EBAY=ebay、QQ=QQ网购、AMAZON=亚马逊、SN=苏宁、GM=国美、WPH=唯品会、JM=聚美、LF=乐蜂、MGJ=蘑菇街、JS=聚尚、PX=拍鞋、YT=银泰、YHD=1号店、VANCL=凡客、YL=邮乐、YG=优购、1688=阿里巴巴、POS=POS门店、OTHER=其他,  (只传英文编码)
     **/
    private $platformCode;

    /**
        开票方银行及 帐号
     **/
    private $payeeBankaccount;

    /**
        电子发票明细
     **/
    private $invoiceItems;

    /**
        收款人
     **/
    private $payeeReceiver;

    /**
        开票人
     **/
    private $payeeOperator;

    /**
        开票金额； <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
     **/
    private $invoiceAmount;

    /**
        复核人
     **/
    private $payeeChecker;

    /**
        消费者联系电话
     **/
    private $payerPhone;

    /**
        付款方税务登记证号。对企业开具电子发票时必填。
     **/
    private $payerRegisterNo;

    /**
        开票日期, 格式"YYYY-MM-DD HH:SS:MM"
     **/
    private $invoiceTime;

    /**
        收款方电话
     **/
    private $payeePhone;

    /**
        消费者电子邮箱
     **/
    private $payerEmail;

    /**
        开票方名称，公司名(如:XX商城)
     **/
    private $payeeName;

    /**
        消费者地址
     **/
    private $payerAddress;

    /**
        发票备注，有些省市会把此信息打印到PDF中
     **/
    private $invoiceMemo;

    /**
        付款方开票开户银行及账号
     **/
    private $payerBankaccount;

    /**
        合计金额(新版中为必传) <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
     **/
    private $sumPrice;

    /**
        原发票号码(开红票时传入)
     **/
    private $normalInvoiceNo;

    /**
        发票(开票)类型，蓝票blue,红票red，默认blue
     **/
    private $invoiceType;

    /**
        收款方税务登记证号
     **/
    private $payeeRegisterNo;

    /**
        原发票代码(开红票时传入)
     **/
    private $normalInvoiceCode;

    /**
        默认：0。对于商家对个人开具，为0;对于商家对企业开具，为1;
     **/
    private $businessType;

    /**
        ERP系统中的单据号。如果没有erp的唯一单据号。建议使用platform_code+”_”+ platform_tid的组合方式
     **/
    private $erpTid;

    /**
        开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求。请调用平台统一流水号获取接口，alibaba.einvoice.serialno.generate。
     **/
    private $serialNo;

    /**
        电商平台对应的主订单号
     **/
    private $platformTid;

    /**
        开票方地址(新版中为必传)
     **/
    private $payeeAddress;

    /**
        合计税额 <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
     **/
    private $sumTax;

    /**
        付款方名称, 对应发票台头
     **/
    private $payerName;

    /**
        开票申请ID，接收了开票申请消息后，需要把apply_id带上
     **/
    private $applyId;

    /**
        外部平台店铺名称，需要在阿里发票平台配置，只有当platform_code不为TB和TM时，这个字段才生效。注意：后台配置的店铺平台必须和入参platform_code一致
     **/
    private $outShopName;

    /**
        发票种类，0=电子发票,1=纸质发票,2=专票。注意：未订购纸票服务的税号无法开具纸票
     **/
    private $invoiceKind;

    /**
        红字通知单号，专票冲红时需要，商家跟税局申请
     **/
    private $redNoticeNo;

    /**
        开票角色，supplier=供应商，只有platform_code=TB|TM时生效，供应商开票时允许使用A店铺开具B店铺的订单号
     **/
    private $requestRole;

    /**
        分销订单号，request_role=supplier供应商开票时必填，分销订单号必须属于platform_tid，同时分销订单号的供应商必须和开票的授权账号一致
     **/
    private $distributionTid;


    public function getPlatformCode() : string{
        return $this->platformCode;
    }

    public function setPlatformCode(string $platformCode){
        $this->platformCode = $platformCode;
    }

    public function getPayeeBankaccount() : string{
        return $this->payeeBankaccount;
    }

    public function setPayeeBankaccount(string $payeeBankaccount){
        $this->payeeBankaccount = $payeeBankaccount;
    }

    public function getInvoiceItems() : array{
        return $this->invoiceItems;
    }

    public function setInvoiceItems(array $invoiceItems){
        $this->invoiceItems = $invoiceItems;
    }

    public function getPayeeReceiver() : string{
        return $this->payeeReceiver;
    }

    public function setPayeeReceiver(string $payeeReceiver){
        $this->payeeReceiver = $payeeReceiver;
    }

    public function getPayeeOperator() : string{
        return $this->payeeOperator;
    }

    public function setPayeeOperator(string $payeeOperator){
        $this->payeeOperator = $payeeOperator;
    }

    public function getInvoiceAmount() : string{
        return $this->invoiceAmount;
    }

    public function setInvoiceAmount(string $invoiceAmount){
        $this->invoiceAmount = $invoiceAmount;
    }

    public function getPayeeChecker() : string{
        return $this->payeeChecker;
    }

    public function setPayeeChecker(string $payeeChecker){
        $this->payeeChecker = $payeeChecker;
    }

    public function getPayerPhone() : string{
        return $this->payerPhone;
    }

    public function setPayerPhone(string $payerPhone){
        $this->payerPhone = $payerPhone;
    }

    public function getPayerRegisterNo() : string{
        return $this->payerRegisterNo;
    }

    public function setPayerRegisterNo(string $payerRegisterNo){
        $this->payerRegisterNo = $payerRegisterNo;
    }

    public function getInvoiceTime() : string{
        return $this->invoiceTime;
    }

    public function setInvoiceTime(string $invoiceTime){
        $this->invoiceTime = $invoiceTime;
    }

    public function getPayeePhone() : string{
        return $this->payeePhone;
    }

    public function setPayeePhone(string $payeePhone){
        $this->payeePhone = $payeePhone;
    }

    public function getPayerEmail() : string{
        return $this->payerEmail;
    }

    public function setPayerEmail(string $payerEmail){
        $this->payerEmail = $payerEmail;
    }

    public function getPayeeName() : string{
        return $this->payeeName;
    }

    public function setPayeeName(string $payeeName){
        $this->payeeName = $payeeName;
    }

    public function getPayerAddress() : string{
        return $this->payerAddress;
    }

    public function setPayerAddress(string $payerAddress){
        $this->payerAddress = $payerAddress;
    }

    public function getInvoiceMemo() : string{
        return $this->invoiceMemo;
    }

    public function setInvoiceMemo(string $invoiceMemo){
        $this->invoiceMemo = $invoiceMemo;
    }

    public function getPayerBankaccount() : string{
        return $this->payerBankaccount;
    }

    public function setPayerBankaccount(string $payerBankaccount){
        $this->payerBankaccount = $payerBankaccount;
    }

    public function getSumPrice() : string{
        return $this->sumPrice;
    }

    public function setSumPrice(string $sumPrice){
        $this->sumPrice = $sumPrice;
    }

    public function getNormalInvoiceNo() : string{
        return $this->normalInvoiceNo;
    }

    public function setNormalInvoiceNo(string $normalInvoiceNo){
        $this->normalInvoiceNo = $normalInvoiceNo;
    }

    public function getInvoiceType() : string{
        return $this->invoiceType;
    }

    public function setInvoiceType(string $invoiceType){
        $this->invoiceType = $invoiceType;
    }

    public function getPayeeRegisterNo() : string{
        return $this->payeeRegisterNo;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payeeRegisterNo = $payeeRegisterNo;
    }

    public function getNormalInvoiceCode() : string{
        return $this->normalInvoiceCode;
    }

    public function setNormalInvoiceCode(string $normalInvoiceCode){
        $this->normalInvoiceCode = $normalInvoiceCode;
    }

    public function getBusinessType() : int{
        return $this->businessType;
    }

    public function setBusinessType(int $businessType){
        $this->businessType = $businessType;
    }

    public function getErpTid() : string{
        return $this->erpTid;
    }

    public function setErpTid(string $erpTid){
        $this->erpTid = $erpTid;
    }

    public function getSerialNo() : string{
        return $this->serialNo;
    }

    public function setSerialNo(string $serialNo){
        $this->serialNo = $serialNo;
    }

    public function getPlatformTid() : string{
        return $this->platformTid;
    }

    public function setPlatformTid(string $platformTid){
        $this->platformTid = $platformTid;
    }

    public function getPayeeAddress() : string{
        return $this->payeeAddress;
    }

    public function setPayeeAddress(string $payeeAddress){
        $this->payeeAddress = $payeeAddress;
    }

    public function getSumTax() : string{
        return $this->sumTax;
    }

    public function setSumTax(string $sumTax){
        $this->sumTax = $sumTax;
    }

    public function getPayerName() : string{
        return $this->payerName;
    }

    public function setPayerName(string $payerName){
        $this->payerName = $payerName;
    }

    public function getApplyId() : string{
        return $this->applyId;
    }

    public function setApplyId(string $applyId){
        $this->applyId = $applyId;
    }

    public function getOutShopName() : string{
        return $this->outShopName;
    }

    public function setOutShopName(string $outShopName){
        $this->outShopName = $outShopName;
    }

    public function getInvoiceKind() : int{
        return $this->invoiceKind;
    }

    public function setInvoiceKind(int $invoiceKind){
        $this->invoiceKind = $invoiceKind;
    }

    public function getRedNoticeNo() : string{
        return $this->redNoticeNo;
    }

    public function setRedNoticeNo(string $redNoticeNo){
        $this->redNoticeNo = $redNoticeNo;
    }

    public function getRequestRole() : string{
        return $this->requestRole;
    }

    public function setRequestRole(string $requestRole){
        $this->requestRole = $requestRole;
    }

    public function getDistributionTid() : string{
        return $this->distributionTid;
    }

    public function setDistributionTid(string $distributionTid){
        $this->distributionTid = $distributionTid;
    }


    public function getApiName() : string {
        return "alibaba.einvoice.createreq";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->platformCode)) {
            $requestParam["platform_code"] = TopUtil::convertBasic($this->platformCode);
        }

        if (!TopUtil::checkEmpty($this->payeeBankaccount)) {
            $requestParam["payee_bankaccount"] = TopUtil::convertBasic($this->payeeBankaccount);
        }

        if (!TopUtil::checkEmpty($this->invoiceItems)) {
            $requestParam["invoice_items"] = TopUtil::convertStructList($this->invoiceItems);
        }

        if (!TopUtil::checkEmpty($this->payeeReceiver)) {
            $requestParam["payee_receiver"] = TopUtil::convertBasic($this->payeeReceiver);
        }

        if (!TopUtil::checkEmpty($this->payeeOperator)) {
            $requestParam["payee_operator"] = TopUtil::convertBasic($this->payeeOperator);
        }

        if (!TopUtil::checkEmpty($this->invoiceAmount)) {
            $requestParam["invoice_amount"] = TopUtil::convertBasic($this->invoiceAmount);
        }

        if (!TopUtil::checkEmpty($this->payeeChecker)) {
            $requestParam["payee_checker"] = TopUtil::convertBasic($this->payeeChecker);
        }

        if (!TopUtil::checkEmpty($this->payerPhone)) {
            $requestParam["payer_phone"] = TopUtil::convertBasic($this->payerPhone);
        }

        if (!TopUtil::checkEmpty($this->payerRegisterNo)) {
            $requestParam["payer_register_no"] = TopUtil::convertBasic($this->payerRegisterNo);
        }

        if (!TopUtil::checkEmpty($this->invoiceTime)) {
            $requestParam["invoice_time"] = TopUtil::convertBasic($this->invoiceTime);
        }

        if (!TopUtil::checkEmpty($this->payeePhone)) {
            $requestParam["payee_phone"] = TopUtil::convertBasic($this->payeePhone);
        }

        if (!TopUtil::checkEmpty($this->payerEmail)) {
            $requestParam["payer_email"] = TopUtil::convertBasic($this->payerEmail);
        }

        if (!TopUtil::checkEmpty($this->payeeName)) {
            $requestParam["payee_name"] = TopUtil::convertBasic($this->payeeName);
        }

        if (!TopUtil::checkEmpty($this->payerAddress)) {
            $requestParam["payer_address"] = TopUtil::convertBasic($this->payerAddress);
        }

        if (!TopUtil::checkEmpty($this->invoiceMemo)) {
            $requestParam["invoice_memo"] = TopUtil::convertBasic($this->invoiceMemo);
        }

        if (!TopUtil::checkEmpty($this->payerBankaccount)) {
            $requestParam["payer_bankaccount"] = TopUtil::convertBasic($this->payerBankaccount);
        }

        if (!TopUtil::checkEmpty($this->sumPrice)) {
            $requestParam["sum_price"] = TopUtil::convertBasic($this->sumPrice);
        }

        if (!TopUtil::checkEmpty($this->normalInvoiceNo)) {
            $requestParam["normal_invoice_no"] = TopUtil::convertBasic($this->normalInvoiceNo);
        }

        if (!TopUtil::checkEmpty($this->invoiceType)) {
            $requestParam["invoice_type"] = TopUtil::convertBasic($this->invoiceType);
        }

        if (!TopUtil::checkEmpty($this->payeeRegisterNo)) {
            $requestParam["payee_register_no"] = TopUtil::convertBasic($this->payeeRegisterNo);
        }

        if (!TopUtil::checkEmpty($this->normalInvoiceCode)) {
            $requestParam["normal_invoice_code"] = TopUtil::convertBasic($this->normalInvoiceCode);
        }

        if (!TopUtil::checkEmpty($this->businessType)) {
            $requestParam["business_type"] = TopUtil::convertBasic($this->businessType);
        }

        if (!TopUtil::checkEmpty($this->erpTid)) {
            $requestParam["erp_tid"] = TopUtil::convertBasic($this->erpTid);
        }

        if (!TopUtil::checkEmpty($this->serialNo)) {
            $requestParam["serial_no"] = TopUtil::convertBasic($this->serialNo);
        }

        if (!TopUtil::checkEmpty($this->platformTid)) {
            $requestParam["platform_tid"] = TopUtil::convertBasic($this->platformTid);
        }

        if (!TopUtil::checkEmpty($this->payeeAddress)) {
            $requestParam["payee_address"] = TopUtil::convertBasic($this->payeeAddress);
        }

        if (!TopUtil::checkEmpty($this->sumTax)) {
            $requestParam["sum_tax"] = TopUtil::convertBasic($this->sumTax);
        }

        if (!TopUtil::checkEmpty($this->payerName)) {
            $requestParam["payer_name"] = TopUtil::convertBasic($this->payerName);
        }

        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        if (!TopUtil::checkEmpty($this->outShopName)) {
            $requestParam["out_shop_name"] = TopUtil::convertBasic($this->outShopName);
        }

        if (!TopUtil::checkEmpty($this->invoiceKind)) {
            $requestParam["invoice_kind"] = TopUtil::convertBasic($this->invoiceKind);
        }

        if (!TopUtil::checkEmpty($this->redNoticeNo)) {
            $requestParam["red_notice_no"] = TopUtil::convertBasic($this->redNoticeNo);
        }

        if (!TopUtil::checkEmpty($this->requestRole)) {
            $requestParam["request_role"] = TopUtil::convertBasic($this->requestRole);
        }

        if (!TopUtil::checkEmpty($this->distributionTid)) {
            $requestParam["distribution_tid"] = TopUtil::convertBasic($this->distributionTid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

