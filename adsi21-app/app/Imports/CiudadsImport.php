<?php

namespace App\Imports;

use App\Ciudad;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CiudadsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Ciudad|null
     */
    public function model(array $row)
    {
        if (!isset($row['id'])){
            return null;
        }

        return new Ciudad([
           'id'         => $row['id'],
           'nombre'     => $row['nombre'],
           'dpto_id'      => $row['dpto_id'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}