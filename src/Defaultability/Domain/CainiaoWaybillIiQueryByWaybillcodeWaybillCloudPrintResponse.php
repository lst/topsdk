<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiQueryByWaybillcodeWaybillCloudPrintResponse {

    /**
        面单信息
     **/
    private $print_data;

    /**
        面单号
     **/
    private $waybill_code;

    /**
        快运子母件中的母单号
     **/
    private $parent_waybill_code;


    public function getPrintData() : string{
        return $this->print_data;
    }

    public function setPrintData(string $printData){
        $this->print_data = $printData;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getParentWaybillCode() : string{
        return $this->parent_waybill_code;
    }

    public function setParentWaybillCode(string $parentWaybillCode){
        $this->parent_waybill_code = $parentWaybillCode;
    }


}

