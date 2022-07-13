<?php declare(strict_types=1);

namespace ddd\pagination\values;

use ddd\pagination\interfaces\PaginationContainerInterface;
use ddd\pagination\interfaces\PaginationResponseInterface;

class PaginationContainer implements PaginationContainerInterface
{
    private array $data;
    private ?PaginationResponseInterface $pagination = null;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return PaginationResponseInterface|null
     */
    public function getPagination(): ?PaginationResponseInterface
    {
        return $this->pagination;
    }

    /**
     * @param PaginationResponseInterface|null $pagination
     * @return PaginationContainerInterface
     */
    public function setPagination(?PaginationResponseInterface $pagination): PaginationContainerInterface
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'data' => $this->getData(),
            'pagination' => $this->getPagination(),
        ];
    }
}