<?php declare(strict_types=1);

namespace ddd\pagination\interfaces;

interface PaginationResponseInterface extends \JsonSerializable
{
    /**
     * @return int
     */
    public function getTotalCount(): int;

    /**
     * @return int
     */
    public function getPageCount(): int;

    /**
     * @return int
     */
    public function getCurrentPage(): int;

    /**
     * @return int
     */
    public function getPerPage(): int;
}