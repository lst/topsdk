<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiSearchServiceInfoDto {

    /**
        服务名称
     **/
    private $service_name;

    /**
        服务编码
     **/
    private $service_code;

    /**
        服务属性定义
     **/
    private $service_attributes;

    /**
        服务的官方描述，可以用作前端展示
     **/
    private $service_desc;

    /**
        该服务是否为必选服务
     **/
    private $required;


    public function getServiceName() : string{
        return $this->service_name;
    }

    public function setServiceName(string $serviceName){
        $this->service_name = $serviceName;
    }

    public function getServiceCode() : string{
        return $this->service_code;
    }

    public function setServiceCode(string $serviceCode){
        $this->service_code = $serviceCode;
    }

    public function getServiceAttributes() : array{
        return $this->service_attributes;
    }

    public function setServiceAttributes(array $serviceAttributes){
        $this->service_attributes = $serviceAttributes;
    }

    public function getServiceDesc() : string{
        return $this->service_desc;
    }

    public function setServiceDesc(string $serviceDesc){
        $this->service_desc = $serviceDesc;
    }

    public function getRequired() : bool{
        return $this->required;
    }

    public function setRequired(bool $required){
        $this->required = $required;
    }


}

