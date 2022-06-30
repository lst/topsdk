<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoWaybillIiSearchWaybillBranchAccount {

    /**
        已用面单数量
     **/
    private $allocated_quantity;

    /**
        网点Code
     **/
    private $branch_code;

    /**
        网点名称
     **/
    private $branch_name;

    /**
        网点状态
     **/
    private $branch_status;

    /**
        取消的面单总数
     **/
    private $cancel_quantity;

    /**
        已经打印的面单总数
     **/
    private $print_quantity;

    /**
        电子面单余额数量
     **/
    private $quantity;

    /**
        当前网点下的发货地址
     **/
    private $shipp_address_cols;

    /**
        可用的服务信息列表
     **/
    private $service_info_cols;

    /**
        号段信息
     **/
    private $segment_code;

    /**
        品牌code
     **/
    private $brand_code;

    /**
        月结卡号列表
     **/
    private $customer_code_list;

    /**
        月结卡号map，key为shipp_address_cols.waybill_address_id,value为月结卡号。jsonString
     **/
    private $customer_code_map;


    public function getAllocatedQuantity() : int{
        return $this->allocated_quantity;
    }

    public function setAllocatedQuantity(int $allocatedQuantity){
        $this->allocated_quantity = $allocatedQuantity;
    }

    public function getBranchCode() : string{
        return $this->branch_code;
    }

    public function setBranchCode(string $branchCode){
        $this->branch_code = $branchCode;
    }

    public function getBranchName() : string{
        return $this->branch_name;
    }

    public function setBranchName(string $branchName){
        $this->branch_name = $branchName;
    }

    public function getBranchStatus() : int{
        return $this->branch_status;
    }

    public function setBranchStatus(int $branchStatus){
        $this->branch_status = $branchStatus;
    }

    public function getCancelQuantity() : int{
        return $this->cancel_quantity;
    }

    public function setCancelQuantity(int $cancelQuantity){
        $this->cancel_quantity = $cancelQuantity;
    }

    public function getPrintQuantity() : int{
        return $this->print_quantity;
    }

    public function setPrintQuantity(int $printQuantity){
        $this->print_quantity = $printQuantity;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getShippAddressCols() : array{
        return $this->shipp_address_cols;
    }

    public function setShippAddressCols(array $shippAddressCols){
        $this->shipp_address_cols = $shippAddressCols;
    }

    public function getServiceInfoCols() : array{
        return $this->service_info_cols;
    }

    public function setServiceInfoCols(array $serviceInfoCols){
        $this->service_info_cols = $serviceInfoCols;
    }

    public function getSegmentCode() : string{
        return $this->segment_code;
    }

    public function setSegmentCode(string $segmentCode){
        $this->segment_code = $segmentCode;
    }

    public function getBrandCode() : string{
        return $this->brand_code;
    }

    public function setBrandCode(string $brandCode){
        $this->brand_code = $brandCode;
    }

    public function getCustomerCodeList() : array{
        return $this->customer_code_list;
    }

    public function setCustomerCodeList(array $customerCodeList){
        $this->customer_code_list = $customerCodeList;
    }

    public function getCustomerCodeMap() : array{
        return $this->customer_code_map;
    }

    public function setCustomerCodeMap(array $customerCodeMap){
        $this->customer_code_map = $customerCodeMap;
    }


}

