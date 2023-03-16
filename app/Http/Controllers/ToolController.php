<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

use App\Http\Requests\ToolRequest;

class ToolController extends Controller
{

        public function showlist()
    {
        $tools = Tool::all();
        return view('tool.list', ['tools' => $tools]);

    }


        public function showCreate()
    {
        $booklets = Tool::all();
        return view('tool.form');
    }

        public function exeStore(ToolRequest $request)
    {

        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Tool::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollBack();
            abort(500);

        }

        \Session::flush('erro_msg', '登録されました。');
        return redirect('https://www.daiwa-housing.co.jp/db/tool');
    }



}
