<?php

namespace App\Exports;

use App\Models\Fan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FansExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $torcedores = Fan::select('name', 'document', 
                        'cep', 'address', 'district', 
                        'city', 'uf', 'telephone',
                        'email', 'active')->get();

        foreach ($torcedores as $key => $value) {
            if($value->active == 1){
                $value->active = "ativo";
            }else{
                $value->active = "inativo";
            }
        }
        return $torcedores;
    }

    public function headings(): array
    {
        return [
            'Nome', 
            'Documento', 
            'Cep', 
            'Endereço', 
            'Bairro', 
            'Cidade', 
            'UF', 
            'Telefone',
            'Email', 
            'Status'
        ];
    }
}
