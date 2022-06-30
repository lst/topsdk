<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAscpLogisticsConsignResendResultDto {

    /**
        执行结果
     **/
    private $success;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

