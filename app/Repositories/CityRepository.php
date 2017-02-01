<?php
namespace App\Repositories;

use App\Models\City;

class CityRepository extends City
{
    /**
     * Get all cities
     * @return array
     */
    public function getAllCities()
    {
        return $this->orderBy('citylist', 'asc')
            ->lists('citylist', 'citylist')
            ->toArray();
    }
}
