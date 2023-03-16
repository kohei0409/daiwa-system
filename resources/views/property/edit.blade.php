@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-8 offset-2 mb-5">
            <h2>物件登録</h2>
            <form method="POST" action="{{ route('property_update') }} " onSubmit="return checkSubmit()">
                @csrf


                <input type="hidden" name="id" value="{{ $property->id }}">
                <input type="hidden" name="property_sort" value="{{ $property->property_sort }}">


                <div class="mt-5">

                    <button type="submit" class="btn btn-primary">
                        更新する
                    </button>
                </div>


                <div class="form-group">
                    <label for="property_status">
                        ステータス
                    </label>

                    <?php  $slect_form = $property->Property_status;
                    ?>


                    <select id="Property_status" name="Property_status" class="form-select"
                            aria-label="Default select example">

                        <option value="工事中" <?php if ($slect_form == "工事中") {
                            echo "selected";
                        } ?>>工事中
                        </option>
                        <option value="販売中" <?php if ($slect_form == "販売中") {
                            echo "selected";
                        } ?>>販売中
                        </option>
                        <option value="商談中" <?php if ($slect_form == "商談中") {
                            echo "selected";
                        } ?>>商談中
                        </option>
                        <option value="成約済" <?php if ($slect_form == "成約済") {
                            echo "selected";
                        } ?>>成約済
                        </option>
                    </select>


                </div>




                <input
                    id="property_id"
                    name="property_id"
                    class="form-control"
                    value="{{ md5(date('y/m/d H:i:s'))}}"
                    type="hidden"
                >

                <div class="form-group">
                    <label for="Property_status_ddone">
                        物件メモ
                    </label>
                    <input
                        id="Property_status_ddone"
                        name="Property_status_ddone"
                        class="form-control"
                        value="{{ $property->Property_status_ddone }}"
                        type="text"
                    >
                    @if ($errors->has('Property_status_ddone'))
                        <div class="text-danger">
                            {{ $errors->first('Property_status_ddone') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_adtcheck">
                        アドトラストチェック
                    </label>
                    <input
                        id="Property_adtcheck"
                        name="Property_adtcheck"
                        class="form-control"
                        value="{{ $property->Property_adtcheck }}"
                        type="text"
                    >
                    @if ($errors->has('Property_adtcheck'))
                        <div class="text-danger">
                            {{ $errors->first('Property_adtcheck') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_bukkenName">
                        物件名
                    </label>
                    <input
                        id="Property_bukkenName"
                        name="Property_bukkenName"
                        class="form-control"
                        value="{{ $property->Property_bukkenName }}"
                        type="text"
                    >
                    @if ($errors->has('Property_bukkenName'))
                        <div class="text-danger">
                            {{ $errors->first('Property_bukkenName') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_bukkenid">
                        物件NO
                    </label>
                    <input
                        id="Property_bukkenid"
                        name="Property_bukkenid"
                        class="form-control"
                        value="{{ $property->Property_bukkenid }}"
                        type="text"
                    >
                    @if ($errors->has('Property_bukkenid'))
                        <div class="text-danger">
                            {{ $errors->first('Property_bukkenid') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_newold">
                        新築/中古
                    </label>
                    <input
                        id="Property_newold"
                        name="Property_newold"
                        class="form-control"
                        value="{{ $property->Property_newold }}"
                        type="text"
                    >
                    @if ($errors->has('Property_newold'))
                        <div class="text-danger">
                            {{ $errors->first('Property_newold') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_price">
                        値段
                    </label>
                    <input
                        id="Property_price"
                        name="Property_price"
                        class="form-control"
                        value="{{ $property->Property_price }}"
                        type="text"
                    >
                    @if ($errors->has('Property_price'))
                        <div class="text-danger">
                            {{ $errors->first('Property_price') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_space">
                        延床面積（㎡）
                    </label>
                    <input
                        id="Property_space"
                        name="Property_space"
                        class="form-control"
                        value="{{ $property->Property_space }}"
                        type="text"
                    >
                    @if ($errors->has('Property_space'))
                        <div class="text-danger">
                            {{ $errors->first('Property_space') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_subspace1">
                        延床面接（坪）
                    </label>
                    <input
                        id="Property_subspace1"
                        name="Property_subspace1"
                        class="form-control"
                        value="{{ $property->Property_subspace1 }}"
                        type="text"
                    >
                    @if ($errors->has('Property_subspace1'))
                        <div class="text-danger">
                            {{ $errors->first('Property_subspace1') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_subspace2">
                        接道状況
                    </label>
                    <input
                        id="Property_subspace2"
                        name="Property_subspace2"
                        class="form-control"
                        value="{{ $property->Property_subspace2 }}"
                        type="text"
                    >
                    @if ($errors->has('Property_subspace2'))
                        <div class="text-danger">
                            {{ $errors->first('Property_subspace2') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_buildingfloorareasize">
                        土地面積（㎡）
                    </label>
                    <input
                        id="Property_buildingfloorareasize"
                        name="Property_buildingfloorareasize"
                        class="form-control"
                        value="{{ $property->Property_buildingfloorareasize }}"
                        type="text"
                    >
                    @if ($errors->has('Property_buildingfloorareasize'))
                        <div class="text-danger">
                            {{ $errors->first('Property_buildingfloorareasize') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_subbuildingfloorareasize">
                        土地面積（坪）
                    </label>
                    <input
                        id="Property_subbuildingfloorareasize"
                        name="Property_subbuildingfloorareasize"
                        class="form-control"
                        value="{{ $property->Property_subbuildingfloorareasize }}"
                        type="text"
                    >
                    @if ($errors->has('Property_subbuildingfloorareasize'))
                        <div class="text-danger">
                            {{ $errors->first('Property_subbuildingfloorareasize') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_buildingfloorareasize2">
                        土地面積（私道情報）
                    </label>
                    <input
                        id="Property_buildingfloorareasize2"
                        name="Property_buildingfloorareasize2"
                        class="form-control"
                        value="{{ $property->Property_buildingfloorareasize2 }}"
                        type="text"
                    >
                    @if ($errors->has('Property_buildingfloorareasize2'))
                        <div class="text-danger">
                            {{ $errors->first('Property_buildingfloorareasize2') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_buildingareasize">
                        建築面積（㎡）
                    </label>
                    <input
                        id="Property_buildingareasize"
                        name="Property_buildingareasize"
                        class="form-control"
                        value="{{ $property->Property_buildingareasize }}"
                        type="text"
                    >
                    @if ($errors->has('Property_buildingareasize'))
                        <div class="text-danger">
                            {{ $errors->first('Property_buildingareasize') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_subbuildingareasize">
                        建築面積（坪）
                    </label>
                    <input
                        id="Property_subbuildingareasize"
                        name="Property_subbuildingareasize"
                        class="form-control"
                        value="{{ $property->Property_subbuildingareasize }}"
                        type="text"
                    >
                    @if ($errors->has('Property_subbuildingareasize'))
                        <div class="text-danger">
                            {{ $errors->first('Property_subbuildingareasize') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_kenpeiritsu">
                        建ぺい率
                    </label>
                    <input
                        id="Property_kenpeiritsu"
                        name="Property_kenpeiritsu"
                        class="form-control"
                        value="{{ $property->Property_kenpeiritsu }}"
                        type="text"
                    >
                    @if ($errors->has('Property_kenpeiritsu'))
                        <div class="text-danger">
                            {{ $errors->first('Property_kenpeiritsu') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_yousekiristu">
                        容積率
                    </label>
                    <input
                        id="Property_yousekiristu"
                        name="Property_yousekiristu"
                        class="form-control"
                        value="{{ $property->Property_yousekiristu }}"
                        type="text"
                    >
                    @if ($errors->has('Property_yousekiristu'))
                        <div class="text-danger">
                            {{ $errors->first('Property_yousekiristu') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_houseaddress">
                        住所
                    </label>
                    <input
                        id="Property_houseaddress"
                        name="Property_houseaddress"
                        class="form-control"
                        value="{{ $property->Property_houseaddress }}"
                        type="text"
                    >
                    @if ($errors->has('Property_houseaddress'))
                        <div class="text-danger">
                            {{ $errors->first('Property_houseaddress') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_houseaddresssub">
                        共有部分
                    </label>
                    <input
                        id="Property_houseaddresssub"
                        name="Property_houseaddresssub"
                        class="form-control"
                        value="{{ $property->Property_houseaddresssub }}"
                        type="text"
                    >
                    @if ($errors->has('Property_houseaddresssub'))
                        <div class="text-danger">
                            {{ $errors->first('Property_houseaddresssub') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_houseaddressshort">
                        住所（短縮）
                    </label>
                    <input
                        id="Property_houseaddressshort"
                        name="Property_houseaddressshort"
                        class="form-control"
                        value="{{ $property->Property_houseaddressshort }}"
                        type="text"
                    >
                    @if ($errors->has('Property_houseaddressshort'))
                        <div class="text-danger">
                            {{ $errors->first('Property_houseaddressshort') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_housestructure">
                        構造
                    </label>
                    <input
                        id="Property_housestructure"
                        name="Property_housestructure"
                        class="form-control"
                        value="{{ $property->Property_housestructure }}"
                        type="text"
                    >
                    @if ($errors->has('Property_housestructure'))
                        <div class="text-danger">
                            {{ $errors->first('Property_housestructure') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_housetop">
                        屋根
                    </label>
                    <input
                        id="Property_housetop"
                        name="Property_housetop"
                        class="form-control"
                        value="{{ $property->Property_housetop }}"
                        type="text"
                    >
                    @if ($errors->has('Property_housetop'))
                        <div class="text-danger">
                            {{ $errors->first('Property_housetop') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_traindata1">
                        路線名
                    </label>
                    <input
                        id="Property_traindata1"
                        name="Property_traindata1"
                        class="form-control"
                        value="{{ $property->Property_traindata1 }}"
                        type="text"
                    >
                    @if ($errors->has('Property_traindata1'))
                        <div class="text-danger">
                            {{ $errors->first('Property_traindata1') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_traindata3tohoorcar">
                        駅からの距離（車）
                    </label>
                    <input
                        id="Property_traindata3tohoorcar"
                        name="Property_traindata3tohoorcar"
                        class="form-control"
                        value="{{ $property->Property_traindata3tohoorcar }}"
                        type="text"
                    >
                    @if ($errors->has('Property_traindata3tohoorcar'))
                        <div class="text-danger">
                            {{ $errors->first('Property_traindata3tohoorcar') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_traindata2">
                        駅からの距離（徒歩）
                    </label>
                    <input
                        id="Property_traindata2"
                        name="Property_traindata2"
                        class="form-control"
                        value="{{ $property->Property_traindata2 }}"
                        type="text"
                    >
                    @if ($errors->has('Property_traindata2'))
                        <div class="text-danger">
                            {{ $errors->first('Property_traindata2') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_stationdistance">
                        駅からの時間
                    </label>
                    <input
                        id="Property_stationdistance"
                        name="Property_stationdistance"
                        class="form-control"
                        value="{{ $property->Property_stationdistance }}"
                        type="text"
                    >
                    @if ($errors->has('Property_stationdistance'))
                        <div class="text-danger">
                            {{ $errors->first('Property_stationdistance') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_toshikeikaku">
                        都市計画
                    </label>
                    <input
                        id="Property_toshikeikaku"
                        name="Property_toshikeikaku"
                        class="form-control"
                        value="{{ $property->Property_toshikeikaku }}"
                        type="text"
                    >
                    @if ($errors->has('Property_toshikeikaku'))
                        <div class="text-danger">
                            {{ $errors->first('Property_toshikeikaku') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_chisei">
                        地勢
                    </label>
                    <input
                        id="Property_chisei"
                        name="Property_chisei"
                        class="form-control"
                        value="{{ $property->Property_chisei }}"
                        type="text"
                    >
                    @if ($errors->has('Property_chisei'))
                        <div class="text-danger">
                            {{ $errors->first('Property_chisei') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_youto">
                        用途
                    </label>
                    <input
                        id="Property_youto"
                        name="Property_youto"
                        class="form-control"
                        value="{{ $property->Property_youto }}"
                        type="text"
                    >
                    @if ($errors->has('Property_youto'))
                        <div class="text-danger">
                            {{ $errors->first('Property_youto') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_setsudou">
                        販売区画
                    </label>
                    <input
                        id="Property_setsudou"
                        name="Property_setsudou"
                        class="form-control"
                        value="{{ $property->Property_setsudou }}"
                        type="text"
                    >
                    @if ($errors->has('Property_setsudou'))
                        <div class="text-danger">
                            {{ $errors->first('Property_setsudou') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_setsudou">
                        接道状況
                    </label>
                    <input
                        id="Property_setsudou"
                        name="Property_setsudou"
                        class="form-control"
                        value="{{ $property->Property_setsudou }}"
                        type="text"
                    >
                    @if ($errors->has('Property_setsudou'))
                        <div class="text-danger">
                            {{ $errors->first('Property_setsudou') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_chikudate">
                        築年数
                    </label>
                    <input
                        id="Property_chikudate"
                        name="Property_chikudate"
                        class="form-control"
                        value="{{ $property->Property_chikudate }}"
                        type="text"
                    >
                    @if ($errors->has('Property_chikudate'))
                        <div class="text-danger">
                            {{ $errors->first('Property_chikudate') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Property_setsubi">
                        設備
                    </label>
                    <input
                        id="Property_setsubi"
                        name="Property_setsubi"
                        class="form-control"
                        value="{{ $property->Property_setsubi }}"
                        type="text"
                    >
                    @if ($errors->has('Property_setsubi'))
                        <div class="text-danger">
                            {{ $errors->first('Property_setsubi') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_chimoku">
                        地目
                    </label>
                    <input
                        id="Property_chimoku"
                        name="Property_chimoku"
                        class="form-control"
                        value="{{ $property->Property_chimoku }}"
                        type="text"
                    >
                    @if ($errors->has('Property_chimoku'))
                        <div class="text-danger">
                            {{ $errors->first('Property_chimoku') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_icondata">
                        アイコンデータ
                    </label>
                    <input
                        id="Property_icondata"
                        name="Property_icondata"
                        class="form-control"
                        value="{{ $property->Property_icondata }}"
                        type="text"
                    >
                    @if ($errors->has('Property_icondata'))
                        <div class="text-danger">
                            {{ $errors->first('Property_icondata') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_dataoption2">
                        周辺情報
                    </label>
                    <input
                        id="Property_dataoption2"
                        name="Property_dataoption2"
                        class="form-control"
                        value="{{ $property->Property_dataoption2 }}"
                        type="text"
                    >
                    @if ($errors->has('Property_dataoption2'))
                        <div class="text-danger">
                            {{ $errors->first('Property_dataoption2') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_isGentei">
                        メインテキスト
                    </label>
                    <input
                        id="Property_isGentei"
                        name="Property_isGentei"
                        class="form-control"
                        value="{{ $property->Property_isGentei }}"
                        type="text"
                    >
                    @if ($errors->has('Property_isGentei'))
                        <div class="text-danger">
                            {{ $errors->first('Property_isGentei') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_isGentei">
                        公開/非公開
                    </label>
                    <input
                        id="Property_isGentei"
                        name="Property_isGentei"
                        class="form-control"
                        value="{{ $property->Property_isGentei }}"
                        type="text"
                    >
                    @if ($errors->has('Property_isGentei'))
                        <div class="text-danger">
                            {{ $errors->first('Property_isGentei') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Property_isdisplaytaxtext">
                        税金
                    </label>
                    <input
                        id="Property_isdisplaytaxtext"
                        name="Property_isdisplaytaxtext"
                        class="form-control"
                        value="{{ $property->Property_isdisplaytaxtext }}"
                        type="text"
                    >
                    @if ($errors->has('Property_isdisplaytaxtext'))
                        <div class="text-danger">
                            {{ $errors->first('Property_isdisplaytaxtext') }}
                        </div>
                    @endif
                </div>


                <input name="property_id" value="{{ md5(date('y/m/d H:i:s'))}}" type="hidden">





                <div class="mt-5">

                    <button type="submit" class="btn btn-primary">
                        更新する
                    </button>
                </div>


            </form>
        </div>
    </div>





    {{--    <script>--}}
    {{--        function checkSubmit() {--}}
    {{--            if (window.confirm('送信してよろしいですか？')) {--}}
    {{--                return true;--}}
    {{--            } else {--}}
    {{--                return false;--}}
    {{--            }--}}
    {{--        }--}}
    {{--    </script>--}}
@endsection
