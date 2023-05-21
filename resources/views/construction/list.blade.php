@extends('layouts.app')
@section('content')

    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#fav-table').tablesorter();
        });

    </script>

    <style>
        .tablesorter-headerUnSorted {
            background-image: url('img/sort.png');
            background-repeat: no-repeat;
            background-position: center right;
        }

        .tablesorter-headerAsc {
            background-image: url('img/sort_a.png');
            background-repeat: no-repeat;
            background-position: center right;
            border-bottom: #000 2px solid;
        }

        .tablesorter-headerDesc {
            background-image: url('img/sort_d.png');
            background-repeat: no-repeat;
            background-position: center right;
            border-bottom: #000 2px solid;
        }

        .sorter-false {
            background-image: none;
        }

        .sorter-false {
            background-image: none;
        }


    </style>


    <div class="row mb-2">
        <div class="col-10 offset-1 mb-3">
            <h2>工事詳細</h2>
        </div>


        <div class="col-10 text-end mb-3 offset-1">

            <?php
            if (!empty($_GET["get_month"])) {
                $get_month = $_GET['get_month'];
            } else {
                $get_month = "";
            }
            if (!empty($_GET["select_position"])) {
                $select_position = $_GET['select_position'];
            } else {
                $select_position = "";
            }
            $param = strstr($_SERVER["REQUEST_URI"], '?');
            ?>

            <a class="btn btn-secondary mr-3 text-white"
               href="https://www.daiwa-housing.jp/dhs/system/paper<?php echo $param;?>">印刷する</a>
            <a class="btn btn-outline-danger mx-1 text-red"
               href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=<?php echo $get_month; ?>&&select_position=property">現場名で並べる</a>
            <a class="btn btn-outline-danger mr-3 text-red"
               href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=<?php echo $get_month; ?>&&select_position=contractor">業者名で並べる</a>
            <a class="btn btn-success mx-1 text-white"
               href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=">すべて表示</a>
            <a class="btn btn-success mx-1 text-white"
               href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=<?php echo date('Y/n'); ?>&&select_position=">今月：<?php echo date('Y/n'); ?></a>
            <a class="btn btn-success mx-1 text-white"
               href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=<?php echo date('Y/n', strtotime('-1 month')); ?>&&select_position=">先月：<?php echo date('Y/n', strtotime('-1 month')); ?></a>
            <a class="btn btn-success mx-1 text-white"
               href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=<?php echo date('Y/n', strtotime('-2 month')); ?>&&select_position=">先々月：<?php echo date('Y/n', strtotime('-2 month')); ?> </a>

        </div>

    </div>



    <div class="row">

        <div class="col-10 offset-1 mb-5" style="background-color: #eeeeee;">
            <form method="POST" action="{{ route('constructionstore') }}" onSubmit="return checkSubmit()">
                @csrf

                <table class="table">
                    <thead>
                    <tr>

                        <th>年月</th>
                        <th>現場名</th>
                        <th>業者名</th>
                        <th>工事名</th>

                    </tr>
                    </thead>


                    <tr>
                        <td>
                            <div class="form-group">
                                <select name="construction_select" class="form-control">
                                    <option value="<?php echo date('Y/n'); ?>"><?php echo date('Y/n'); ?></option>
                                    <option
                                        value="<?php echo date('Y/n', strtotime('-1 month')); ?>"><?php echo date('Y/n', strtotime('-1 month')); ?></option>
                                    <option
                                        value="<?php echo date('Y/n', strtotime('-2 month')); ?>"><?php echo date('Y/n', strtotime('-2 month')); ?></option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <select name="construction_name" class="form-control">
                                    @foreach($properties as $property)
                                        @if($property->Property_status == "工事中")
                                            <option
                                                value="{{ $property-> Property_bukkenid }}">{{ $property-> Property_bukkenid }}</option>
                                        @endif
                                    @endforeach
                                </select>


                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <select name="construction_contractor" class="form-control">
                                    @foreach($manufacturers as $manufacturer)
                                        <option
                                            value="{{ $manufacturer->manufacturers_id }}">{{ $manufacturer->manufacturers_name }}</option>
                                    @endforeach
                                    @if ($errors->has('construction_contractor'))
                                        <div class="text-danger">
                                            {{ $errors->first('construction_contractor') }}
                                        </div>
                                    @endif
                                </select>


                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input
                                    id="construction_category"
                                    name="construction_category"
                                    class="form-control"
                                    value="{{ old('construction_category') }}"
                                    type="text" required
                                >
                                @if ($errors->has('construction_category'))
                                    <div class="text-danger">
                                        {{ $errors->first('construction_category') }}
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                作成する
                            </button>
                        </td>

                    </tr>


                </table>

                <input type="hidden" name="construction_detail" value="">
                <input type="hidden" name="construction_number" value="">
                <input type="hidden" name="construction_unit" value="">
                <input type="hidden" name="construction_price" value="">
                <input type="hidden" name="construction_input" value="">
                <input type="hidden" name="construction_id" value="{{md5(date('Y-m-d H:i:s'))}}">
                <input type="hidden" name="construction_etc" value="">
                <input type="hidden" name="construction_process_001" value="0">
                <input type="hidden" name="construction_process_002" value="">
                <input type="hidden" name="construction_process_003" value="">
                <input type="hidden" name="construction_user" value="{{ Auth::check() ? Auth::user()->email : '' }}">


            </form>
        </div>


        <div class="col-10 offset-1 pb-5">

            <table id="fav-table" class="table table-bordered">
                <thead>
                <tr style="background-color: #eee">
                    {{--                    <th class="sorter-false">ID</th>--}}
                    <th class="sorter-false">年月</th>
                    <th class="sorter-false">現場名</th>
                    <th class="sorter-false">業者名</th>
                    <th class="sorter-false">工事項目</th>
                    <th class="sorter-false">工事名</th>
                    <th class="sorter-false">数/単位</th>
                    <th class="sorter-false">金額</th>


                    <th class="sorter-false text-end"></th>

                    <th class="sorter-false text-end"></th>
                    <th class="sorter-false text-end"></th>


                </tr>
                </thead>


                <?php
                //                $constructions = $constructions->sortByDesc('id');

                if ($select_position == 'property') {
                    $constructions = $construction->sortByDesc('construction_id');

                }
                if ($select_position == 'contractor') {
                    $constructions = $construction->sortByDesc('construction_contractor');
                }


                ?>

                @foreach($constructions as $construction)

                    @if(!$construction->construction_detail)
                        <tr>
                            <td>{{ $construction->construction_select }}</td>
                            <td>{{ $construction->construction_name }}</td>
                            <td>
                                @foreach($manufacturers as $manufacturer)

                                    @if($construction->construction_contractor == $manufacturer->manufacturers_id)

                                        {{$manufacturer->manufacturers_name}}

                                    @endif

                                @endforeach

                            </td>
                            <td>{{ $construction->construction_category }}</td>
                            <td>{{ $construction->construction_detail }}</td>
                            <td>{{ $construction->construction_number }}{{ $construction->construction_unit }}</td>
                            <td>{{ $construction->construction_price }}</td>


                            <td style="text-align: center;">
                                <a>
                                    <i class="fas fa-plus"></i>
                                </a>


                            </td>
                            <td style="text-align: center;">
                                <form method="POST" action="{{ route('constructiondelete', $construction->id) }}"
                                      onSubmit="return checkDelete()">
                                    @csrf

                                    <button type="submit" onclick
                                            style="border: 0px;background-color: transparent;cursor: pointer;"><i
                                            class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td style="text-align: center;width: 30px">

                            </td>
                        </tr>


                    @endif

                @endforeach

            </table>
        </div>
    </div>


    <script>
        function checkDelete() {
            if (window.confirm('削除してよろしいですか？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>

@endsection
