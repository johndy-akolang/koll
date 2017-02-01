<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends Category
{

    /**
     * Get all categories
     * @return array
     */
    public function getAllCategories()
    {
        return $this->lists('categorylist', 'categorylist')
            ->toArray();
    }
}
