<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiProductWaybillProductType {

    /**
        产品code
     **/
    private $code;

    /**
        产品名称
     **/
    private $name;

    /**
        物流服务
     **/
    private $service_types;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getServiceTypes() : array{
        return $this->service_types;
    }

    public function setServiceTypes(array $serviceTypes){
        $this->service_types = $serviceTypes;
    }


}

