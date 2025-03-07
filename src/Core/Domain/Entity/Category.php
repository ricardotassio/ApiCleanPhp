<?php 

namespace Core\Domain\Entity;

class Category
{
  use Traits\MagicMethodsTrait;

    public function __construct(
        protected int $id,
        protected string $name,
        protected string $description,
        protected bool $isActive = true,
    )
    {
    }
}