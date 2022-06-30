<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSchemaIncrementUpdateRequest {

    /**
        需要编辑的商品ID
     **/
    private $itemId;

    /**
        根据tmall.item.increment.update.schema.get生成的商品增量编辑规则入参数据。需要更新的字段，一定要在入参的XML重点update_fields字段中明确指明
     **/
    private $xmlData;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getXmlData() : string{
        return $this->xmlData;
    }

    public function setXmlData(string $xmlData){
        $this->xmlData = $xmlData;
    }


    public function getApiName() : string {
        return "tmall.item.schema.increment.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->xmlData)) {
            $requestParam["xml_data"] = TopUtil::convertBasic($this->xmlData);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

