<?php declare(strict_types=1);

namespace ddd\pagination\interfaces;

interface  PaginationResponseFabricInterface
{
    public function buildResponse($response): PaginationResponseInterface;
}