@extends('layouts.app')


@section('content')

    <?php
    if (!empty($_GET["search"])) {
        $search = $_GET['search'];
    } else {
        $search = "";
    }

    if (!empty($_GET["sales"])) {
        $sales = $_GET['sales'];
    } else {
        $sales = "";
    }

    if (!empty($_GET["pet"])) {
        $pet = $_GET['pet'];
    } else {
        $pet = "";
    }

    if (!empty($_GET["madori"])) {
        $madori = $_GET['madori'];
    } else {
        $madori = "";
    }

    if (!empty($_GET["button_one_price"])) {
        $button_one_price = $_GET['button_one_price'];
    } else {
        $button_one_price = "";
    }

    if (!empty($_GET["button_one"])) {
        $button_one = $_GET['button_one'];
    } else {
        $button_one = "";
    }

    if (!empty($_GET["button_two_price"])) {
        $button_two_price = $_GET['button_two_price'];
    } else {
        $button_two_price = "";
    }

    if (!empty($_GET["button_two"])) {
        $button_two = $_GET['button_two'];
    } else {
        $button_two = "";
    }
    ?>


    <?php
    if (!empty($_GET["areasize"])) {
        $areasize = $_GET['areasize'];
    } else {
        $areasize = "";
    }
    ?>

    <?php
    if (!empty($_GET["roomnumber"])) {
        $roomnumber = $_GET['roomnumber'];
    } else {
        $roomnumber = "";
    }
    ?>

    <?php
    if (!empty($_GET["button_areasize"])) {
        $button_areasize = $_GET['button_areasize'];
    } else {
        $button_areasize = "";
    }
    ?>

    <?php
    if (!empty($_GET["show"])) {
        $show = $_GET['show'];
    } else {
        $show = "";
    }
    ?>
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

    <div class="container-fluid" style="z-index: 99">


        <div class="row mb-5">

            <div class="col">

                <!-- Card -->
                <div class="card border-0 flex-fill w-100"
                     data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}'
                     id="users">
                    <div class="card-header border-0 card-header-space-between text-end">

                        <h2>査定中情報</h2>




                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-nowrap mb-0 sort-table">
                            <thead>
                            <tr>

                                <th class="sorter-false"></th>

                                <th class="w-60px">
                                    ID
                                </th>
                                <th class="w-60px">
                                    ステータス
                                </th>

                                <th class="w-60px">
                                    物件ID
                                </th>
                                <th class="">
                                    物件名
                                </th>
                                <th>
                                    住所
                                </th>


                            </tr>


                            </thead>

                            <tbody class="list">


                            @foreach($property_list as $property_lists)
                                @php $pop = 1; @endphp
                                @include('dp_assessment.result')

                            @endforeach

                            </tbody>
                        </table>
                    </div> <!-- / .table-responsive -->

                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container-fluid -->


        <style>
            .tablesorter th {
                position: relative;
                cursor: pointer;
                text-align: left;
            }

            .tablesorter th::before, .tablesorter th::after {
                content: '';
                position: absolute;
                z-index: 2;
                right: 7px;
                width: 0;
                height: 0;
                border: 4px dashed;
                border-color: #333 transparent;
                pointer-events: none;
            }

            .tablesorter th::before {
                border-bottom-style: solid;
                border-top: none;
                top: 30%;
            }

            .tablesorter th::after {
                border-top-style: solid;
                border-bottom: none;
                bottom: 30%;
            }

            .tablesorter th.tablesorter-headerAsc:after {
                border: none;
            }

            .tablesorter th.tablesorter-headerAsc:before {
                top: 50%;
                transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
            }

            .tablesorter th.tablesorter-headerDesc:before {
                border: none;
            }

            .tablesorter th.tablesorter-headerDesc:after {
                top: 50%;
                transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
            }

            .tablesorter th.sorter-false:before, .tablesorter th.sorter-false:after {
                border: none;
            }
        </style>

@endsection
