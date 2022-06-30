<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIFullupdateWaybillAddress {

    /**
        详细地址
     **/
    private $address_detail;

    /**
        区名称（三级地址）
     **/
    private $area;

    /**
        市名称（二级地址）
     **/
    private $city;

    /**
        一级地址（省、直辖市
     **/
    private $province;

    /**
        街道\镇名称（四级地址）
     **/
    private $town;


    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }


}

