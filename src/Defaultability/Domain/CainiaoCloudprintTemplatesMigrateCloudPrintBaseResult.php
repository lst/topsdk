<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintTemplatesMigrateCloudPrintBaseResult {

    /**
        data
     **/
    private $data;

    /**
        errorCode
     **/
    private $error_code;

    /**
        errorMessage
     **/
    private $error_message;

    /**
        success
     **/
    private $success;


    public function getData() : CainiaoCloudprintTemplatesMigrateCustomAreaResult{
        return $this->data;
    }

    public function setData(CainiaoCloudprintTemplatesMigrateCustomAreaResult $data){
        $this->data = $data;
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

