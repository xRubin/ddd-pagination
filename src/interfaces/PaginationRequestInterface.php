<?php declare(strict_types=1);

namespace ddd\pagination\interfaces;

interface PaginationRequestInterface extends \JsonSerializable
{
    /**
     * @return int
     */
    public function getPage(): int;

    /**
     * @return int
     */
    public function getPerPage(): int;
}