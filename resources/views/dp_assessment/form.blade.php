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

                <option value="見積もり依頼" <?php if ($select_form == "見積もり依頼") {
                    echo "selected";
                } ?>>見積もり依頼
                </option>

                <option value="見積もり完了" <?php if ($select_form == "見積もり完了") {
                    echo "selected";
                } ?>>見積もり完了
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
