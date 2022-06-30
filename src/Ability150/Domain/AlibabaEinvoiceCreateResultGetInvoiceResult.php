<?php
namespace Topsdk\Topapi\Ability150\Domain;

class AlibabaEinvoiceCreateResultGetInvoiceResult {

    /**
        防伪码
     **/
    private $anti_fake_code;

    /**
        发票密文，密码区的字符串
     **/
    private $ciphertext;

    /**
        税控设备编号(新版电子发票有)
     **/
    private $device_no;

    /**
        erp自定义单据号
     **/
    private $erp_tid;

    /**
        文件类型(pdf,jpg,png)
     **/
    private $file_data_type;

    /**
        发票PDF的下载地址(仅在单个查询接口上显示，批量查询不显示)
     **/
    private $file_path;

    /**
        开票金额
     **/
    private $invoice_amount;

    /**
        发票代码
     **/
    private $invoice_code;

    /**
        开票日期
     **/
    private $invoice_date;

    /**
        发票号码
     **/
    private $invoice_no;

    /**
        电商平台代码。淘宝：taobao，天猫：tmall
     **/
    private $platform_code;

    /**
        电商平台订单号
     **/
    private $platform_tid;

    /**
        开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求。
     **/
    private $serial_no;

    /**
        开票状态 (waiting = 开票中) 、(create_success = 开票成功)、(create_failed = 开票失败)
     **/
    private $status;

    /**
        错误编码
     **/
    private $biz_error_code;

    /**
        错误信息
     **/
    private $biz_error_msg;

    /**
        电子发票明细，erp开票默认不返回，如果erp需要获取阿里发票平台自动开票的结果，需要先找阿里小二开通权限
     **/
    private $invoice_items;

    /**
        发票类型，blue=蓝票，red=红票
     **/
    private $invoice_type;

    /**
        发票种类，0=电子发票，1=纸质发票，2=纸质专票
     **/
    private $invoice_kind;

    /**
        原蓝票发票代码，invoiceType=red时有值
     **/
    private $normal_invoice_code;

    /**
        原蓝票发票号码，invoiceType=red时有值
     **/
    private $normal_invoice_no;

    /**
        开票人，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payee_operator;

    /**
        收款人，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payee_receiver;

    /**
        复核人，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payee_checker;

    /**
        购买方抬头，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payer_name;

    /**
        购买方税号，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payer_register_no;

    /**
        购买方企业电话，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payer_phone;

    /**
        购买方企业地址，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payer_address;

    /**
        购买方企业银行及账号，erp开票不返回，用来erp获取自动开票结果
     **/
    private $payer_bankaccount;

    /**
        销售方税号
     **/
    private $payee_register_no;

    /**
        开票时间，时分秒格式（注意：2019-04-11之后开具的发票才返回）
     **/
    private $invoice_time;


    public function getAntiFakeCode() : string{
        return $this->anti_fake_code;
    }

    public function setAntiFakeCode(string $antiFakeCode){
        $this->anti_fake_code = $antiFakeCode;
    }

    public function getCiphertext() : string{
        return $this->ciphertext;
    }

    public function setCiphertext(string $ciphertext){
        $this->ciphertext = $ciphertext;
    }

    public function getDeviceNo() : string{
        return $this->device_no;
    }

    public function setDeviceNo(string $deviceNo){
        $this->device_no = $deviceNo;
    }

    public function getErpTid() : string{
        return $this->erp_tid;
    }

    public function setErpTid(string $erpTid){
        $this->erp_tid = $erpTid;
    }

    public function getFileDataType() : string{
        return $this->file_data_type;
    }

    public function setFileDataType(string $fileDataType){
        $this->file_data_type = $fileDataType;
    }

    public function getFilePath() : string{
        return $this->file_path;
    }

    public function setFilePath(string $filePath){
        $this->file_path = $filePath;
    }

    public function getInvoiceAmount() : string{
        return $this->invoice_amount;
    }

    public function setInvoiceAmount(string $invoiceAmount){
        $this->invoice_amount = $invoiceAmount;
    }

    public function getInvoiceCode() : string{
        return $this->invoice_code;
    }

    public function setInvoiceCode(string $invoiceCode){
        $this->invoice_code = $invoiceCode;
    }

    public function getInvoiceDate() : string{
        return $this->invoice_date;
    }

    public function setInvoiceDate(string $invoiceDate){
        $this->invoice_date = $invoiceDate;
    }

    public function getInvoiceNo() : string{
        return $this->invoice_no;
    }

    public function setInvoiceNo(string $invoiceNo){
        $this->invoice_no = $invoiceNo;
    }

    public function getPlatformCode() : string{
        return $this->platform_code;
    }

    public function setPlatformCode(string $platformCode){
        $this->platform_code = $platformCode;
    }

    public function getPlatformTid() : string{
        return $this->platform_tid;
    }

    public function setPlatformTid(string $platformTid){
        $this->platform_tid = $platformTid;
    }

    public function getSerialNo() : string{
        return $this->serial_no;
    }

    public function setSerialNo(string $serialNo){
        $this->serial_no = $serialNo;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getBizErrorCode() : string{
        return $this->biz_error_code;
    }

    public function setBizErrorCode(string $bizErrorCode){
        $this->biz_error_code = $bizErrorCode;
    }

    public function getBizErrorMsg() : string{
        return $this->biz_error_msg;
    }

    public function setBizErrorMsg(string $bizErrorMsg){
        $this->biz_error_msg = $bizErrorMsg;
    }

    public function getInvoiceItems() : array{
        return $this->invoice_items;
    }

    public function setInvoiceItems(array $invoiceItems){
        $this->invoice_items = $invoiceItems;
    }

    public function getInvoiceType() : string{
        return $this->invoice_type;
    }

    public function setInvoiceType(string $invoiceType){
        $this->invoice_type = $invoiceType;
    }

    public function getInvoiceKind() : int{
        return $this->invoice_kind;
    }

    public function setInvoiceKind(int $invoiceKind){
        $this->invoice_kind = $invoiceKind;
    }

    public function getNormalInvoiceCode() : string{
        return $this->normal_invoice_code;
    }

    public function setNormalInvoiceCode(string $normalInvoiceCode){
        $this->normal_invoice_code = $normalInvoiceCode;
    }

    public function getNormalInvoiceNo() : string{
        return $this->normal_invoice_no;
    }

    public function setNormalInvoiceNo(string $normalInvoiceNo){
        $this->normal_invoice_no = $normalInvoiceNo;
    }

    public function getPayeeOperator() : string{
        return $this->payee_operator;
    }

    public function setPayeeOperator(string $payeeOperator){
        $this->payee_operator = $payeeOperator;
    }

    public function getPayeeReceiver() : string{
        return $this->payee_receiver;
    }

    public function setPayeeReceiver(string $payeeReceiver){
        $this->payee_receiver = $payeeReceiver;
    }

    public function getPayeeChecker() : string{
        return $this->payee_checker;
    }

    public function setPayeeChecker(string $payeeChecker){
        $this->payee_checker = $payeeChecker;
    }

    public function getPayerName() : string{
        return $this->payer_name;
    }

    public function setPayerName(string $payerName){
        $this->payer_name = $payerName;
    }

    public function getPayerRegisterNo() : string{
        return $this->payer_register_no;
    }

    public function setPayerRegisterNo(string $payerRegisterNo){
        $this->payer_register_no = $payerRegisterNo;
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

    public function getPayeeRegisterNo() : string{
        return $this->payee_register_no;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payee_register_no = $payeeRegisterNo;
    }

    public function getInvoiceTime() : string{
        return $this->invoice_time;
    }

    public function setInvoiceTime(string $invoiceTime){
        $this->invoice_time = $invoiceTime;
    }


}

