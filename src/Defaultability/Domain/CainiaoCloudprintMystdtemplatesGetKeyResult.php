<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintMystdtemplatesGetKeyResult {

    /**
        key的名称
     **/
    private $key_name;


    public function getKeyName() : string{
        return $this->key_name;
    }

    public function setKeyName(string $keyName){
        $this->key_name = $keyName;
    }


}

