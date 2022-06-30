<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoicePaperInvalidRequest {

    /**
        作废操作人
     **/
    private $invalidOperator;

    /**
        作废类型, 0=空白发票(有残缺 的纸张发票，不能做为有效报销)作废, 1=已开发票作废
     **/
    private $invalidType;

    /**
        发票代码，空白作废时必填
     **/
    private $invoiceCode;

    /**
        发票号码，空白作废时必填
     **/
    private $invoiceNo;

    /**
        销售方纳税人识别号
     **/
    private $payeeRegisterNo;

    /**
        开票流水号
     **/
    private $serialNo;


    public function getInvalidOperator() : string{
        return $this->invalidOperator;
    }

    public function setInvalidOperator(string $invalidOperator){
        $this->invalidOperator = $invalidOperator;
    }

    public function getInvalidType() : int{
        return $this->invalidType;
    }

    public function setInvalidType(int $invalidType){
        $this->invalidType = $invalidType;
    }

    public function getInvoiceCode() : string{
        return $this->invoiceCode;
    }

    public function setInvoiceCode(string $invoiceCode){
        $this->invoiceCode = $invoiceCode;
    }

    public function getInvoiceNo() : string{
        return $this->invoiceNo;
    }

    public function setInvoiceNo(string $invoiceNo){
        $this->invoiceNo = $invoiceNo;
    }

    public function getPayeeRegisterNo() : string{
        return $this->payeeRegisterNo;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payeeRegisterNo = $payeeRegisterNo;
    }

    public function getSerialNo() : string{
        return $this->serialNo;
    }

    public function setSerialNo(string $serialNo){
        $this->serialNo = $serialNo;
    }


    public function getApiName() : string {
        return "alibaba.einvoice.paper.invalid";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->invalidOperator)) {
            $requestParam["invalid_operator"] = TopUtil::convertBasic($this->invalidOperator);
        }

        if (!TopUtil::checkEmpty($this->invalidType)) {
            $requestParam["invalid_type"] = TopUtil::convertBasic($this->invalidType);
        }

        if (!TopUtil::checkEmpty($this->invoiceCode)) {
            $requestParam["invoice_code"] = TopUtil::convertBasic($this->invoiceCode);
        }

        if (!TopUtil::checkEmpty($this->invoiceNo)) {
            $requestParam["invoice_no"] = TopUtil::convertBasic($this->invoiceNo);
        }

        if (!TopUtil::checkEmpty($this->payeeRegisterNo)) {
            $requestParam["payee_register_no"] = TopUtil::convertBasic($this->payeeRegisterNo);
        }

        if (!TopUtil::checkEmpty($this->serialNo)) {
            $requestParam["serial_no"] = TopUtil::convertBasic($this->serialNo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

