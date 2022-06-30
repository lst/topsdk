<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIPrintWaybillApplyPrintCheckInfo {

    /**
        打印提示信息编码
     **/
    private $notice_code;

    /**
        打印提示信息
     **/
    private $notice_message;

    /**
        打印次数
     **/
    private $print_quantity;

    /**
        电子面单号
     **/
    private $waybill_code;


    public function getNoticeCode() : string{
        return $this->notice_code;
    }

    public function setNoticeCode(string $noticeCode){
        $this->notice_code = $noticeCode;
    }

    public function getNoticeMessage() : string{
        return $this->notice_message;
    }

    public function setNoticeMessage(string $noticeMessage){
        $this->notice_message = $noticeMessage;
    }

    public function getPrintQuantity() : int{
        return $this->print_quantity;
    }

    public function setPrintQuantity(int $printQuantity){
        $this->print_quantity = $printQuantity;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }


}

