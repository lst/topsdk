<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoiceRedCreatereqRequest {

    /**
        销售方税号
     **/
    private $payeeRegisterNo;

    /**
        蓝票流水号，优先级高于发票代码+发票号码
     **/
    private $blueSerialNo;

    /**
        红票流水号
     **/
    private $redSerialNo;

    /**
        蓝票发票代码
     **/
    private $invoiceCode;

    /**
        蓝票发票号码
     **/
    private $invoiceNo;


    public function getPayeeRegisterNo() : string{
        return $this->payeeRegisterNo;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payeeRegisterNo = $payeeRegisterNo;
    }

    public function getBlueSerialNo() : string{
        return $this->blueSerialNo;
    }

    public function setBlueSerialNo(string $blueSerialNo){
        $this->blueSerialNo = $blueSerialNo;
    }

    public function getRedSerialNo() : string{
        return $this->redSerialNo;
    }

    public function setRedSerialNo(string $redSerialNo){
        $this->redSerialNo = $redSerialNo;
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


    public function getApiName() : string {
        return "alibaba.einvoice.red.createreq";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->payeeRegisterNo)) {
            $requestParam["payee_register_no"] = TopUtil::convertBasic($this->payeeRegisterNo);
        }

        if (!TopUtil::checkEmpty($this->blueSerialNo)) {
            $requestParam["blue_serial_no"] = TopUtil::convertBasic($this->blueSerialNo);
        }

        if (!TopUtil::checkEmpty($this->redSerialNo)) {
            $requestParam["red_serial_no"] = TopUtil::convertBasic($this->redSerialNo);
        }

        if (!TopUtil::checkEmpty($this->invoiceCode)) {
            $requestParam["invoice_code"] = TopUtil::convertBasic($this->invoiceCode);
        }

        if (!TopUtil::checkEmpty($this->invoiceNo)) {
            $requestParam["invoice_no"] = TopUtil::convertBasic($this->invoiceNo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

