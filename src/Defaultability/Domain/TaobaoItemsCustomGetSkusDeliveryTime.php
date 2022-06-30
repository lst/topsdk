<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetSkusDeliveryTime {

    /**
        sku时间
     **/
    private $sku_delivery_time;

    /**
        商品skuId
     **/
    private $sku_id;


    public function getSkuDeliveryTime() : string{
        return $this->sku_delivery_time;
    }

    public function setSkuDeliveryTime(string $skuDeliveryTime){
        $this->sku_delivery_time = $skuDeliveryTime;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }


}

