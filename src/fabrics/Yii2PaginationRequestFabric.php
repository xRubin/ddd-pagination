<?php declare(strict_types=1);

namespace ddd\pagination\fabrics;

use ddd\pagination\interfaces\PaginationRequestFabricInterface;
use ddd\pagination\interfaces\PaginationRequestInterface;
use ddd\pagination\values\PaginationRequest;

class Yii2PaginationRequestFabric implements PaginationRequestFabricInterface
{
    public $pageParam = 'page';
    public $pageSizeParam = 'per-page';
    public $defaultPageSize = 20;

    /**
     * psr в yii2 так и не доделали
     * @param \yii\web\Request $request
     * @return PaginationRequestInterface
     */
    public function buildRequest($request): PaginationRequestInterface
    {
        return new PaginationRequest(
            (int)$request->getQueryParam($this->pageParam, 1),
            (int)$request->getQueryParam($this->pageSizeParam, $this->defaultPageSize),
        );
    }
}