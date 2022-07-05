<?php
namespace Topsdk\Topapi\Ability1234\Domain;
use JsonSerializable;

class AlibabaEinvoiceMerchantCreatereqInvoiceItem implements JsonSerializable{

    /**
        总价，格式：100.00； <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
     **/
    private $sum_price;

    /**
        税额； <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
     **/
    private $tax;

    /**
        单价，格式：100.00。新版电子发票，折扣行此参数不能传，非折扣行必传；红票、蓝票都为正数
     **/
    private $price;

    /**
        发票项目编号（或商品编号）
     **/
    private $item_no;

    /**
        单位。新版电子发票，折扣行不能传，非折扣行必传
     **/
    private $unit;

    /**
        发票项目名称（或商品名称）
     **/
    private $item_name;

    /**
        税率。税率只能为0或0.03或0.04或0.06或0.11或0.13或0.17
     **/
    private $tax_rate;

    /**
        发票行性质。0表示正常行，1表示折扣行，2表示被折扣行。比如充电器单价100元，折扣10元，则明细为2行，充电器行性质为2，折扣行性质为1。如果充电器没有折扣，则值应为0
     **/
    private $row_type;

    /**
        数量。新版电子发票，折扣行此参数不能传，非折扣行必传； <span style="color:red;font-weight: bold;">当开红票时，该字段需为负数</span>
     **/
    private $quantity;

    /**
        规格型号,可选
     **/
    private $specification;

    /**
        价税合计。(等于sumPrice和tax之和) <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
     **/
    private $amount;


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

    public function getUnit() : string{
        return $this->unit;
    }

    public function setUnit(string $unit){
        $this->unit = $unit;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
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

    public function getQuantity() : string{
        return $this->quantity;
    }

    public function setQuantity(string $quantity){
        $this->quantity = $quantity;
    }

    public function getSpecification() : string{
        return $this->specification;
    }

    public function setSpecification(string $specification){
        $this->specification = $specification;
    }

    public function getAmount() : string{
        return $this->amount;
    }

    public function setAmount(string $amount){
        $this->amount = $amount;
    }

    public function jsonSerialize(){
        return [
            'sum_price' => $this->sum_price,
            'tax' => $this->tax,
            'price' => $this->price,
            'item_no' => $this->item_no,
            'unit' => $this->unit,
            'item_name' => $this->item_name,
            'tax_rate' => $this->tax_rate,
            'row_type' => $this->row_type,
            'quantity' => $this->quantity,
            'specification' => $this->specification,
            'amount' => $this->amount,
        ];
    }


}

