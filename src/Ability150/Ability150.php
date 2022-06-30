<?php
namespace Topsdk\Topapi\Ability150;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceItemUpdateRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceCreatereqRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceCreateResultGetRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceApplyGetRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceRedCreatereqRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoicePaperInvalidRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoicePaperPrintRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceSerialnoGenerateRequest;
use Topsdk\Topapi\Ability150\Request\AlibabaEinvoiceSerialnoBatchGenerateRequest;

class Ability150 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        修改商品开票信息
    **/
    public function alibabaEinvoiceItemUpdate(AlibabaEinvoiceItemUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.item.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ERP开票请求接口
    **/
    public function alibabaEinvoiceCreatereq(AlibabaEinvoiceCreatereqRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.createreq", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ERP开票结果获取
    **/
    public function alibabaEinvoiceCreateResultGet(AlibabaEinvoiceCreateResultGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.create.result.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        开票申请数据获取接口
    **/
    public function alibabaEinvoiceApplyGet(AlibabaEinvoiceApplyGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.apply.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发票冲红接口
    **/
    public function alibabaEinvoiceRedCreatereq(AlibabaEinvoiceRedCreatereqRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.red.createreq", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        纸票作废接口
    **/
    public function alibabaEinvoicePaperInvalid(AlibabaEinvoicePaperInvalidRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.paper.invalid", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        纸票打印接口
    **/
    public function alibabaEinvoicePaperPrint(AlibabaEinvoicePaperPrintRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.einvoice.paper.print", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取统一开票流水号
    **/
    public function alibabaEinvoiceSerialnoGenerate(AlibabaEinvoiceSerialnoGenerateRequest $request) {
        return $this->client->execute("alibaba.einvoice.serialno.generate", $request->toMap(), $request->toFileParamMap());
    }
    /**
        开票流水号批量生成接口
    **/
    public function alibabaEinvoiceSerialnoBatchGenerate(AlibabaEinvoiceSerialnoBatchGenerateRequest $request) {
        return $this->client->execute("alibaba.einvoice.serialno.batch.generate", $request->toMap(), $request->toFileParamMap());
    }
}