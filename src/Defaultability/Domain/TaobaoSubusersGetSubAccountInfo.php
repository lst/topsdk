<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSubusersGetSubAccountInfo {

    /**
        123456
     **/
    private $sub_id;

    /**
        1
     **/
    private $sub_status;

    /**
        654321
     **/
    private $user_id;

    /**
        true
     **/
    private $sub_dispatch_status;

    /**
        true
     **/
    private $sub_owed_status;

    /**
        zhangsan:no1
     **/
    private $sub_nick;

    /**
        zhangsan
     **/
    private $user_nick;

    /**
        小红
     **/
    private $sub_name;


    public function getSubId() : int{
        return $this->sub_id;
    }

    public function setSubId(int $subId){
        $this->sub_id = $subId;
    }

    public function getSubStatus() : int{
        return $this->sub_status;
    }

    public function setSubStatus(int $subStatus){
        $this->sub_status = $subStatus;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getSubDispatchStatus() : bool{
        return $this->sub_dispatch_status;
    }

    public function setSubDispatchStatus(bool $subDispatchStatus){
        $this->sub_dispatch_status = $subDispatchStatus;
    }

    public function getSubOwedStatus() : bool{
        return $this->sub_owed_status;
    }

    public function setSubOwedStatus(bool $subOwedStatus){
        $this->sub_owed_status = $subOwedStatus;
    }

    public function getSubNick() : string{
        return $this->sub_nick;
    }

    public function setSubNick(string $subNick){
        $this->sub_nick = $subNick;
    }

    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }

    public function getSubName() : string{
        return $this->sub_name;
    }

    public function setSubName(string $subName){
        $this->sub_name = $subName;
    }


}

