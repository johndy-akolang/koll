<?php
namespace App\Repositories;

use App\Models\Province;

class ProvinceRepository extends Province
{

    /**
     * Get all provinces
     * @return array
     */
    public function getAllProvinces()
    {
        return $this->orderBy('provincelist', 'asc')
            ->lists('provincelist', 'provincelist')
            ->toArray();
    }
}
