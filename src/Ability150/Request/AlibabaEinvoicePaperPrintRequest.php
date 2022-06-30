<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoicePaperPrintRequest {

    /**
        打印框设置，0=不弹打印设置框，1=弹出打印设置框
     **/
    private $dialogSettingFlag;

    /**
        是否强制打印，一般发票只能打印一次，但是因为打印机发票号码与待打印发票号码不一致，导致打印错误，需要重新打印
     **/
    private $forcePrint;

    /**
        销售方纳税人识别号
     **/
    private $payeeRegisterNo;

    /**
        打印标记，0=打印发票；1=打印清单。发票明细超过8行时会生成清单页，需要打印清单。
     **/
    private $printFlag;

    /**
        开票流水号
     **/
    private $serialNo;


    public function getDialogSettingFlag() : int{
        return $this->dialogSettingFlag;
    }

    public function setDialogSettingFlag(int $dialogSettingFlag){
        $this->dialogSettingFlag = $dialogSettingFlag;
    }

    public function getForcePrint() : bool{
        return $this->forcePrint;
    }

    public function setForcePrint(bool $forcePrint){
        $this->forcePrint = $forcePrint;
    }

    public function getPayeeRegisterNo() : string{
        return $this->payeeRegisterNo;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payeeRegisterNo = $payeeRegisterNo;
    }

    public function getPrintFlag() : int{
        return $this->printFlag;
    }

    public function setPrintFlag(int $printFlag){
        $this->printFlag = $printFlag;
    }

    public function getSerialNo() : string{
        return $this->serialNo;
    }

    public function setSerialNo(string $serialNo){
        $this->serialNo = $serialNo;
    }


    public function getApiName() : string {
        return "alibaba.einvoice.paper.print";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->dialogSettingFlag)) {
            $requestParam["dialog_setting_flag"] = TopUtil::convertBasic($this->dialogSettingFlag);
        }

        if (!TopUtil::checkEmpty($this->forcePrint)) {
            $requestParam["force_print"] = TopUtil::convertBasic($this->forcePrint);
        }

        if (!TopUtil::checkEmpty($this->payeeRegisterNo)) {
            $requestParam["payee_register_no"] = TopUtil::convertBasic($this->payeeRegisterNo);
        }

        if (!TopUtil::checkEmpty($this->printFlag)) {
            $requestParam["print_flag"] = TopUtil::convertBasic($this->printFlag);
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

