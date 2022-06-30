<?php
namespace Topsdk\Topapi\Ability1234\Domain;

class AlibabaEinvoiceMerchantResultGetInvoiceResult {

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
        收款方税务登记证号
     **/
    private $payee_register_no;

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

    public function getPayeeRegisterNo() : string{
        return $this->payee_register_no;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payee_register_no = $payeeRegisterNo;
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


}

