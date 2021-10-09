<?php

namespace App\Imports;

use App\Pais;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PaisesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Pais|null
     */
    public function model(array $row)
    {
        if (!isset($row['id'])){
            return null;
        }

        return new Pais([
           'id'         => $row['id'],
           'nombre'     => $row['nombre'],
           'abrev'      => $row['abrev'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}