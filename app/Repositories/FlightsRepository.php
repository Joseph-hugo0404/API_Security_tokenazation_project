<?php

namespace App\Repositories;

use App\Models\Flights;
use App\Repositories\BaseRepository;

/**
 * Class FlightsRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:34 am UTC
*/

class FlightsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'origin',
        'destination',
        'flight_no',
        'departure_date',
        'arrival_date',
        'passenger_name',
        'age'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Flights::class;
    }
}
