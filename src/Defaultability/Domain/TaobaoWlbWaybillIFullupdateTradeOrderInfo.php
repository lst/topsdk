<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbWaybillIFullupdateTradeOrderInfo {

    /**
        收货人地址
     **/
    private $consignee_address;

    /**
        收货人
     **/
    private $consignee_name;

    /**
        收货人联系方式
     **/
    private $consignee_phone;

    /**
        物流服务能力集合
     **/
    private $logistics_service_list;

    /**
        订单渠道
     **/
    private $order_channels_type;

    /**
        包裹中的商品类型
     **/
    private $package_items;

    /**
        快递服务产品类型编码
     **/
    private $product_type;

    /**
        发货人姓名
     **/
    private $send_name;

    /**
        发货人联系方式
     **/
    private $send_phone;

    /**
        交易订单列表
     **/
    private $trade_order_list;

    /**
        使用者ID
     **/
    private $real_user_id;

    /**
        包裹体积（立方厘米）
     **/
    private $volume;

    /**
        包裹重量（克）
     **/
    private $weight;

    /**
        包裹号(或者ERP订单号)
     **/
    private $package_id;


    public function getConsigneeAddress() : TaobaoWlbWaybillIFullupdateWaybillAddress{
        return $this->consignee_address;
    }

    public function setConsigneeAddress(TaobaoWlbWaybillIFullupdateWaybillAddress $consigneeAddress){
        $this->consignee_address = $consigneeAddress;
    }

    public function getConsigneeName() : string{
        return $this->consignee_name;
    }

    public function setConsigneeName(string $consigneeName){
        $this->consignee_name = $consigneeName;
    }

    public function getConsigneePhone() : string{
        return $this->consignee_phone;
    }

    public function setConsigneePhone(string $consigneePhone){
        $this->consignee_phone = $consigneePhone;
    }

    public function getLogisticsServiceList() : array{
        return $this->logistics_service_list;
    }

    public function setLogisticsServiceList(array $logisticsServiceList){
        $this->logistics_service_list = $logisticsServiceList;
    }

    public function getOrderChannelsType() : string{
        return $this->order_channels_type;
    }

    public function setOrderChannelsType(string $orderChannelsType){
        $this->order_channels_type = $orderChannelsType;
    }

    public function getPackageItems() : array{
        return $this->package_items;
    }

    public function setPackageItems(array $packageItems){
        $this->package_items = $packageItems;
    }

    public function getProductType() : string{
        return $this->product_type;
    }

    public function setProductType(string $productType){
        $this->product_type = $productType;
    }

    public function getSendName() : string{
        return $this->send_name;
    }

    public function setSendName(string $sendName){
        $this->send_name = $sendName;
    }

    public function getSendPhone() : string{
        return $this->send_phone;
    }

    public function setSendPhone(string $sendPhone){
        $this->send_phone = $sendPhone;
    }

    public function getTradeOrderList() : array{
        return $this->trade_order_list;
    }

    public function setTradeOrderList(array $tradeOrderList){
        $this->trade_order_list = $tradeOrderList;
    }

    public function getRealUserId() : int{
        return $this->real_user_id;
    }

    public function setRealUserId(int $realUserId){
        $this->real_user_id = $realUserId;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getPackageId() : string{
        return $this->package_id;
    }

    public function setPackageId(string $packageId){
        $this->package_id = $packageId;
    }


}

