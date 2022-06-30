<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetDeliveryTime {

    /**
        设置是否使用发货时间，商品级别，sku级别
     **/
    private $need_delivery_time;

    /**
        发货时间类型：绝对发货时间或者相对发货时间
     **/
    private $delivery_time_type;

    /**
        商品级别设置的发货时间。设置了商品级别的发货时间，相对发货时间，则填写相对发货时间的天数（大于3）；绝对发货时间，则填写yyyy-mm-dd格式，如2013-11-11
     **/
    private $delivery_time;

    /**
        发货时间列表
     **/
    private $skus_delivery_time_list;


    public function getNeedDeliveryTime() : string{
        return $this->need_delivery_time;
    }

    public function setNeedDeliveryTime(string $needDeliveryTime){
        $this->need_delivery_time = $needDeliveryTime;
    }

    public function getDeliveryTimeType() : string{
        return $this->delivery_time_type;
    }

    public function setDeliveryTimeType(string $deliveryTimeType){
        $this->delivery_time_type = $deliveryTimeType;
    }

    public function getDeliveryTime() : string{
        return $this->delivery_time;
    }

    public function setDeliveryTime(string $deliveryTime){
        $this->delivery_time = $deliveryTime;
    }

    public function getSkusDeliveryTimeList() : array{
        return $this->skus_delivery_time_list;
    }

    public function setSkusDeliveryTimeList(array $skusDeliveryTimeList){
        $this->skus_delivery_time_list = $skusDeliveryTimeList;
    }


}

