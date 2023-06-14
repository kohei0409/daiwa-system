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

    <style>
        .tab_button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            background-color: #fff;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
            text-decoration: none;
        }


    </style>


    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-fluid ">

            <div class="row gy-5 g-xl-10">
                <div class="col-xl-12 col-xxl-12 mb-5 mb-xl-10">

                    <div class="card card-flush h-xl-100">
                        <div class="card-body bg-light">
                            <div><h4>見積書依頼一覧</h4></div>
                            <div class="mt-3">
                                <table class="table table-hover mt-2" style="">


                                    <?php $cnt = 0; ?>
                                    @foreach($property_list as $property_lists)
                                        @php $pop = 1; @endphp
                                        @include('dp_construction.estimate_list')
                                            <?php $cnt++; ?>
                                    @endforeach
                                </table>

                                <style>


                                    .clickable-row {
                                        cursor: pointer;
                                    }

                                    .clickable-row td {
                                        height: 60px;
                                        vertical-align: middle;
                                        padding: 10px;
                                    }

                                </style>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        const rows = document.querySelectorAll(".clickable-row");
                                        rows.forEach(function (row) {
                                            row.addEventListener("click", function () {
                                                const href = this.dataset.href;
                                                if (href) {
                                                    window.location.href = href;
                                                }
                                            });
                                        });
                                    });
                                </script>
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




    <script>
        function checkSubmit() {
            if (window.confirm('送信してよろしいですか？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>

@endsection
