<?php declare(strict_types=1);

namespace ddd\pagination\fabrics;

use ddd\pagination\interfaces\PaginationResponseFabricInterface;
use ddd\pagination\interfaces\PaginationResponseInterface;
use ddd\pagination\values\PaginationResponse;

class Yii2PaginationResponseFabric implements PaginationResponseFabricInterface
{
    public $totalCountHeader = 'X-Pagination-Total-Count';
    public $pageCountHeader = 'X-Pagination-Page-Count';
    public $currentPageHeader = 'X-Pagination-Current-Page';
    public $perPageHeader = 'X-Pagination-Per-Page';

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return PaginationResponseInterface
     */
    public function buildResponse($response): PaginationResponseInterface
    {
        return new PaginationResponse(
            (int)$response->getHeaderLine($this->totalCountHeader),
            (int)$response->getHeaderLine($this->pageCountHeader),
            (int)$response->getHeaderLine($this->currentPageHeader),
            (int)$response->getHeaderLine($this->perPageHeader),
        );
    }
}