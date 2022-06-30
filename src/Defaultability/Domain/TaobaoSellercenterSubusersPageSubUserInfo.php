<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercenterSubusersPageSubUserInfo {

    /**
        是否参与分流 1不参与 2参与
     **/
    private $is_online;

    /**
        子账号Id
     **/
    private $sub_id;

    /**
        子账号当前状态 1正常 -1删除  2冻结
     **/
    private $status;

    /**
        子账号所属的主账号的唯一标识
     **/
    private $seller_id;

    /**
        子账号用户名
     **/
    private $nick;

    /**
        主账号昵称
     **/
    private $seller_nick;

    /**
        子账号姓名
     **/
    private $full_name;


    public function getIsOnline() : int{
        return $this->is_online;
    }

    public function setIsOnline(int $isOnline){
        $this->is_online = $isOnline;
    }

    public function getSubId() : int{
        return $this->sub_id;
    }

    public function setSubId(int $subId){
        $this->sub_id = $subId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getFullName() : string{
        return $this->full_name;
    }

    public function setFullName(string $fullName){
        $this->full_name = $fullName;
    }


}

