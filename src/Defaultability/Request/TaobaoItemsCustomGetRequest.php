<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemsCustomGetRequest {

    /**
        需返回的字段列表，参考：Item商品结构体说明，其中barcode、sku.barcode等条形码字段暂不支持；多个字段之间用“,”分隔。
     **/
    private $fields;

    /**
        商品的外部商品ID，支持批量，最多不超过40个。
     **/
    private $outerId;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }


    public function getApiName() : string {
        return "taobao.items.custom.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertStructList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

