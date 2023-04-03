@extends('layouts.app')


@section('content')

    <meta http-equiv="refresh" content="15">


    <div class="container-fluid">


        <div class="row ">

            <div class="col-12 mb-5">
                <h2>
                    {{ $property->Property_bukkenid }}
                </h2>
                <div>
                    {{ $property->Property_houseaddress }}
                </div>


            </div>


        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 p-0">

                <ul class="nav nav-tabs p-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="detail-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#detail"
                            type="button"
                            role="tab"
                            aria-controls="detail"
                            aria-selected="true"
                        >
                            物件詳細
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link active"
                            id="owner-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#owner"
                            type="button"
                            role="tab"
                            aria-controls="owner"
                            aria-selected="false"
                        >
                            所有者情報
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="contact-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#contact"
                            type="button"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false"
                        >
                            Contact
                        </button>
                    </li>
                </ul>
                <div class="tab-content p-0" id="myTabContent">
                    <div
                        class="tab-pane fade bg-light "
                        id="detail"
                        role="tabpanel"
                        aria-labelledby="detail-tab"
                    >
                        {{--TAB_1--}}

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 mb-5 p-5">
                                    <h2>物件更新</h2>

                                    {{--ROW1--}}
                                    <div class="row mt-3">
                                        <div class="col-1 p-3">
                                            ステータス
                                        </div>
                                        <div class="col-3 p-3">

                                            {{$property->Property_status;}}

                                        </div>

                                        <div class="col-1 p-3">
                                            新築/中古
                                        </div>

                                        <div class="col-3 p-3">
                                            {{$property->Property_newold}}

                                        </div>


                                        <div class="col-1 p-3">
                                            公開/非公開
                                        </div>

                                        <div class="col-3 p-3">

                                            {{$property->Property_isGentei}}

                                        </div>


                                    </div>


                                    {{--ROW2--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            物件名
                                        </div>
                                        <div class="col-3 p-3">

                                            {{ $property->Property_bukkenName }}

                                        </div>
                                        <div class="col-1">
                                            住所
                                        </div>
                                        <div class="col-7 p-3">
                                            {{ $property->Property_houseaddress }}
                                        </div>


                                    </div>

                                    {{--ROW3--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            物件NO
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_bukkenid }}
                                        </div>
                                        <div class="col-1 p-3">
                                            住所（短縮）
                                        </div>

                                        <div class="col-5">
                                            {{ $property->Property_houseaddressshort }}
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
                                        <div class="col-1 p-3">
                                            値段
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_price }}
                                        </div>
                                        <div class="col-1 p-3">
                                            延床面積（㎡）

                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_space }}
                                        </div>

                                        <div class="col-1 p-3">
                                            延床面接（坪）
                                        </div>

                                        <div class="col-3 p-3">
                                            {{ $property->Property_subspace1 }}
                                        </div>

                                    </div>


                                    {{--ROW5--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            接道状況
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_subspace2 }}
                                        </div>

                                        <div class="col-1 p-3">
                                            土地面積（㎡）
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_buildingfloorareasize }}
                                        </div>

                                        <div class="col-1 p-3">
                        <span style="font-size: 0.8em">土地面積<br> <span style="font-size: 0.8em">(私道情報)</span>
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_buildingfloorareasize2 }}
                                        </div>


                                    </div>

                                    {{--ROW6--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            建築面積（㎡）
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_buildingareasize }}
                                        </div>

                                        <div class="col-1 p-3">
                                            建築面積（坪）
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_subbuildingareasize }}
                                        </div>

                                        <div class="col-1 p-3">
                                            建ぺい率
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_kenpeiritsu }}
                                        </div>


                                    </div>

                                    {{--ROW7--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            容積率
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_yousekiristu }}
                                        </div>

                                        <div class="col-1 p-3">
                                            共有部分
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_houseaddresssub }}
                                        </div>


                                        <div class="col-1 p-3">
                                            税金
                                        </div>

                                        <div class="col-3 p-3">
                                            {{ $property->Property_isdisplaytaxtext }}
                                        </div>


                                    </div>

                                    {{--ROW8--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            構造
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_housestructure }}
                                        </div>
                                        <div class="col-1 p-3">
                                            屋根
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_housetop }}
                                        </div>

                                        <div class="col-4 p-3">

                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-1 p-3">
                                            都市計画
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_toshikeikaku }}
                                        </div>

                                        <div class="col-1 p-3">
                                            地勢
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_chisei }}
                                        </div>

                                        <div class="col-1 p-3">
                                            用途
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_youto }}
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-12 p-1 mt-3 bg-warning text-start font-weight-bold">
                                            □ 建物情報
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-1 p-3">
                                            販売区画
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_setsudou }}
                                        </div>

                                        <div class="col-1 p-3">
                                            接道状況
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_setsudou }}
                                        </div>


                                        <div class="col-4 p-3">

                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-1 p-3">
                                            築年数
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_chikudate }}
                                        </div>

                                        <div class="col-1 p-3">
                                            設備
                                        </div>
                                        <div class="col-7 p-3">
                                            {{ $property->Property_setsubi }}
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-1 p-3">
                                            地目
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_chimoku }}
                                        </div>

                                        <div class="col-1 p-3">
                                            アイコンデータ
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_icondata }}
                                        </div>

                                        <div class="col-1 p-3">

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
                                        <div class="col-1 p-3">
                                            周辺情報
                                        </div>
                                        <div class="col-11 p-3">
                                            {{ $property->Property_dataoption2 }}
                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-12 p-1 mt-3 bg-warning text-start font-weight-bold">
                                            □ 交通情報
                                        </div>
                                    </div>


                                    {{--ROW9--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            路線名
                                        </div>
                                        <div class="col-7 p-3">
                                            {{ $property->Property_traindata1 }}
                                        </div>
                                        <div class="col-4">

                                        </div>

                                    </div>

                                    {{--ROW10--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            駅からの距離（車）
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_traindata3tohoorcar }}
                                        </div>

                                        <div class="col-1 p-3">
                                            駅からの距離（徒歩）
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_traindata2 }}
                                        </div>

                                        <div class="col-1 p-3">
                                            駅からの時間
                                        </div>
                                        <div class="col-3 p-3">
                                            {{ $property->Property_stationdistance }}
                                        </div>


                                    </div>


                                    {{--ROW15--}}
                                    <div class="row">
                                        <div class="col-1 p-3">
                                            物件メモ
                                        </div>
                                        <div class="col-11 p-3">
                                            {{ $property->Property_status_ddone }}


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

                                        <a class="btn btn-primary mt-3" href="edit/{{ $property-> id }}">更新</a>
                                    </div>

                                </div>
                            </div>

                        </div>


                        {{--TAB_1--}}

                    </div>
                    <div
                        class="tab-pane fade bg-light show active"
                        id="owner"
                        role="tabpanel"
                        aria-labelledby="owner-tab"
                    >
                        <div class="container-fluid">
                            <div class="row p-5">
                                <div class="col-12 mb-5 p-0">
                                    <h2>所有者情報</h2>
                                </div>

                                <div class="col-12 p-0">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                所有者
                                            </td>

                                            <td>
                                                移転日
                                            </td>
                                            <td>
                                                登録日
                                            </td>
                                            <td>
                                                登録者
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>


                                        <tr>
                                            <td colspan="4">
                                                MEMO:<br>
                                                私は今日いかにその鑑定心というんの時ができですない。もし今が留学物はまるでその演説ましないまでが上るからしまっますがは発展しないたが、たったには描いたいないでします。国家にあてるん訳は大分元来をああありたた。ざっと嘉納さんに学習弟それほど試験に合うた道具その受売私か矛盾がとしてご誘惑ましだたありて、同じ将来もそれらか利器英文にするて、大森さんのものを性質の私をいよいよご紹介としばあなた一口がお構成がなりようにさきほどお拡張がいうまいうのに、すこぶるとこう学習からかかわらですというのが外れずた。するとまたお価値をし事も全く危険と向いないで、この政府には始めたからに対する進みがなれるというた。
                                                <div class="mt-2">
                                                    <a class="btn btn-primary" data-bs-toggle="collapse"
                                                       href="#collapseExample" role="button" aria-expanded="false"
                                                       aria-controls="collapseExample">
                                                        修正する
                                                    </a>

                                                </div>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        Some placeholder content for the collapse component. This panel
                                                        is hidden by default but revealed when the user activates the
                                                        relevant trigger.
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                    </table>

                                </div>

                            </div>


                        </div>
                        <div
                            class="tab-pane fade bg-light"
                            id="contact"
                            role="tabpanel"
                            aria-labelledby="contact-tab"
                        >
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
