<?php 

namespace Core\Domain\Entity\Traits;
use Exception;

trait MagicMethodsTrait
{
  public function __get($property)
    {
        if (isset($this->$property)) {
            return $this->$property;
        }
        throw new Exception('Property ' . $property . ' not found inn class ' . __CLASS__);
    }
}