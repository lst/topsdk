<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetLocalityLife {

    /**
        电子交易凭证有效期，有三种格式：如果有效期为起止日期类型，此值为2012-08-06,2012-08-16 如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为15
     **/
    private $expirydate;

    /**
        网点ID,在参数empty_fields里设置locality_life.network_id可删除网点ID
     **/
    private $network_id;

    /**
        格式为 码商id:nick
     **/
    private $merchant;

    /**
        核销打款:1代表核销打款,0代表非核销打款;在参数empty_fields里设置locality_life.verification可删除核销打款
     **/
    private $verification;

    /**
        退款比例，百分比%前的数字，1-100的正整数值；在参数empty_fields里设置locality_life.refund_ratio可删除退款比例
     **/
    private $refund_ratio;

    /**
        预约门店是否支持门店自提,1:是
     **/
    private $obs;

    /**
        电子凭证版本：新版电子凭证：1，旧版不填值
     **/
    private $version;

    /**
        新版电子凭证包 id
     **/
    private $packageid;


    public function getExpirydate() : string{
        return $this->expirydate;
    }

    public function setExpirydate(string $expirydate){
        $this->expirydate = $expirydate;
    }

    public function getNetworkId() : string{
        return $this->network_id;
    }

    public function setNetworkId(string $networkId){
        $this->network_id = $networkId;
    }

    public function getMerchant() : string{
        return $this->merchant;
    }

    public function setMerchant(string $merchant){
        $this->merchant = $merchant;
    }

    public function getVerification() : string{
        return $this->verification;
    }

    public function setVerification(string $verification){
        $this->verification = $verification;
    }

    public function getRefundRatio() : int{
        return $this->refund_ratio;
    }

    public function setRefundRatio(int $refundRatio){
        $this->refund_ratio = $refundRatio;
    }

    public function getObs() : string{
        return $this->obs;
    }

    public function setObs(string $obs){
        $this->obs = $obs;
    }

    public function getVersion() : string{
        return $this->version;
    }

    public function setVersion(string $version){
        $this->version = $version;
    }

    public function getPackageid() : string{
        return $this->packageid;
    }

    public function setPackageid(string $packageid){
        $this->packageid = $packageid;
    }


}

