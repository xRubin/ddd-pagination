<?php declare(strict_types=1);

namespace ddd\pagination\values;

use ddd\pagination\interfaces\PaginationRequestInterface;
use Webmozart\Assert\Assert;

class PaginationRequest implements PaginationRequestInterface
{
    private int $page;
    private int $per_page;

    public function __construct(int $page, int $per_page)
    {
        Assert::greaterThan($page, 0, 'INVALID_PAGE');
        Assert::greaterThan($per_page, 0, 'INVALID_PER_PAGE');

        $this->page = $page;
        $this->per_page = $per_page;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->per_page;
    }

    public function jsonSerialize()
    {
        return [
            'page' => $this->getPage(),
            'per_page' => $this->getPerPage(),
        ];
    }
}