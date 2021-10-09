<?php

namespace App\Imports;

use App\Dpto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DptosImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Dpto|null
     */
    public function model(array $row)
    {
        if (!isset($row['id'])){
            return null;
        }

        return new Dpto([
           'id'         => $row['id'],
           'nombre'     => $row['nombre'],
           'pais_id'      => $row['pais_id'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}