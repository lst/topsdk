<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIPrintWaybillApplyPrintCheckRequest {

    /**
        物流服务商Code
     **/
    private $cp_code;

    /**
        面单详情信息
     **/
    private $print_check_info_cols;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getPrintCheckInfoCols() : array{
        return $this->print_check_info_cols;
    }

    public function setPrintCheckInfoCols(array $printCheckInfoCols){
        $this->print_check_info_cols = $printCheckInfoCols;
    }


}

