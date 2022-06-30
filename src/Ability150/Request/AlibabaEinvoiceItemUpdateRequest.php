<?php
namespace Topsdk\Topapi\Ability150\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaEinvoiceItemUpdateRequest {

    /**
        商品的开票名称，对应发票的货物劳务名称，值DELETE时表示删除
     **/
    private $invoiceName;

    /**
        商品id，优先级高于outerId，商品必须归属于店铺，itemId和outerId不能同时为空
     **/
    private $itemId;

    /**
        税收分类编码，需要精确到叶子节点，必须和taxRate同时修改或删除，值DELETE时表示删除
     **/
    private $itemNo;

    /**
        skuId，必须是itemId下的sku，填写skuId后，修改和删除sku的开票信息
     **/
    private $skuId;

    /**
        规格型号，值DELETE时表示删除
     **/
    private $specification;

    /**
        税率，可选值0，3，4，5，6，10，11，13， 16，17，必须和itemNo同时修改或删除,值为DELETE时表示删除
     **/
    private $taxRate;

    /**
        0税率标识，只有税率为0的情况才有值，0=出口零税率，1=免税，2=不征收，3=普通零税率，值为DELETE时表示删除
     **/
    private $zeroRateFlag;

    /**
        单位，值DELETE时表示删除
     **/
    private $unit;

    /**
        商家外部商品id，如果outerId对应了多个天猫sku，则会更新所有的sku开票信息。itemId和outerId不能同时为空
     **/
    private $outerId;

    /**
        是否根据outerId更新所有对应sku的开票信息，true=更新，false=开票信息维护在发票平台；自动开票时，根据skuId获取outerId，再根据outerId查询开票信息。outerId不为空时必填
     **/
    private $updateSku;


    public function getInvoiceName() : string{
        return $this->invoiceName;
    }

    public function setInvoiceName(string $invoiceName){
        $this->invoiceName = $invoiceName;
    }

    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getItemNo() : string{
        return $this->itemNo;
    }

    public function setItemNo(string $itemNo){
        $this->itemNo = $itemNo;
    }

    public function getSkuId() : int{
        return $this->skuId;
    }

    public function setSkuId(int $skuId){
        $this->skuId = $skuId;
    }

    public function getSpecification() : string{
        return $this->specification;
    }

    public function setSpecification(string $specification){
        $this->specification = $specification;
    }

    public function getTaxRate() : string{
        return $this->taxRate;
    }

    public function setTaxRate(string $taxRate){
        $this->taxRate = $taxRate;
    }

    public function getZeroRateFlag() : string{
        return $this->zeroRateFlag;
    }

    public function setZeroRateFlag(string $zeroRateFlag){
        $this->zeroRateFlag = $zeroRateFlag;
    }

    public function getUnit() : string{
        return $this->unit;
    }

    public function setUnit(string $unit){
        $this->unit = $unit;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getUpdateSku() : bool{
        return $this->updateSku;
    }

    public function setUpdateSku(bool $updateSku){
        $this->updateSku = $updateSku;
    }


    public function getApiName() : string {
        return "alibaba.einvoice.item.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->invoiceName)) {
            $requestParam["invoice_name"] = TopUtil::convertBasic($this->invoiceName);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->itemNo)) {
            $requestParam["item_no"] = TopUtil::convertBasic($this->itemNo);
        }

        if (!TopUtil::checkEmpty($this->skuId)) {
            $requestParam["sku_id"] = TopUtil::convertBasic($this->skuId);
        }

        if (!TopUtil::checkEmpty($this->specification)) {
            $requestParam["specification"] = TopUtil::convertBasic($this->specification);
        }

        if (!TopUtil::checkEmpty($this->taxRate)) {
            $requestParam["tax_rate"] = TopUtil::convertBasic($this->taxRate);
        }

        if (!TopUtil::checkEmpty($this->zeroRateFlag)) {
            $requestParam["zero_rate_flag"] = TopUtil::convertBasic($this->zeroRateFlag);
        }

        if (!TopUtil::checkEmpty($this->unit)) {
            $requestParam["unit"] = TopUtil::convertBasic($this->unit);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->updateSku)) {
            $requestParam["update_sku"] = TopUtil::convertBasic($this->updateSku);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

