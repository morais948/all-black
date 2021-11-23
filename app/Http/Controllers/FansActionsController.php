<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FansExport;

class FansActionsController extends Controller
{
    public function viewImport(){
        return view('import-xml');
    }

    public function importXml(Request $request){        
        if(empty($request->xml)) return redirect()->back()->with('erro', 'Por favor selecione um arquivo XML');
        if($request->xml->extension() != "xml") return redirect()->back()->with('erro', 'O arquivo deve ser do tipo XML');

        try {
            $xml = simplexml_load_file($request->xml);
            //dd($xml);
            foreach ($xml as $key => $value) {
                
                $data = [
                    'name' => $value['nome']->__toString(),
                    'document' => $value['documento']->__toString(),
                    'cep' => $value['cep']->__toString(),
                    'address' => $value['endereco']->__toString(),
                    'district' => $value['bairro']->__toString(),
                    'city' => $value['cidade']->__toString(),
                    'uf' => $value['uf']->__toString(),
                    'telephone' => $value['telefone']->__toString(),
                    'email' => $value['email']->__toString(),
                    'active' => empty($value['ativo']->__toString()) ? 0 : 1,
                ];
                Fan::create($data);
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
        return redirect()->route('fans.index')->with('success', 'Arquivo importado');
    }

    public function export(){
        return Excel::download(new FansExport, 'torcedores.xlsx');
    }

    public function clearTableFans(){
        Fan::truncate();
        return redirect()->back()->with('warning', 'Todos os registros foram excluídos');
    }
}
