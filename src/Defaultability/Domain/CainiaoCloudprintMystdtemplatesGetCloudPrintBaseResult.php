<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintMystdtemplatesGetCloudPrintBaseResult {

    /**
        所有cp的数据
     **/
    private $datas;

    /**
        错误码
     **/
    private $error_code;

    /**
        错误消息
     **/
    private $error_message;

    /**
        是否成功
     **/
    private $success;


    public function getDatas() : array{
        return $this->datas;
    }

    public function setDatas(array $datas){
        $this->datas = $datas;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMessage() : string{
        return $this->error_message;
    }

    public function setErrorMessage(string $errorMessage){
        $this->error_message = $errorMessage;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

