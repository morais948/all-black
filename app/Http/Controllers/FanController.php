<?php

namespace App\Http\Controllers;

use App\Models\Fan;
use Illuminate\Http\Request;

class FanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!empty($request->filter)){
            $torcedores = Fan::where('email', 'like', "%$request->filter%")->paginate(10);
            foreach ($torcedores as $key => $value) {
                if($value->active == 1){
                    $value->active = "ativo";
                }else{
                    $value->active = "inativo";
                }
            }
            return view('pages.fans.index', ['counterFans' => $this->settings, 'torcedores' => $torcedores]);
        }

        $torcedores = Fan::paginate(10);
        foreach ($torcedores as $key => $value) {
            if($value->active == 1){
                $value->active = "ativo";
            }else{
                $value->active = "inativo";
            }
        }
        return view('pages.fans.index', ['counterFans' => $this->settings, 'torcedores' => $torcedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function show(Fan $fan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function edit(Fan $fan)
    {
        return view('pages.fans.edit', ['counterFans' => $this->settings, 'fan' => $fan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fan $fan)
    {
        $date = $request->except('_token', '_method');
        isset($date['active']) ? $date['active'] = 1 : $date['active'] = 0;

        try {
            $fan->update($date);
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect()->route('fans.index')->with('success', 'Item Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fan $fan)
    {
        try {
            $fan->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->back()->with('success', 'Item excluído');
    }
}
