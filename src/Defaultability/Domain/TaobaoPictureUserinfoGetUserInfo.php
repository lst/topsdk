<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoPictureUserinfoGetUserInfo {

    /**
        用户订购的图片空间容量
     **/
    private $order_space;

    /**
        已使用的图片空间容量
     **/
    private $used_space;

    /**
        剩余的图片空间容量
     **/
    private $remaining_space;

    /**
        用户的可用容量，即订购量与免费量之和
     **/
    private $available_space;

    /**
        图片空间的免费容量
     **/
    private $free_space;

    /**
        图片空间的订购有效期
     **/
    private $order_expiry_date;

    /**
        用户自定义的水印参数，通过"|"分割开，如果用户没有定义则为""
具体水印参数组合方法，用"|"分开，顺序按"是否全局设置|水印文字|是否文字水印优先|透明度|字体|字体大小|字体是否加粗|字体是否斜体|字体是否加下划线|字体颜色|旋转角度|是否带阴影|水印位置|图片水印URL|reference水印相对位置" reference取值有左上（1）/中间（3）/右下（2）,其中的null代表为空
     **/
    private $water_mark;


    public function getOrderSpace() : string{
        return $this->order_space;
    }

    public function setOrderSpace(string $orderSpace){
        $this->order_space = $orderSpace;
    }

    public function getUsedSpace() : string{
        return $this->used_space;
    }

    public function setUsedSpace(string $usedSpace){
        $this->used_space = $usedSpace;
    }

    public function getRemainingSpace() : string{
        return $this->remaining_space;
    }

    public function setRemainingSpace(string $remainingSpace){
        $this->remaining_space = $remainingSpace;
    }

    public function getAvailableSpace() : string{
        return $this->available_space;
    }

    public function setAvailableSpace(string $availableSpace){
        $this->available_space = $availableSpace;
    }

    public function getFreeSpace() : string{
        return $this->free_space;
    }

    public function setFreeSpace(string $freeSpace){
        $this->free_space = $freeSpace;
    }

    public function getOrderExpiryDate() : string{
        return $this->order_expiry_date;
    }

    public function setOrderExpiryDate(string $orderExpiryDate){
        $this->order_expiry_date = $orderExpiryDate;
    }

    public function getWaterMark() : string{
        return $this->water_mark;
    }

    public function setWaterMark(string $waterMark){
        $this->water_mark = $waterMark;
    }


}
