<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoiceApplyGetRequest {

    /**
        平台订单号
     **/
    private $platformTid;

    /**
        开票申请ID，跟消息中的apply_id对应，传入applyId后，只会返回一条开票申请消息
     **/
    private $applyId;


    public function getPlatformTid() : string{
        return $this->platformTid;
    }

    public function setPlatformTid(string $platformTid){
        $this->platformTid = $platformTid;
    }

    public function getApplyId() : string{
        return $this->applyId;
    }

    public function setApplyId(string $applyId){
        $this->applyId = $applyId;
    }


    public function getApiName() : string {
        return "alibaba.einvoice.apply.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->platformTid)) {
            $requestParam["platform_tid"] = TopUtil::convertBasic($this->platformTid);
        }

        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

