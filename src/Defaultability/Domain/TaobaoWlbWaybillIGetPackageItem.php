<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIGetPackageItem {

    /**
        商品数量
     **/
    private $count;

    /**
        商品名称
     **/
    private $item_name;


    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }


}

