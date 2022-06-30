<?php
namespace Topsdk\Topapi\Ability150\Domain;

class AlibabaEinvoiceApplyGetApply {

    /**
        电商平台代码,TB,TM,ALIPAY,JD
     **/
    private $platform_code;

    /**
        开票申请状态，0=已拒绝，1=申请中，2=已同意
     **/
    private $status;

    /**
        买家备注
     **/
    private $memo;

    /**
        买家抬头
     **/
    private $payer_name;

    /**
        电商平台对应的订单号
     **/
    private $platform_tid;

    /**
        买家税号
     **/
    private $payer_register_no;

    /**
        开票申请的触发类型，buyer_payed=卖家已付款，sent_goods=卖家已发货，buyer_confirm=买家确认收货，refund_seller_confirm=卖家同意退款，invoice_supply=买家申请补开发票，invoice_change=买家申请改抬头，change_paper=电换纸
     **/
    private $trigger_status;

    /**
        发票种类，0=电子发票，1=纸质发票，2=专票，现在默认是0
     **/
    private $invoice_kind;

    /**
        抬头类型，0=个人，1=企业
     **/
    private $business_type;

    /**
        发票(开票)类型，蓝票blue,红票red，默认blue
     **/
    private $invoice_type;

    /**
        开票金额
     **/
    private $invoice_amount;

    /**
        不含税总金额
     **/
    private $sum_price;

    /**
        总税额
     **/
    private $sum_tax;

    /**
        发票明细
     **/
    private $invoice_items;

    /**
        购买方联系电话
     **/
    private $payer_phone;

    /**
        购买方地址
     **/
    private $payer_address;

    /**
        购买方开户行账号
     **/
    private $payer_bankaccount;

    /**
        购买方开户银行
     **/
    private $payer_bank;

    /**
        发票申请修改时间
     **/
    private $gmt_modified_str;

    /**
        扩展属性
     **/
    private $extend_props;

    /**
        发票申请创建时间
     **/
    private $gmt_create;


    public function getPlatformCode() : string{
        return $this->platform_code;
    }

    public function setPlatformCode(string $platformCode){
        $this->platform_code = $platformCode;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getPayerName() : string{
        return $this->payer_name;
    }

    public function setPayerName(string $payerName){
        $this->payer_name = $payerName;
    }

    public function getPlatformTid() : string{
        return $this->platform_tid;
    }

    public function setPlatformTid(string $platformTid){
        $this->platform_tid = $platformTid;
    }

    public function getPayerRegisterNo() : string{
        return $this->payer_register_no;
    }

    public function setPayerRegisterNo(string $payerRegisterNo){
        $this->payer_register_no = $payerRegisterNo;
    }

    public function getTriggerStatus() : string{
        return $this->trigger_status;
    }

    public function setTriggerStatus(string $triggerStatus){
        $this->trigger_status = $triggerStatus;
    }

    public function getInvoiceKind() : int{
        return $this->invoice_kind;
    }

    public function setInvoiceKind(int $invoiceKind){
        $this->invoice_kind = $invoiceKind;
    }

    public function getBusinessType() : int{
        return $this->business_type;
    }

    public function setBusinessType(int $businessType){
        $this->business_type = $businessType;
    }

    public function getInvoiceType() : string{
        return $this->invoice_type;
    }

    public function setInvoiceType(string $invoiceType){
        $this->invoice_type = $invoiceType;
    }

    public function getInvoiceAmount() : string{
        return $this->invoice_amount;
    }

    public function setInvoiceAmount(string $invoiceAmount){
        $this->invoice_amount = $invoiceAmount;
    }

    public function getSumPrice() : string{
        return $this->sum_price;
    }

    public function setSumPrice(string $sumPrice){
        $this->sum_price = $sumPrice;
    }

    public function getSumTax() : string{
        return $this->sum_tax;
    }

    public function setSumTax(string $sumTax){
        $this->sum_tax = $sumTax;
    }

    public function getInvoiceItems() : array{
        return $this->invoice_items;
    }

    public function setInvoiceItems(array $invoiceItems){
        $this->invoice_items = $invoiceItems;
    }

    public function getPayerPhone() : string{
        return $this->payer_phone;
    }

    public function setPayerPhone(string $payerPhone){
        $this->payer_phone = $payerPhone;
    }

    public function getPayerAddress() : string{
        return $this->payer_address;
    }

    public function setPayerAddress(string $payerAddress){
        $this->payer_address = $payerAddress;
    }

    public function getPayerBankaccount() : string{
        return $this->payer_bankaccount;
    }

    public function setPayerBankaccount(string $payerBankaccount){
        $this->payer_bankaccount = $payerBankaccount;
    }

    public function getPayerBank() : string{
        return $this->payer_bank;
    }

    public function setPayerBank(string $payerBank){
        $this->payer_bank = $payerBank;
    }

    public function getGmtModifiedStr() : string{
        return $this->gmt_modified_str;
    }

    public function setGmtModifiedStr(string $gmtModifiedStr){
        $this->gmt_modified_str = $gmtModifiedStr;
    }

    public function getExtendProps() : string{
        return $this->extend_props;
    }

    public function setExtendProps(string $extendProps){
        $this->extend_props = $extendProps;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }


}

