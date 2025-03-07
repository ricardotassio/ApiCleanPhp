<?php 

namespace Tests\Unit\Domain\Entity;
use PHPUnit\Framework\TestCase;
use Core\Domain\Entity\Category;

class CategoryUnitTest extends TestCase
{
    public function testAttributes()
    {
        $category  = new Category(
          id: '12',
          name: 'New Category',
          description: 'Description',
          isActive: true,
        );

        $this->assertEquals('New Category', $category->name);
        $this->assertEquals('Description', $category->description);
        $this->assertEquals('true', $category->isActive);
    }
}