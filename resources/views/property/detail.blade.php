@extends('layouts.app')


@section('content')


@if (isset($_GET["tabs"]) && !empty($_GET["tabs"]))
    @php($tabs = $_GET['tabs'])
@else
    @php($tabs = "2")
@endif


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
                            class="nav-link <?php if($tabs == '1'){echo 'active';} ?>"
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
                            class="nav-link <?php if($tabs == '2'){echo 'active';} ?>"
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
                            class="nav-link <?php if($tabs == '3'){echo 'active';} ?>"
                            id="constraction-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#constraction"
                            type="button"
                            role="tab"
                            aria-controls="constraction"
                            aria-selected="false"
                        >
                            工事情報
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link <?php if($tabs == '4'){echo 'active';} ?>"
                            id="memo-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#memo"
                            type="button"
                            role="tab"
                            aria-controls="memo"
                            aria-selected="false"
                        >
                            メモ
                        </button>
                    </li>
                </ul>
                <div class="tab-content p-0 " id="myTabContent">
                    <div
                        class="tab-pane fade bg-light <?php if($tabs == '1'){echo 'show active';} ?>"
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
                        class="tab-pane fade bg-light <?php if($tabs == '2'){echo 'show active';} ?>"
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

                                        @foreach($owner_list as $owner_lists)
                                            <tr>
                                                <td>{{$owner_lists -> OwnerName}}</td>
                                                <td>{{$owner_lists -> RegisteredTransfer}}</td>
                                                <td>{{$owner_lists -> created_at}}</td>
                                                <td>4{{$owner_lists -> Register}}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="4">
                                                    MEMO:<br>{{$owner_lists -> Memo}}

                                                    <div class="mt-2">
                                                        <a class="btn btn-primary" data-bs-toggle="collapse"
                                                           href="#collapseExample" role="button" aria-expanded="false"
                                                           aria-controls="collapseExample">
                                                            修正する
                                                        </a>

                                                    </div>


                                                    <div class="collapse" id="collapseExample">
                                                        <div class="card card-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-12 p-0">

                                                                        <link rel="stylesheet"
                                                                              href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                                                                        <script
                                                                            src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                                        <script
                                                                            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
                                                                        </head>


                                                                        <form method="POST"
                                                                              action="{{ route('owner_update') }} "
                                                                              onSubmit="return checkSubmit()">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                <label for="OwnerName"
                                                                                       class="form-label">オーナー名：</label>
                                                                                <input type="text" name="OwnerName"
                                                                                       id="OwnerName"
                                                                                       value="{{ $owner_lists->OwnerName }}"
                                                                                       class="form-control">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="Memo"
                                                                                       class="form-label">メモ：</label>
                                                                                <textarea name="Memo" id="Memo"
                                                                                          class="form-control">{{ $owner_lists->Memo }}</textarea>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label class="form-label">状態：</label>
                                                                                <div class="form-check">
                                                                                    <input type="radio" name="Stance"
                                                                                           id="Stance1" value="0"
                                                                                           class="form-check-input" {{ $owner_lists->Stance == 0 ? 'checked' : '' }}>
                                                                                    <label for="Stance1"
                                                                                           class="form-check-label">0</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="radio" name="Stance"
                                                                                           id="Stance2" value="1"
                                                                                           class="form-check-input" {{ $owner_lists->Stance == 1 ? 'checked' : '' }}>
                                                                                    <label for="Stance2"
                                                                                           class="form-check-label">1</label>
                                                                                </div>
                                                                            </div>


                                                                            <div class="mb-3">
                                                                                <label for="RegisteredTransfer"
                                                                                       class="form-label">移転日：</label>
                                                                                <input type="text"
                                                                                       name="RegisteredTransfer"
                                                                                       id="RegisteredTransfer"
                                                                                       value="{{ $owner_lists->RegisteredTransfer }}"
                                                                                       class="form-control">
                                                                            </div>


                                                                            <input
                                                                                type="hidden" name="id"
                                                                                value="{{ $property-> id }}">
                                                                            <input
                                                                                type="hidden" name="created_at"
                                                                                value="{{ $owner_lists->created_at }}">
                                                                            <input type="hidden" name="BukkenID"
                                                                                   value="{{ $owner_lists->BukkenID }}">

                                                                            <input
                                                                                type="hidden" name="Register"
                                                                                value="{{ $owner_lists->Register }}">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">
                                                                                更新する
                                                                            </button>

                                                                        </form>

                                                                        <form method="POST"
                                                                              action="{{ route('owner_destroy', $owner_lists->id) }}"
                                                                              onSubmit="return checkDelete()">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <input
                                                                                type="hidden" name="uid"
                                                                                value="{{ $property-> id }}">
                                                                            <button type="submit"
                                                                                    class="btn btn-danger">削除する
                                                                            </button>
                                                                        </form>

                                                                        <script>
                                                                            $(function () {
                                                                                $('#RegisteredTransfer').datepicker({
                                                                                    dateFormat: 'yy-mm-dd'
                                                                                });
                                                                            });

                                                                            $(function () {
                                                                                $('#RegisteredTransfer2').datepicker({
                                                                                    dateFormat: 'yy-mm-dd'
                                                                                });
                                                                            });
                                                                        </script>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        @endforeach


                                    </table>

                                    <div class="container mt-4">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-header">{{ __('新規登録') }}</div>

                                                    <div class="card-body p-3">
                                                        <form method="POST" action="{{ route('owner_input') }}">
                                                            @csrf

                                                            <div class="mb-3">
                                                                <label for="OwnerName"
                                                                       class="form-label">オーナー名：</label>
                                                                <input type="text" name="OwnerName" id="OwnerName"
                                                                       class="form-control" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="Memo" class="form-label">メモ：</label>
                                                                <textarea name="Memo" id="Memo"
                                                                          class="form-control" rows="10"></textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="RegisteredTransfer"
                                                                       class="form-label">移転日：</label>
                                                                <input type="text"
                                                                       name="RegisteredTransfer"
                                                                       id="RegisteredTransfer2"
                                                                       value="<?php echo date('Y-m-d') ?>"
                                                                       class="form-control">

                                                            </div>

                                                            <input type="hidden" name="BukkenID"
                                                                   value=" {{ $property->Property_bukkenid }}">
                                                            <input type="hidden" name="Register"
                                                                   value="0">
                                                             <input type="hidden" name="Stance" value="0" >
                                                            <input
                                                                type="hidden" name="id"
                                                                value="{{ $property-> id }}">
                                                            <button type="submit" class="btn btn-primary">登録する
                                                            </button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>
                    </div>
                    <div
                        class="tab-pane fade bg-light <?php if($tabs == '3'){echo 'show active';} ?>"
                        id="constraction"
                        role="tabpanel"
                        aria-labelledby="contact-tab"
                    >
                        ...
                    </div>

                    <div
                        class="tab-pane fade bg-light <?php if($tabs == '4'){echo 'show active';} ?>"
                        id="memo"
                        role="tabpanel"
                        aria-labelledby="memo-tab"
                    >
                        <div class="container-fluid">
                            <div class="row p-5">
                                <div class="col-12 mb-2 p-0">
                                    <h2>MEMO</h2>
                                </div>

                                <div class="col-12 mb-5 p-0">
                                    <form action="{{ route('memo_input') }}" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <textarea class="form-control" id="Memo" name="Memo" rows="5"></textarea>
                                        </div>
                                        <input type="hidden" class="form-control" id="BukkenID" name="BukkenID"
                                               value="{{ $property->Property_bukkenid }}" readonly>

                                        <input type="hidden" class="form-control" id="Manager" name="Manager"
                                               value="{{ Auth::user()->name }}">
                                        <input type="hidden" class="form-control" id="Register" name="Register"
                                               value="0">
                                        <input
                                            type="hidden" name="id"
                                            value="{{ $property-> id }}">
                                         <input
                                            type="hidden" name="tabs"
                                            value="4">

                                        <button type="submit" class="btn btn-primary">登録する</button>
                                    </form>
                                </div>

                            </div>
                            <div class="col-12 mb-5 p-0">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Memo</th>
                                        <th scope="col">Register</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($memos as $memo)
                                        <tr>
                                            <th scope="row">{{ $memo->id }}</th>
                                            <td>{{ $memo->Memo }}</td>
                                            <td>{{ $memo->Register }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
