<?php declare(strict_types=1);

namespace ddd\pagination\interfaces;

interface PaginationContainerInterface extends \JsonSerializable
{
    /**
     * @return array
     */
    public function getData(): array;

    /**
     * @return PaginationResponseInterface|null
     */
    public function getPagination(): ?PaginationResponseInterface;

    /**
     * @param PaginationResponseInterface|null $pagination
     * @return PaginationContainerInterface
     */
    public function setPagination(?PaginationResponseInterface $pagination): PaginationContainerInterface;
}