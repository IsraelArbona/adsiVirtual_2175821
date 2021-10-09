<?php

namespace App\Exports;

use App\Ciudad;

use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\AfterSheet;

class CiudadsExport implements FromCollection,Responsable,WithHeadings,ShouldAutoSize,WithEvents
{
    use Exportable;

    private $fileName = 'Ciudades-list.xlsx';
    private $writerType = Excel::XLSX;
    
    public function title(): string
    {
        return 'Reporte de Ciudades';
    }

    public function collection()
    {
        return $ciudads = Ciudad::select([
            'ciudads.id',
            'ciudads.nombre',
            'dptos.id as did',
            'dptos.nombre as dnombre',
            'pais.nombre as pnombre'])
            ->join('dptos', 'ciudads.dpto_id','=','dptos.id')
            ->join('pais','dptos.pais_id','=','pais_id')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Cod. Ciudad',
            'Ciudad',
            'Cod. Dpto',
            'Departamento',
            'Pais',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $cellRange = 'A1:E1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->setAutoFilter($cellRange);
            },
        ];
    }

}