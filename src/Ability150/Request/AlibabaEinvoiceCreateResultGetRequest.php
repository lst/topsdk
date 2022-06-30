<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoiceCreateResultGetRequest {

    /**
        收款方税务登记证号
     **/
    private $payeeRegisterNo;

    /**
        电商平台代码。淘宝：taobao，天猫：tmall
     **/
    private $platformCode;

    /**
        电商平台对应的订单号
     **/
    private $platformTid;

    /**
        流水号 (serial_no)和(platform_code,platform_tid)必须填写其中一组,serial_no优先级更高
     **/
    private $serialNo;

    /**
        外部平台店铺名称，需要在阿里发票平台配置，只有当platform_code不为TB和TM时，这个字段才生效。注意：后台配置的店铺平台必须和入参platform_code一致
     **/
    private $outShopName;


    public function getPayeeRegisterNo() : string{
        return $this->payeeRegisterNo;
    }

    public function setPayeeRegisterNo(string $payeeRegisterNo){
        $this->payeeRegisterNo = $payeeRegisterNo;
    }

    public function getPlatformCode() : string{
        return $this->platformCode;
    }

    public function setPlatformCode(string $platformCode){
        $this->platformCode = $platformCode;
    }

    public function getPlatformTid() : string{
        return $this->platformTid;
    }

    public function setPlatformTid(string $platformTid){
        $this->platformTid = $platformTid;
    }

    public function getSerialNo() : string{
        return $this->serialNo;
    }

    public function setSerialNo(string $serialNo){
        $this->serialNo = $serialNo;
    }

    public function getOutShopName() : string{
        return $this->outShopName;
    }

    public function setOutShopName(string $outShopName){
        $this->outShopName = $outShopName;
    }


    public function getApiName() : string {
        return "alibaba.einvoice.create.result.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->payeeRegisterNo)) {
            $requestParam["payee_register_no"] = TopUtil::convertBasic($this->payeeRegisterNo);
        }

        if (!TopUtil::checkEmpty($this->platformCode)) {
            $requestParam["platform_code"] = TopUtil::convertBasic($this->platformCode);
        }

        if (!TopUtil::checkEmpty($this->platformTid)) {
            $requestParam["platform_tid"] = TopUtil::convertBasic($this->platformTid);
        }

        if (!TopUtil::checkEmpty($this->serialNo)) {
            $requestParam["serial_no"] = TopUtil::convertBasic($this->serialNo);
        }

        if (!TopUtil::checkEmpty($this->outShopName)) {
            $requestParam["out_shop_name"] = TopUtil::convertBasic($this->outShopName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

