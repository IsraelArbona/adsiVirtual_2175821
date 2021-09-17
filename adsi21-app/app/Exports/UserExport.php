<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\AfterSheet;

class UserExport implements FromCollection,Responsable,WithHeadings,ShouldAutoSize,WithEvents
{
    use Exportable;

    private $fileName = 'User-list.xlsx';
    private $writerType = Excel::XLSX;
    
    public function title(): string
    {
        return 'Reporte de Usuarios';
    }

    public function collection()
    {
        return $users = User::select(['users.id','users.name','users.email'])->get();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nom. Usuarios',
            'Correo',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $cellRange = 'A1:C1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->setAutoFilter($cellRange);
            },
        ];
    }

}