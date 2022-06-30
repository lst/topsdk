<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetCuntaoItemSpecific {

    /**
        村淘商品级佣金率
     **/
    private $kick_back_rate;


    public function getKickBackRate() : string{
        return $this->kick_back_rate;
    }

    public function setKickBackRate(string $kickBackRate){
        $this->kick_back_rate = $kickBackRate;
    }


}

