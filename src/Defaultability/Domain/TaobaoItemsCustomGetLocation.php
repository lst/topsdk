<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetLocation {

    /**
        所在省份（中文名称）
     **/
    private $state;

    /**
        所在城市（中文名称）
     **/
    private $city;


    public function getState() : string{
        return $this->state;
    }

    public function setState(string $state){
        $this->state = $state;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }


}

