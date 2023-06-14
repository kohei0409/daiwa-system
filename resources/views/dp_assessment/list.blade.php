@extends('layouts.app')

@section('content')

    <?php
    $areasize = $_GET["areasize"] ?? "";
    $roomnumber = $_GET["roomnumber"] ?? "";
    $button_areasize = $_GET["button_areasize"] ?? "";
    $list_detail = $_GET["list_detail"] ?? "";
    $show = $_GET["show"] ?? "";
    $tab_detail = $_GET["tab_detail"] ?? "";
    $cals = $_GET["cals"] ?? "0";
    $page_upload = $_GET["page_upload"] ?? "0";

    ?>




        <!-- コンテンツの表示 -->



    <style>

        .hidden {
            display: none;
        }

    </style>

    <script>
        const selectOption = document.getElementById('selectOption');
        const element1 = document.getElementById('element1');
        const element2 = document.getElementById('element2');
        const element3 = document.getElementById('element3');

        selectOption.addEventListener('change', function () {
            const selectedOption = selectOption.value;

            // 全ての要素を非表示にする
            element1.classList.add('hidden');
            element2.classList.add('hidden');
            element3.classList.add('hidden');

            // 選択されたオプションに応じて要素を表示する
            if (selectedOption === 'option1') {
                element1.classList.remove('hidden');
            } else if (selectedOption === 'option2') {
                element2.classList.remove('hidden');
            } else if (selectedOption === 'option3') {
                element3.classList.remove('hidden');
            }
        });

    </script>

    <style>
        .card .card-body {
            padding: 1rem 2.25rem;
            color: var(--kt-card-color);
        }
    </style>


    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-fluid ">

            <div class="row gy-5 g-xl-10">
                <div class="col-xl-12 col-xxl-12 mb-5 mb-xl-10">

                    <div class="card card-flush h-xl-100">
                        <div class="card-body bg-light">


                            <div class="accordion mt-5 " id="accordionExample">
                                <div><h4>見積書一覧</h4></div>
                                <?php $cnt = 0; ?>
                                @foreach($property_list_2 as $property_lists_2)
                                    @php $pop = 1; @endphp

                                    @include('dp_assessment.estimate')
                                        <?php $cnt++; ?>
                                @endforeach
                            </div>




                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->

                    </div>
                    <!--end::Table Widget 3-->    </div>
            </div>




            <div class="row gy-5 g-xl-10">
                <div class="col-xl-12 col-xxl-12 mb-5 mb-xl-10">

                    <div class="card card-flush h-xl-100">
                        <div class="card-body bg-light">


                            <div class="accordion mt-5 " id="accordionExample">
                                <div><h4>査定一覧</h4></div>
                                <?php $cnt = 0; ?>
                                @foreach($property_list as $property_lists)
                                    @php $pop = 1; @endphp
                                    @include('dp_assessment.result')
                                        <?php $cnt++; ?>
                                @endforeach
                            </div>

                            <div class="text-end my-3">
                                <a type="button" class="btn btn-warning btn-sm btn-block"
                                   data-bs-toggle="modal"
                                   data-bs-target="#Modal">
                                    査定物件登録
                                </a>
                            </div>
                            <!-- Modal -->

                            <div class="modal fade" id="Modal" tabindex="-1"
                                 aria-labelledby="ModalLabel" aria-hidden="true"
                                 data-bs-backdrop="static">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button
                                                        class="nav-link active"
                                                        id="pills-input_0001-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#pills-input_0001"
                                                        type="button"
                                                        role="tab"
                                                        aria-controls="pills-input_0001"
                                                        aria-selected="true"
                                                    >
                                                        新規登録
                                                    </button>
                                                </li>


                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div
                                                    class="tab-pane p-5 fade show active bg-light"
                                                    id="pills-input_0001"
                                                    role="tabpanel"
                                                    aria-labelledby="pills-home-tab"
                                                >
                                                    <form action="{{ route('dp_assessment_store_post') }}"
                                                          method="POST">
                                                        @csrf


                                                        <div class="mb-3">
                                                            <label for="property_bukkenid"
                                                                   class="form-label">物件ID（物件ごとの固有ID）</label>
                                                            <input type="text" class="form-control"
                                                                   id="property_bukkenid"
                                                                   name="property_bukkenid" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="property_bukkenName"
                                                                   class="form-label">物件名</label>
                                                            <input type="text" class="form-control"
                                                                   id="property_bukkenName"
                                                                   name="property_bukkenName" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="property_houseaddress"
                                                                   class="form-label">住所</label>
                                                            <input type="text" class="form-control"
                                                                   id="property_houseaddress"
                                                                   name="property_houseaddress" required>
                                                        </div>

                                                        <input type="hidden" class="form-control"
                                                               id="property_status"
                                                               name="property_status" value="査定中">

                                                        <input type="hidden" class="form-control"
                                                               id="property_id"
                                                               name="property_id"
                                                               value="<?php echo md5(date('Y-m-d H:i:s')); ?>">

                                                        <button type="submit" class="btn btn-primary">登録
                                                        </button>
                                                    </form>

                                                </div>


                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->

                    </div>
                    <!--end::Table Widget 3-->    </div>
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.min.js"></script>


    <script>
        $(function () {
            $('.sort-table').tablesorter({
                textExtraction: function (node) {
                    var attr = $(node).attr('data-value');
                    if (typeof attr !== 'undefined' && attr !== false) {
                        return attr;
                    }
                    return $(node).text();
                }
            });
        });
    </script>

@endsection


<script>
    function checkSubmit() {
        if (window.confirm('送信してよろしいですか？')) {
            return true;
        } else {
            return false;
        }
    }
</script>
