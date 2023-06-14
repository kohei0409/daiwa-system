@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 p-5">
                <h2>{{ $property->Property_bukkenid }}( {{ $property->Property_bukkenName }})</h2>


                {{--ROW2--}}
                zx
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
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-start">
                    <div
                        class="nav flex-column nav-pills me-3"
                        id="v-pills-tab"
                        role="tablist"
                        aria-orientation="vertical"
                    >
                        <button
                            class="nav-link active"
                            id="v-pills-content_0001-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0001"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0001"
                            aria-selected="true"
                        >
                            見積書
                        </button>
                        <button
                            class="nav-link"
                            id="v-pills-content_0002-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0002"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0002"
                            aria-selected="false"
                        >
                            実行予算
                        </button>
                        <button
                            class="nav-link"
                            id="v-pills-content_0003-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0003"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0003"
                            aria-selected="false"
                        >
                            仮説工事
                        </button>
                        <button
                            class="nav-link"
                            id="v-pills-content_0004-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0004"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0004"
                            aria-selected="false"
                        >
                            基礎工事
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0005-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0005"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0005"
                            aria-selected="false"
                        >
                            木工事
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0006-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0006"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0006"
                            aria-selected="false"
                        >
                            建材
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0007-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0007"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_00077"
                            aria-selected="false"
                        >
                            鋼製建具
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0008-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0008"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0008"
                            aria-selected="false"
                        >
                            板金工事
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0009-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0009"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0009"
                            aria-selected="false"
                        >
                            左官・タイル工事
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0010-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0010"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0010"
                            aria-selected="false"
                        >
                            内装工事
                        </button>
                        <button
                            class="nav-link"
                            id="v-pills-content_0011-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0011"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0011"
                            aria-selected="false"
                        >
                            電気工事
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0012-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0012"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0012"
                            aria-selected="false"
                        >
                            設備工事
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0013-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0013"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0013"
                            aria-selected="false"
                        >
                            設備器具
                        </button>

                        <button
                            class="nav-link"
                            id="v-pills-content_0014-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-content_0014"
                            type="button"
                            role="tab"
                            aria-controls="v-pills-content_0014"
                            aria-selected="false"
                        >
                            雑工事
                        </button>

                    </div>


                    <div class="tab-content" id="v-pills-tabContent">
                        <div
                            class="tab-pane fade show active"
                            id="v-pills-content_0001"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0001-tab"
                        >
                            @php $estimate_no = 1; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0002"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0002-tab"
                        >
                            @php $estimate_no = 2; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0003"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0003-tab"
                        >
                            @php $estimate_no = 3; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0004"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0004-tab"
                        >
                            @php $estimate_no = 4; @endphp
                            @include('dp_construction.estimate_form')
                        </div>

                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0005"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0005-tab"
                        >
                            @php $estimate_no = 5; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0006"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0006-tab"
                        >
                            @php $estimate_no = 6; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0007"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0007-tab"
                        >
                            @php $estimate_no = 7; @endphp
                            @include('dp_construction.estimate_form')
                        </div>

                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0008"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0008-tab"
                        >
                            @php $estimate_no = 8; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0009"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0009-tab"
                        >
                            @php $estimate_no = 9; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0010"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0010-tab"
                        >
                            @php $estimate_no = 10; @endphp
                            @include('dp_construction.estimate_form')
                        </div>

                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0011"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0011-tab"
                        >
                            @php $estimate_no = 11; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0012"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0012-tab"
                        >
                            @php $estimate_no = 12; @endphp
                            @include('dp_construction.estimate_form')
                        </div>
                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0013"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0013-tab"
                        >
                            @php $estimate_no = 13; @endphp
                            @include('dp_construction.estimate_form')
                        </div>

                        <div
                            class="tab-pane fade"
                            id="v-pills-content_0014"
                            role="tabpanel"
                            aria-labelledby="v-pills-content_0014-tab"
                        >
                            @php $estimate_no = 14; @endphp
                            @include('dp_construction.estimate_form')
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
