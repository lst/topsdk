<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiQueryByTradecodeWaybillCloudPrintResponse {

    /**
        面单信息
     **/
    private $print_data;

    /**
        面单号
     **/
    private $waybill_code;


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


}

