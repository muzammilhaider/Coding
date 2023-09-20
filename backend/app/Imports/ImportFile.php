<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportFile implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $data = $collection[0]->toArray()->forget($collection->keys()->first());
        foreach ($data as $row) {
            //
        }
    }
}
