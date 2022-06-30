<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoLogisticsAddressReachablebatchGetAddressReachableResult {

    /**
        是否成功
     **/
    private $success;

    /**
        服务对应的数字编码，如揽派范围对应88
     **/
    private $service_type;

    /**
        服务是否可达， 0 - 不可达 1 - 可达 2 - 不确定 3 - 未配置
     **/
    private $reachable;

    /**
        物流公司编码ID
     **/
    private $partner_id;

    /**
        物流公司代号
     **/
    private $partner_code;

    /**
        错误信息
     **/
    private $error_msg;

    /**
        错误码
     **/
    private $error_code;

    /**
        区域编码
     **/
    private $division_id;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getServiceType() : string{
        return $this->service_type;
    }

    public function setServiceType(string $serviceType){
        $this->service_type = $serviceType;
    }

    public function getReachable() : string{
        return $this->reachable;
    }

    public function setReachable(string $reachable){
        $this->reachable = $reachable;
    }

    public function getPartnerId() : int{
        return $this->partner_id;
    }

    public function setPartnerId(int $partnerId){
        $this->partner_id = $partnerId;
    }

    public function getPartnerCode() : string{
        return $this->partner_code;
    }

    public function setPartnerCode(string $partnerCode){
        $this->partner_code = $partnerCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }


}

