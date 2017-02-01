<?php
namespace App\Repositories;

use App\Models\Condition;

class ConditionRepository extends Condition
{

    /**
     * Get all conditions
     * @return array
     */
    public function getAllConditions()
    {
        return $this->lists('conditionitem', 'conditionitem')
            ->toArray();
    }
}
