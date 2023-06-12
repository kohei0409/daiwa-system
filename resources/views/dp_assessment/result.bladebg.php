

<tr>
    <td>
        {{$property_lists -> id}}
    </td>
    <td>
        {{$property_lists -> Property_status}}
    </td>
    <td class="min-w-125px">
        <div class="fs-7 fw-bold text-muted">{{$property_lists -> Property_bukkenid}}</div>

        <div class="fs-7 fw-bold text-muted">{{$property_lists -> Property_bukkenName}}</div>
    </td>
    <td class="min-w-150px">
        <div class="fs-7 fw-bold text-muted">登録日：</div>
        <div class="fs-7 fw-bold text-muted">検査日：</div>
    </td>
    <td>
        <div class="fs-7 fw-bold text-muted">{{$property_lists -> Property_houseaddress}}</div>
    </td>
    <td class="d-none">{{$property_lists -> Property_status}}</td>
    <td class="">{{$property_lists -> Property_id}}</td>


    <td class="text-end">

        <a class="btn btn btn-danger btn-sm" data-bs-toggle="collapse" href="#collapse_{{$property_lists -> id}}"
           role="button"
           aria-expanded="false" aria-controls="collapse_{{$property_lists -> id}}">
            詳細
        </a>


    </td>
</tr>

<tr>
    <td colspan="6" class="p-0">
        <div class="collapse <?php if($list_detail == $property_lists -> id){echo 'show';} ?> p-5" id="collapse_{{$property_lists -> id}}">

            <ul class="nav nav-tabs" id="myTab_{{$property_lists -> id}}" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="content_1__{{$property_lists -> id}}-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#content_1__{{$property_lists -> id}}"
                        type="button"
                        role="tab"
                        aria-controls="content_1__{{$property_lists -> id}}"
                        aria-selected="true"
                    >
                        物件情報
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="content_2__{{$property_lists -> id}}-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#content_2__{{$property_lists -> id}}"
                        type="button"
                        role="tab"
                        aria-controls="content_2__{{$property_lists -> id}}"
                        aria-selected="false"
                    >
                        査定書
                    </button>
                </li>


            </ul>
            <div class="tab-content p-5 bg-gray-200" id="myTabContent_{{$property_lists -> id}}">
                <div
                    class="tab-pane p-5 fade <?php if($tab_detail == 2&&$list_detail != $property_lists -> id){echo 'show active';}?>"
                    id="content_1__{{$property_lists -> id}}"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                >

                    <h2>{{ $property_lists->Property_bukkenid }}( {{ $property_lists->Property_bukkenName }})</h2>
                    <form method="POST" action="{{ route('property_update') }} " onSubmit="return checkSubmit()">
                        @csrf


                        <input type="hidden" name="id" value="{{ $property_lists->id }}">

                        <input type="hidden" name="Property_status_ddone"
                               value="{{ $property_lists->Property_status_ddone }}">

                        <input type="hidden" name="Property_id" value="{{ $property_lists->Property_id }}">
                        <input type="hidden" name="Property_status_ddone"
                               value="{{ $property_lists->Property_status_ddone }}">
                        <input type="hidden" name="Property_bukkenName"
                               value="{{ $property_lists->Property_bukkenName }}">
                        <input type="hidden" name="Property_adtcheck" value="{{ $property_lists->Property_adtcheck }}">
                        <input type="hidden" name="Property_bukkenid" value="{{ $property_lists->Property_bukkenid }}">
                        <input type="hidden" name="Property_madori" value="{{ $property_lists->Property_madori }}">
                        <input type="hidden" name="Property_price" value="{{ $property_lists->Property_price }}">
                        <input type="hidden" name="Property_space" value="{{ $property_lists->Property_space }}">
                        <input type="hidden" name="Property_subspace1"
                               value="{{ $property_lists->Property_subspace1 }}">
                        <input type="hidden" name="Property_subspace2"
                               value="{{ $property_lists->Property_subspace2 }}">
                        <input type="hidden" name="Property_buildingfloorareasize"
                               value="{{ $property_lists->Property_buildingfloorareasize }}">
                        <input type="hidden" name="Property_subbuildingfloorareasize"
                               value="{{ $property_lists->Property_subbuildingfloorareasize }}">
                        <input type="hidden" name="Property_buildingfloorareasize2"
                               value="{{ $property_lists->Property_buildingfloorareasize2 }}">
                        <input type="hidden" name="Property_buildingareasize"
                               value="{{ $property_lists->Property_buildingareasize }}">
                        <input type="hidden" name="Property_subbuildingareasize"
                               value="{{ $property_lists->Property_subbuildingareasize }}">
                        <input type="hidden" name="Property_kenpeiritsu"
                               value="{{ $property_lists->Property_kenpeiritsu }}">
                        <input type="hidden" name="Property_yousekiristu"
                               value="{{ $property_lists->Property_yousekiristu }}">
                        <input type="hidden" name="Property_houseaddress"
                               value="{{ $property_lists->Property_houseaddress }}">
                        <input type="hidden" name="Property_houseaddresssub"
                               value="{{ $property_lists->Property_houseaddresssub }}">
                        <input type="hidden" name="Property_houseaddressshort"
                               value="{{ $property_lists->Property_houseaddressshort }}">
                        <input type="hidden" name="Property_housestructure"
                               value="{{ $property_lists->Property_housestructure }}">
                        <input type="hidden" name="Property_housetop" value="{{ $property_lists->Property_housetop }}">
                        <input type="hidden" name="Property_trainlinename"
                               value="{{ $property_lists->Property_trainlinename }}">
                        <input type="hidden" name="Property_traindata1"
                               value="{{ $property_lists->Property_traindata1 }}">
                        <input type="hidden" name="Property_traindata3tohoorcar"
                               value="{{ $property_lists->Property_traindata3tohoorcar }}">
                        <input type="hidden" name="Property_traindata2"
                               value="{{ $property_lists->Property_traindata2 }}">
                        <input type="hidden" name="Property_stationdistance"
                               value="{{ $property_lists->Property_stationdistance }}">
                        <input type="hidden" name="Property_tatemonotext"
                               value="{{ $property_lists->Property_tatemonotext }}">
                        <input type="hidden" name="Property_toshikeikaku"
                               value="{{ $property_lists->Property_toshikeikaku }}">
                        <input type="hidden" name="Property_chisei" value="{{ $property_lists->Property_chisei }}">
                        <input type="hidden" name="Property_youto" value="{{ $property_lists->Property_youto }}">
                        <input type="hidden" name="Property_hanbaikukaku"
                               value="{{ $property_lists->Property_hanbaikukaku }}">
                        <input type="hidden" name="Property_setsudou" value="{{ $property_lists->Property_setsudou }}">
                        <input type="hidden" name="Property_chikudate"
                               value="{{ $property_lists->Property_chikudate }}">
                        <input type="hidden" name="Property_setsubi" value="{{ $property_lists->Property_setsubi }}">
                        <input type="hidden" name="Property_chimoku" value="{{ $property_lists->Property_chimoku }}">
                        <input type="hidden" name="Property_icondata" value="{{ $property_lists->Property_icondata }}">
                        <input type="hidden" name="Property_dataoption2"
                               value="{{ $property_lists->Property_dataoption2 }}">
                        <input type="hidden" name="Property_maintext1"
                               value="{{ $property_lists->Property_maintext1 }}">
                        <input type="hidden" name="Property_maintext1forsheet"
                               value="{{ $property_lists->Property_maintext1forsheet }}">
                        <input type="hidden" name="Property_rightheadertext"
                               value="{{ $property_lists->Property_rightheadertext }}">
                        <input type="hidden" name="Property_rightfootertext"
                               value="{{ $property_lists->Property_rightfootertext }}">
                        <input type="hidden" name="Property_madoriimage1"
                               value="{{ $property_lists->Property_madoriimage1 }}">
                        <input type="hidden" name="Property_mainimage"
                               value="{{ $property_lists->Property_mainimage }}">
                        <input type="hidden" name="Property_mainimagetext"
                               value="{{ $property_lists->Property_mainimagetext }}">
                        <input type="hidden" name="Property_subimage1"
                               value="{{ $property_lists->Property_subimage1 }}">
                        <input type="hidden" name="Property_subimage2"
                               value="{{ $property_lists->Property_subimage2 }}">
                        <input type="hidden" name="Property_subimage3"
                               value="{{ $property_lists->Property_subimage3 }}">
                        <input type="hidden" name="Property_subimage4"
                               value="{{ $property_lists->Property_subimage4 }}">
                        <input type="hidden" name="Property_subimage1text"
                               value="{{ $property_lists->Property_subimage1text }}">
                        <input type="hidden" name="Property_subimage2text"
                               value="{{ $property_lists->Property_subimage2text }}">
                        <input type="hidden" name="Property_subimage3text"
                               value="{{ $property_lists->Property_subimage3text }}">
                        <input type="hidden" name="Property_subimage4text"
                               value="{{ $property_lists->Property_subimage4text }}">
                        <input type="hidden" name="Property_thphotogallery"
                               value="{{ $property_lists->Property_thphotogallery }}">
                        <input type="hidden" name="Property_sortvalue"
                               value="{{ $property_lists->Property_sortvalue }}">
                        <input type="hidden" name="Property_memo1" value="{{ $property_lists->Property_memo1 }}">
                        <input type="hidden" name="Property_isGentei" value="{{ $property_lists->Property_isGentei }}">
                        <input type="hidden" name="Property_isdisplaytaxtext"
                               value="{{ $property_lists->Property_isdisplaytaxtext }}">
                        <input type="hidden" name="Property_youtubeiframe"
                               value="{{ $property_lists->Property_youtubeiframe }}">
                        <input type="hidden" name="Property_youtubetitle"
                               value="{{ $property_lists->Property_youtubetitle }}">
                        <input type="hidden" name="Property_shiire" value="{{ $property_lists->Property_shiire }}">
                        <input type="hidden" name="Property_cost_0001"
                               value="{{ $property_lists->Property_cost_0001 }}">
                        <input type="hidden" name="Property_cost_0002"
                               value="{{ $property_lists->Property_cost_0002 }}">
                        <input type="hidden" name="Property_cost_0003"
                               value="{{ $property_lists->Property_cost_0003 }}">
                        <input type="hidden" name="Property_cost_0004"
                               value="{{ $property_lists->Property_cost_0004 }}">
                        <input type="hidden" name="Property_cost_0005"
                               value="{{ $property_lists->Property_cost_0005 }}">


                        <input type="hidden" name="property_sort" value="{{ $property_lists->property_sort }}">


                        {{--ROW1--}}
                        <div class="row mt-3">
                            <div class="col-1 p-3 d-flex align-items-center">
                                ステータス
                            </div>
                            <div class="col-3 p-3">
                                <?php $select_form = $property_lists->Property_status;
                                ?>


                                <select id="Property_status" name="Property_status" class="form-select"
                                        aria-label="Default select example">


                                    <option value="査定中" <?php if ($select_form == "査定中") {
                                        echo "selected";
                                    } ?>>査定中
                                    </option>

                                    <option value="工事中" <?php if ($select_form == "工事中") {
                                        echo "selected";
                                    } ?>>工事中
                                    </option>
                                    <option value="販売中" <?php if ($select_form == "販売中") {
                                        echo "selected";
                                    } ?>>販売中
                                    </option>
                                    <option value="商談中" <?php if ($select_form == "商談中") {
                                        echo "selected";
                                    } ?>>商談中
                                    </option>
                                    <option value="成約済" <?php if ($select_form == "成約済") {
                                        echo "selected";
                                    } ?>>成約済
                                    </option>
                                    <option value="取扱不可" <?php if ($select_form == "取扱不可") {
                                        echo "selected";
                                    } ?>>取扱不可
                                    </option>
                                </select>
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                新築/中古
                            </div>

                            <div class="col-3 p-3">

                                @php $select_form = $property_lists->Property_newold @endphp

                                <select id="Property_newold" name="Property_newold" class="form-select"
                                        aria-label="Default select example">

                                    <option value="新築" <?php if ($select_form == "新築") {
                                        echo "selected";
                                    } ?>>新築
                                    </option>
                                    <option value="中古" <?php if ($select_form == "中古") {
                                        echo "selected";
                                    } ?>>中古
                                    </option>
                                </select>
                            </div>


                            <div class="col-1 p-3 d-flex align-items-center">
                                公開/非公開
                            </div>

                            <div class="col-3 p-3">

                                <?php $select_form = $property_lists->Property_isGentei; ?>

                                <select id="Property_isGentei" name="Property_isGentei" class="form-select"
                                        aria-label="Default select example">

                                    <option value="公開" <?php if ($select_form == "公開") {
                                        echo "selected";
                                    } ?>>公開
                                    </option>
                                    <option value="非公開" <?php if ($select_form == "非公開") {
                                        echo "selected";
                                    } ?>>非公開
                                    </option>
                                </select>

                            </div>


                        </div>


                        {{--ROW2--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                物件名
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_bukkenName"
                                    name="Property_bukkenName"
                                    class="form-control form-control-sm"
                                    value="{{ $property_lists->Property_bukkenName }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_bukkenName'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_bukkenName') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                住所
                            </div>
                            <div class="col-7 p-3">
                                <input
                                    id="Property_houseaddress"
                                    name="Property_houseaddress"
                                    class="form-control form-control-sm"
                                    value="{{ $property_lists->Property_houseaddress }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_houseaddress'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_houseaddress') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        {{--ROW3--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                物件NO
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_bukkenid"
                                    name="Property_bukkenid"
                                    class="form-control form-control-sm"
                                    value="{{ $property_lists->Property_bukkenid }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_bukkenid'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_bukkenid') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-1 p-3 d-flex align-items-center">
                                住所（短縮）
                            </div>

                            <div class="col-5">
                                <input
                                    id="Property_houseaddressshort"
                                    name="Property_houseaddressshort"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_houseaddressshort }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_houseaddressshort'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_houseaddressshort') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-2">

                            </div>

                        </div>


                        <div class="row">
                            <div class="col-12 p-1 mt-3 bg-warning text-start font-weight-bold">
                                □ 土地情報
                            </div>
                        </div>


                        {{--ROW4--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                値段
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_price"
                                    name="Property_price"
                                    class="form-control form-control-sm"
                                    value="{{ $property_lists->Property_price }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_price'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_price') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-1 p-3 d-flex align-items-center">
                                延床面積（㎡）

                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_space"
                                    name="Property_space"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_space }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_space'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_space') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                延床面接（坪）
                            </div>

                            <div class="col-3 p-3">
                                <input
                                    id="Property_subspace1"
                                    name="Property_subspace1"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_subspace1 }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_subspace1'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_subspace1') }}
                                    </div>
                                @endif
                            </div>

                        </div>


                        {{--ROW5--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                接道状況
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_subspace2"
                                    name="Property_subspace2"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_subspace2 }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_subspace2'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_subspace2') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                土地面積（㎡）
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_buildingfloorareasize"
                                    name="Property_buildingfloorareasize"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_buildingfloorareasize }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_buildingfloorareasize'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_buildingfloorareasize') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                        <span style="font-size: 0.8em">土地面積<br> <span style="font-size: 0.8em">(私道情報)</span>
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_buildingfloorareasize2"
                                    name="Property_buildingfloorareasize2"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_buildingfloorareasize2 }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_buildingfloorareasize2'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_buildingfloorareasize2') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        {{--ROW6--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                建築面積（㎡）
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_buildingareasize"
                                    name="Property_buildingareasize"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_buildingareasize }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_buildingareasize'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_buildingareasize') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                建築面積（坪）
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_subbuildingareasize"
                                    name="Property_subbuildingareasize"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_subbuildingareasize }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_subbuildingareasize'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_subbuildingareasize') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                建ぺい率
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_kenpeiritsu"
                                    name="Property_kenpeiritsu"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_kenpeiritsu }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_kenpeiritsu'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_kenpeiritsu') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        {{--ROW7--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                容積率
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_yousekiristu"
                                    name="Property_yousekiristu"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_yousekiristu }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_yousekiristu'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_yousekiristu') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                共有部分
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_houseaddresssub"
                                    name="Property_houseaddresssub"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_houseaddresssub }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_houseaddresssub'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_houseaddresssub') }}
                                    </div>
                                @endif
                            </div>


                            <div class="col-1 p-3 d-flex align-items-center">
                                税金
                            </div>

                            <div class="col-3 p-3">
                                <input
                                    id="Property_isdisplaytaxtext"
                                    name="Property_isdisplaytaxtext"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_isdisplaytaxtext }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_isdisplaytaxtext'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_isdisplaytaxtext') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        {{--ROW8--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                構造
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_housestructure"
                                    name="Property_housestructure"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_housestructure }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_housestructure'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_housestructure') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-1 p-3 d-flex align-items-center">
                                屋根
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_housetop"
                                    name="Property_housetop"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_housetop }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_housetop'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_housetop') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-4 p-3">

                            </div>

                        </div>


                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                都市計画
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_toshikeikaku"
                                    name="Property_toshikeikaku"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_toshikeikaku }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_toshikeikaku'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_toshikeikaku') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                地勢
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_chisei"
                                    name="Property_chisei"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_chisei }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_chisei'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_chisei') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                用途
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_youto"
                                    name="Property_youto"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_youto }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_youto'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_youto') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-12 p-1 mt-3 bg-warning text-start font-weight-bold">
                                □ 建物情報
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                販売区画
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_setsudou"
                                    name="Property_setsudou"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_setsudou }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_setsudou'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_setsudou') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                接道状況
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_setsudou"
                                    name="Property_setsudou"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_setsudou }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_setsudou'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_setsudou') }}
                                    </div>
                                @endif
                            </div>


                            <div class="col-4 p-3">

                            </div>


                        </div>


                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                築年数
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_chikudate"
                                    name="Property_chikudate"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_chikudate }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_chikudate'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_chikudate') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                設備
                            </div>
                            <div class="col-7 p-3">
                                <input
                                    id="Property_setsubi"
                                    name="Property_setsubi"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_setsubi }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_setsubi'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_setsubi') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                地目
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_chimoku"
                                    name="Property_chimoku"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_chimoku }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_chimoku'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_chimoku') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                アイコンデータ
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_icondata"
                                    name="Property_icondata"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_icondata }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_icondata'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_icondata') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">

                            </div>
                            <div class="col-3 p-3">

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-12 p-1 mt-3 bg-warning text-start font-weight-bold">
                                □ 周辺情報
                            </div>
                        </div>

                        {{--ROW11--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                周辺情報
                            </div>
                            <div class="col-11 p-3">
                                <input
                                    id="Property_dataoption2"
                                    name="Property_dataoption2"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_dataoption2 }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_dataoption2'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_dataoption2') }}
                                    </div>
                                @endif
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-12 p-1 mt-3 bg-warning text-start font-weight-bold">
                                □ 交通情報
                            </div>
                        </div>


                        {{--ROW9--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                路線名
                            </div>
                            <div class="col-7 p-3">
                                <input
                                    id="Property_traindata1"
                                    name="Property_traindata1"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_traindata1 }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_traindata1'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_traindata1') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-4">

                            </div>

                        </div>

                        {{--ROW10--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                駅からの距離（車）
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_traindata3tohoorcar"
                                    name="Property_traindata3tohoorcar"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_traindata3tohoorcar }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_traindata3tohoorcar'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_traindata3tohoorcar') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                駅からの距離（徒歩）
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_traindata2"
                                    name="Property_traindata2"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_traindata2 }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_traindata2'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_traindata2') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-1 p-3 d-flex align-items-center">
                                駅からの時間
                            </div>
                            <div class="col-3 p-3">
                                <input
                                    id="Property_stationdistance"
                                    name="Property_stationdistance"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_stationdistance }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_stationdistance'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_stationdistance') }}
                                    </div>
                                @endif
                            </div>


                        </div>


                        {{--ROW15--}}
                        <div class="row">
                            <div class="col-1 p-3 d-flex align-items-center">
                                物件メモ
                            </div>
                            <div class="col-11 p-3">
                                <input
                                    id="Property_status_ddone"
                                    name="Property_status_ddone"
                                    class="form-control form-control-sm"

                                    value="{{ $property_lists->Property_status_ddone }}"
                                    type="text"
                                >
                                @if ($errors->has('Property_status_ddone'))
                                    <div class="text-danger">
                                        {{ $errors->first('Property_status_ddone') }}
                                    </div>
                                @endif


                            </div>

                        </div>


                        <input
                            id="property_id"
                            name="property_id"
                            class="form-control form-control-sm"

                            value="{{ md5(date('y/m/d H:i:s'))}}"
                            type="hidden"
                        >


                        <input name="property_id" value="{{ md5(date('y/m/d H:i:s'))}}" type="hidden">


                        <div class="mt-5">

                            <button type="submit" class="btn btn-primary">
                                更新する
                            </button>
                        </div>


                    </form>


                </div>
                <div
                    class="tab-pane p-5 fade <?php if($tab_detail == 2&&$list_detail == $property_lists -> id){echo 'show active';}?>"
                    id="content_2__{{$property_lists -> id}}"
                    role="tabpanel"
                    aria-labelledby="profile-tab"
                >

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                LIST

                                <a href="{{asset('dp_assessment_list')}}?tabs=1&&cals=12&&list_detail={{$property_lists -> id}}&&tab_detail=2#collapse_{{$property_lists -> id}}">link</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                FROM

                            </div>
                        </div>

                    </div>


                </div>

            </div>


        </div>


    </td>
</tr>


