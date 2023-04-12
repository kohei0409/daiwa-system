<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Property;
use App\Http\Requests\StoreOwnRegisterRequest;
use App\Http\Requests\UpdateOwnRegisterRequest;
use App\Models\OwnRegister;
use App\Models\PropertyMemo;


class PropertyController extends Controller
{
    /**
     *
     *リストを表示する
     *
     */

    public function index(Request $request)
    {
        $query = Property::all();

        $search = $request->input('search');
        $roomnumber = $request->input('roomnumber');


        if ($search != "") {
            if ($search === 'すべて') {
                $property_list = $query;

            } else {
                $property_list = $query->where('Property_status', $search);
            }
        } else {
            if ($roomnumber === '') {
                $property_list = $query->where('Property_status', '工事中');
            } else {
                $property_list = $query->where('Property_bukkenid', 'like', "$roomnumber");
            }
        }


        return view('property.index', ['property_list' => $property_list]);

    }


    /**
     * Display the specified resource.
     *
     * 物件の詳細を表示する
     *
     */

    public function showDetail($id)
    {

        $property = Property::find($id);
        $owner = OwnRegister::all();
        $memos = PropertyMemo::all();
        $memos = PropertyMemo::orderBy('id', 'desc')->get();


        $owner_list = $owner->where('BukkenID', '=', $property->Property_bukkenid);
        $memos_list = $memos->where('BukkenID', '=', $property->Property_bukkenid);


        return view('property.detail', ['property' => $property, 'owner_list' => $owner_list, 'memos' => $memos_list]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * 物件を編集する
     *
     */
    public function showEdit($id)
    {
        $property = Property::find($id);

        return view('property.edit', ['property' => $property]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * データベースを更新する
     *
     */


    public function exeUpdate(UpdatePropertyRequest $request)
    {


        // ブログのデータを受け取る
        $inputs = $request->all();

//        dd($inputs);

        \DB::beginTransaction();
        try {


            $property = Property::find($inputs['id']);

            $property->fill([

                'Property_id' => $inputs['Property_id'],
                'Property_status_ddone' => $inputs['Property_status_ddone'],
                'Property_status' => $inputs['Property_status'],
                'Property_bukkenName' => $inputs['Property_bukkenName'],
                'Property_adtcheck' => $inputs['Property_adtcheck'],
                'Property_bukkenid' => $inputs['Property_bukkenid'],
                'Property_newold' => $inputs['Property_newold'],
                'Property_madori' => $inputs['Property_madori'],
                'Property_price' => $inputs['Property_price'],
                'Property_space' => $inputs['Property_space'],
                'Property_subspace1' => $inputs['Property_subspace1'],
                'Property_subspace2' => $inputs['Property_subspace2'],
                'Property_buildingfloorareasize' => $inputs['Property_buildingfloorareasize'],
                'Property_subbuildingfloorareasize' => $inputs['Property_subbuildingfloorareasize'],
                'Property_buildingfloorareasize2' => $inputs['Property_buildingfloorareasize2'],
                'Property_buildingareasize' => $inputs['Property_buildingareasize'],
                'Property_subbuildingareasize' => $inputs['Property_subbuildingareasize'],
                'Property_kenpeiritsu' => $inputs['Property_kenpeiritsu'],
                'Property_yousekiristu' => $inputs['Property_yousekiristu'],
                'Property_houseaddress' => $inputs['Property_houseaddress'],
                'Property_houseaddresssub' => $inputs['Property_houseaddresssub'],
                'Property_houseaddressshort' => $inputs['Property_houseaddressshort'],
                'Property_housestructure' => $inputs['Property_housestructure'],
                'Property_housetop' => $inputs['Property_housetop'],
                'Property_trainlinename' => $inputs['Property_trainlinename'],
                'Property_traindata1' => $inputs['Property_traindata1'],
                'Property_traindata3tohoorcar' => $inputs['Property_traindata3tohoorcar'],
                'Property_traindata2' => $inputs['Property_traindata2'],
                'Property_stationdistance' => $inputs['Property_stationdistance'],
                'Property_tatemonotext' => $inputs['Property_tatemonotext'],
                'Property_toshikeikaku' => $inputs['Property_toshikeikaku'],
                'Property_chisei' => $inputs['Property_chisei'],
                'Property_youto' => $inputs['Property_youto'],
                'Property_hanbaikukaku' => $inputs['Property_hanbaikukaku'],
                'Property_setsudou' => $inputs['Property_setsudou'],
                'Property_chikudate' => $inputs['Property_chikudate'],
                'Property_setsubi' => $inputs['Property_setsubi'],
                'Property_chimoku' => $inputs['Property_chimoku'],
                'Property_icondata' => $inputs['Property_icondata'],
                'Property_dataoption2' => $inputs['Property_dataoption2'],
                'Property_maintext1' => $inputs['Property_maintext1'],
                'Property_maintext1forsheet' => $inputs['Property_maintext1forsheet'],
                'Property_rightheadertext' => $inputs['Property_rightheadertext'],
                'Property_rightfootertext' => $inputs['Property_rightfootertext'],
                'Property_madoriimage1' => $inputs['Property_madoriimage1'],
                'Property_mainimage' => $inputs['Property_mainimage'],
                'Property_mainimagetext' => $inputs['Property_mainimagetext'],
                'Property_subimage1' => $inputs['Property_subimage1'],
                'Property_subimage2' => $inputs['Property_subimage2'],
                'Property_subimage3' => $inputs['Property_subimage3'],
                'Property_subimage4' => $inputs['Property_subimage4'],
                'Property_subimage1text' => $inputs['Property_subimage1text'],
                'Property_subimage2text' => $inputs['Property_subimage2text'],
                'Property_subimage3text' => $inputs['Property_subimage3text'],
                'Property_subimage4text' => $inputs['Property_subimage4text'],
                'Property_thphotogallery' => $inputs['Property_thphotogallery'],
                'Property_sortvalue' => $inputs['Property_sortvalue'],
                'Property_memo1' => $inputs['Property_memo1'],
                'Property_isGentei' => $inputs['Property_isGentei'],
                'Property_isdisplaytaxtext' => $inputs['Property_isdisplaytaxtext'],
                'Property_youtubeiframe' => $inputs['Property_youtubeiframe'],
                'Property_youtubetitle' => $inputs['Property_youtubetitle'],
                'Property_shiire' => $inputs['Property_shiire'],
                'Property_cost_0001' => $inputs['Property_cost_0001'],
                'Property_cost_0002' => $inputs['Property_cost_0002'],
                'Property_cost_0003' => $inputs['Property_cost_0003'],
                'Property_cost_0004' => $inputs['Property_cost_0004'],
                'Property_cost_0005' => $inputs['Property_cost_0005']

            ]);

            $property->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        return redirect(route('property_edit', ['id' => $inputs['id']]));
    }


}
