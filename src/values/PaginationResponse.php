<?php declare(strict_types=1);

namespace ddd\pagination\values;

use ddd\pagination\interfaces\PaginationResponseInterface;

class PaginationResponse implements PaginationResponseInterface
{
    private int $totalCount;
    private int $pageCount;
    private int $currentPage;
    private int $perPage;

    public function __construct(int $totalCount, int $pageCount, int $currentPage, int $perPage)
    {
        $this->totalCount = $totalCount;
        $this->pageCount = $pageCount;
        $this->currentPage = $currentPage;
        $this->perPage = $perPage;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return int
     */
    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'total_count' => $this->getTotalCount(),
            'page_count' => $this->getPageCount(),
            'current_page' => $this->getCurrentPage(),
            'per_page' => $this->getPerPage(),
        ];
    }
}