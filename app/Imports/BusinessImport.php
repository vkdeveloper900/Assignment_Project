<?php

namespace App\Imports;

use App\Models\Business;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class BusinessImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            Business::create([
                'business_name' => $row[1],
                'area' => $row[8],
                'city' => $row[9],
                'mobile_no' => $row[6],
                'category' => $row[2],
                'sub_category' => $row[5],
            ]);
        }
    }
}
