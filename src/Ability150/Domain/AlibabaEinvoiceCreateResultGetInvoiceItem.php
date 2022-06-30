<?php
namespace Topsdk\Topapi\Ability150\Domain;

class AlibabaEinvoiceCreateResultGetInvoiceItem {

    /**
        单位
     **/
    private $unit;

    /**
        总价，格式：100.00(不含税)
     **/
    private $sum_price;

    /**
        税额
     **/
    private $tax;

    /**
        单价，格式：100.00(不含税)
     **/
    private $price;

    /**
        税收分类编码
     **/
    private $item_no;

    /**
        发票项目名称（或商品名称）
     **/
    private $item_name;

    /**
        规格型号,可选
     **/
    private $specification;

    /**
        数量
     **/
    private $quantity;

    /**
        税率。税率只能为0或0.03或0.04或0.06或0.11或0.13或0.17
     **/
    private $tax_rate;

    /**
        发票行性质。0表示正常行，1表示折扣行，2表示被折扣行。比如充电器单价100元，折扣10元，则明细为2行，充电器行性质为2，折扣行性质为1。如果充电器没有折扣，则值应为0
     **/
    private $row_type;

    /**
        价税合计。(等于sumPrice和tax之和)
     **/
    private $amount;

    /**
        0税率标识，0=出口零税率，1=免税，2=不征收，3=普通零税率
     **/
    private $zero_rate_flag;

    /**
        商品的外部系统id，如果有sku则取sku的outerId，否则取item的outerId，，阿里发票平台自动开票时才有
     **/
    private $outer_id;

    /**
        淘宝子订单号，阿里发票平台自动开票时才有
     **/
    private $biz_order_id;

    /**
        是否为运费行，，阿里发票平台自动开票时才有
     **/
    private $is_post_fee_row;


    public function getUnit() : string{
        return $this->unit;
    }

    public function setUnit(string $unit){
        $this->unit = $unit;
    }

    public function getSumPrice() : string{
        return $this->sum_price;
    }

    public function setSumPrice(string $sumPrice){
        $this->sum_price = $sumPrice;
    }

    public function getTax() : string{
        return $this->tax;
    }

    public function setTax(string $tax){
        $this->tax = $tax;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getItemNo() : string{
        return $this->item_no;
    }

    public function setItemNo(string $itemNo){
        $this->item_no = $itemNo;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getSpecification() : string{
        return $this->specification;
    }

    public function setSpecification(string $specification){
        $this->specification = $specification;
    }

    public function getQuantity() : string{
        return $this->quantity;
    }

    public function setQuantity(string $quantity){
        $this->quantity = $quantity;
    }

    public function getTaxRate() : string{
        return $this->tax_rate;
    }

    public function setTaxRate(string $taxRate){
        $this->tax_rate = $taxRate;
    }

    public function getRowType() : string{
        return $this->row_type;
    }

    public function setRowType(string $rowType){
        $this->row_type = $rowType;
    }

    public function getAmount() : string{
        return $this->amount;
    }

    public function setAmount(string $amount){
        $this->amount = $amount;
    }

    public function getZeroRateFlag() : string{
        return $this->zero_rate_flag;
    }

    public function setZeroRateFlag(string $zeroRateFlag){
        $this->zero_rate_flag = $zeroRateFlag;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getIsPostFeeRow() : bool{
        return $this->is_post_fee_row;
    }

    public function setIsPostFeeRow(bool $isPostFeeRow){
        $this->is_post_fee_row = $isPostFeeRow;
    }


}

