<?php
namespace Topsdk\Topapi\Ability1234;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1234\Request\AlibabaEinvoiceMerchantCreatereqRequest;
use Topsdk\Topapi\Ability1234\Request\AlibabaEinvoiceMerchantResultGetRequest;

class Ability1234 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        商家自研ERP开票请求接口
    **/
    public function alibabaEinvoiceMerchantCreatereq(AlibabaEinvoiceMerchantCreatereqRequest $request) {
        return $this->client->execute("alibaba.einvoice.merchant.createreq", $request->toMap(), $request->toFileParamMap());
    }
    /**
        商家自研ERP开票结果获取
    **/
    public function alibabaEinvoiceMerchantResultGet(AlibabaEinvoiceMerchantResultGetRequest $request) {
        return $this->client->execute("alibaba.einvoice.merchant.result.get", $request->toMap(), $request->toFileParamMap());
    }
}