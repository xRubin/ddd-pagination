<?php declare(strict_types=1);

namespace ddd\pagination\interfaces;

interface PaginationRequestFabricInterface
{
    public function buildRequest($request): PaginationRequestInterface;
}
