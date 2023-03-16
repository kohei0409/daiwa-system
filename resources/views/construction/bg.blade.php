@extends('layouts.app')
@section('content')

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

               href="https://daiwa-housing.jp/database/list/paper<?php echo $param;?>">印刷する</a>

            <a class="btn btn-outline-danger mx-1 text-red"
               href="https://daiwa-housing.jp/database/list/construction?get_month=<?php echo $get_month; ?>&&select_position=property">現場名で並べる</a>
            <a class="btn btn-outline-danger mr-3 text-red"
               href="https://daiwa-housing.jp/database/list/construction?get_month=<?php echo $get_month; ?>&&select_position=contractor">業者名で並べる</a>


            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/database/list/construction?get_month=all&&select_position=">すべて表示</a>
            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/database/list/construction?get_month=<?php echo date('Y/n'); ?>&&select_position=">今月：<?php echo date('Y/n'); ?></a>
            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/database/list/construction?get_month=<?php echo date('Y/n', strtotime('-1 month')); ?>&&select_position=">先月：<?php echo date('Y/n', strtotime('-1 month')); ?></a>
            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/database/list/construction?get_month=<?php echo date('Y/n', strtotime('-2 month')); ?>&&select_position=">先々月：<?php echo date('Y/n', strtotime('-2 month')); ?> </a>

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

                                        {{--                                        @if($property->property_status == "工事中")--}}

                                        <option
                                            value="{{ $property-> Property_bukkenid }}">{{ $property-> Property_bukkenid }}</option>
                                        {{--                                        @endif--}}

                                    @endforeach


                                </select>


                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <select name="construction_contractor" class="form-control">
                                    @foreach($manufacturers as $manufacturer)
                                        <option
                                            value="{{ $manufacturer->contractor_id }}">{{ $manufacturer->contractor_name }}</option>
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
                                    type="text"
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


                <meta http-equiv="refresh" content="10">

                <?php
                //                $constructions = $constructions->sortByDesc('id');

                if ($select_position == 'property') {
                    $constructions = $construction->sortByDesc('construction_id');

                }
                if ($select_position == 'contractor') {
                    $constructions = $construction->sortByDesc('construction_contractor');

                }

                ?>


                {{--                日付指定--}}

                @foreach($constructions as $construction)
                        <?php
                        $select_month = $construction->construction_select;
                        $select_input = $construction->construction_input;

                    if ($select_month == $get_month) {
                    if ($select_input == "") {
                        ?>
                    <tr>

                        <td>{{ $construction->construction_select }}</td>
                        <td>{{ $construction->construction_name }}</td>
                        <td><?php
                                $book_con = $construction->construction_contractor;
                                ?>

                            @foreach($contractors as $contractor)

                                    <?php
                                    $con_id = $contractor->contractor_id;
                                    $con_name = $contractor->contractor_name;
                                    if ($book_con == $con_id) {
                                        echo $con_name;
                                    }
                                    ?>

                            @endforeach
                        </td>
                        <td>{{ $construction->construction_category }}</td>
                        <td>{{ $construction->construction_detail }}</td>
                        <td>{{ $construction->construction_number }}{{ $construction->construction_unit }}</td>
                        <td>{{ $construction->construction_price }}</td>


                        <td style="text-align: center;">
                            {{--                            <a href="/db/construction/edit/{{ $property->id }}"--}}
                            {{--                               style="border: 0px;background-color: transparent;cursor: pointer;color: black;"><i--}}
                            {{--                                    class="fas fa-pen"></i></a>--}}
                            <a data-bs-toggle="collapse" href="#tag_{{ $construction->construction_id }}" role="button"
                               aria-expanded="false" aria-controls="tag_{{ $construction->construction_id }}">
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
                            <a href="https://daiwa-housing.jp/db/list/upload?uid={{ $construction->construction_id }}">

                                    <?php
                                    $uid = $construction->construction_id;
                                    $filename = 'storage/data/' . $uid . '.pdf';
                                    ?>


                                    <?php if (file_exists($filename)){ ?>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z"/>
                                </svg>

                                <?php } else { ?>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM288.1 344.1C284.3 349.7 278.2 352 272 352s-12.28-2.344-16.97-7.031L216 305.9V408c0 13.25-10.75 24-24 24s-24-10.75-24-24V305.9l-39.03 39.03c-9.375 9.375-24.56 9.375-33.94 0s-9.375-24.56 0-33.94l80-80c9.375-9.375 24.56-9.375 33.94 0l80 80C298.3 320.4 298.3 335.6 288.1 344.1z"/>
                                </svg>

                                <?php } ?>


                            </a>
                        </td>
                    </tr>



                    <tr>
                        <td colspan="16" style="padding: 0;">
                            <div class="collapse" id="tag_{{ $construction->construction_id }}">
                                <div class="card card-body">


                                    <form method="POST" action="{{ route('bookletstore') }}"
                                          onSubmit="return checkSubmit()">


                                        <table class="table">


                                            </tr>
                                            <tr>
                                                <th>項目</th>
                                                <th class="sorter-false">数</th>
                                                <th class="sorter-false">単位</th>
                                                <th>金額</th>
                                                <th>備考</th>
                                                <th></th>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="construction_detail"
                                                            name="construction_detail"
                                                            class="form-control"
                                                            value="{{ old('construction_detail') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('construction_detail'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('construction_detail') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="construction_number"
                                                            name="construction_number"
                                                            class="form-control"
                                                            value="{{ old('construction_number') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('construction_number'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('construction_number') }}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <select name="construction_unit" class="form-control">

                                                            @foreach($tools as $tool)

                                                                <option
                                                                    value=" {{ $tool->tool_name }}"> {{ $tool->tool_name }}</option>
                                                                </option>

                                                            @endforeach
                                                        </select>


                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="construction_price"
                                                            name="construction_price"
                                                            class="form-control"
                                                            value="{{ old('construction_price') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('construction_price'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('construction_price') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">


                                                        <textarea name="construction_etc" id="construction_etc"
                                                                  cols="30"
                                                                  rows="3"></textarea>


                                                    </div>
                                                </td>

                                                <td>
                                                    <button type="submit" class="btn btn-primary">
                                                        投稿する
                                                    </button>
                                                </td>


                                            </tr>


                                        </table>


                                        @csrf

                                        <input type="hidden" name="construction_select"
                                               value="{{ $construction->construction_select }}">
                                        <input type="hidden" name="construction_name"
                                               value="{{ $construction->construction_name }}">
                                        <input type="hidden" name="construction_contractor"
                                               value="{{ $construction->construction_contractor }}">
                                        <input type="hidden" name="construction_category"
                                               value="{{ $construction->construction_category }}">
                                        <input type="hidden" name="construction_process_001"
                                               value="{{ $construction->construction_process_001 }}">

                                        <input type="hidden" name="construction_id"
                                               value=" {{ md5(date('Y-m-d H:i:s')) }}">
                                        <input type="hidden" name="construction_input"
                                               value="{{ $construction->construction_id }}">

                                        <input type="hidden" name="construction_process_002" value="">
                                        <input type="hidden" name="construction_process_003" value="">


                                    </form>

                                </div>
                        </td>


                    </tr>

                        <?php $select_id = $construction->construction_id; ?>

                    @foreach($constructions as $construction)

                            <?php $select_input = $construction->construction_input; ?>

                            <?php if ($select_id == $select_input) { ?>


                        {{--全体表示->詳細--}}
                        <tr>
                            <td colspan="3"></td>
                            <td>{{ $construction->construction_category }}</td>
                            <td>{{ $construction->construction_detail }}</td>
                            <td>{{ $construction->construction_number }}{{ $construction->construction_unit }}</td>
                            <td>{{ $construction->construction_price }}</td>


                            <td style="text-align: center;"><a
                                    href="/db/construction/editdetail/{{ $construction->id }}"
                                    style="border: 0px;background-color: transparent;cursor: pointer;color: black;"><i
                                        class="fas fa-pen"></i></a></td>

                            <td style="text-align: center;">


                                    <?php $select_id = $construction->construction_id;
                                    $cnt = 0;
                                    ?>

                                @foreach($constructions as $constructions)

                                        <?php $select_input = $constructions->construction_input; ?>

                                        <?php if ($select_id == $select_input) {

                                        $cnt++;
                                    }
                                        ?>
                                @endforeach

                                    <?php if ($cnt < 0) { ?>

                                <form method="POST" action="{{ route('constructiondelete', $construction->id) }}"
                                      onSubmit="return checkDelete()">
                                    @csrf

                                    <button type="submit" onclick
                                            style="border: 0px;background-color: transparent;cursor: pointer;"><i
                                            class="far fa-trash-alt"></i></button>

                                </form>
                                <?php } ?>


                            </td>
                            <td style="text-align: center;">
                            </td>
                        </tr>

                        <?php } ?>

                    @endforeach


                    <tr>
                        <td colspan="10" style="background-color: #eee"></td>
                    </tr>






                    <?php }
                    }



                    if ($get_month == 'all') {

                        $select_input = $construction->construction_input;

                        echo $construction->id;echo $construction->construction_input; echo '<br>';

                    if ($select_input === "") {
                        ?>
                    <tr>
                        <td>{{ $construction->construction_select }}</td>
                        <td>{{ $construction->construction_name }}</td>
                        <td>{{}}

                        </td>
                        <td>{{ $construction->construction_category }}</td>
                        <td>{{ $construction->construction_detail }}</td>
                        <td>{{ $construction->construction_number }}{{ $construction->construction_unit }}</td>
                        <td>{{ $construction->construction_price }}</td>


                        <td style="text-align: center;">
                            {{--                            <a href="/db/construction/edit/{{ $construction->id }}"--}}
                            {{--                                                           style="border: 0px;background-color: transparent;cursor: pointer;color: black;"><i--}}
                            {{--                                    class="fas fa-pen"></i></a>--}}

                            <a data-bs-toggle="collapse" href="#tag_{{ $construction->construction_id }}" role="button"
                               aria-expanded="false" aria-controls="tag_{{ $construction->construction_id }}">
                                <i class="fas fa-plus"></i>
                            </a>
                        </td>

                        <td style="text-align: center;">

                                <?php $select_id = $construction->construction_id;
                                $cnt = 0;
                                ?>

                            @foreach($constructions as $constructions)

                                    <?php $select_input = $constructions->construction_input; ?>

                                    <?php if ($select_id == $select_input) {

                                    $cnt++;
                                }
                                    ?>
                            @endforeach

                                <?php if ($cnt < 0) { ?>

                            <form method="POST" action="{{ route('constructiondelete', $construction->id) }}"
                                  onSubmit="return checkDelete()">
                                @csrf
                                <button type="submit" onclick
                                        style="border: 0px;background-color: transparent;cursor: pointer;"><i
                                        class="far fa-trash-alt"></i></button>

                            </form>
                            <?php } ?>
                        </td>

                        <td style="width: 30px">
                            <a href="https://daiwa-housing.jp/db/list/upload?uid={{ $construction->construction_id }}">

                                    <?php
                                    $uid = $construction->construction_id;
                                    $filename = 'storage/data/' . $uid . '.pdf';
                                    ?>


                                    <?php if (file_exists($filename)){ ?>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z"/>
                                </svg>

                                <?php } else { ?>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM288.1 344.1C284.3 349.7 278.2 352 272 352s-12.28-2.344-16.97-7.031L216 305.9V408c0 13.25-10.75 24-24 24s-24-10.75-24-24V305.9l-39.03 39.03c-9.375 9.375-24.56 9.375-33.94 0s-9.375-24.56 0-33.94l80-80c9.375-9.375 24.56-9.375 33.94 0l80 80C298.3 320.4 298.3 335.6 288.1 344.1z"/>
                                </svg>

                                <?php } ?>


                            </a>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="16" style="padding: 0;">
                            <div class="collapse" id="tag_{{ $construction->construction_id }}">
                                <div class="card card-body">


                                    <form method="POST" action="{{ route('constructionstore') }}"
                                          onSubmit="return checkSubmit()">


                                        <table class="table">


                                            </tr>
                                            <tr>
                                                <th>項目</th>
                                                <th class="sorter-false">数</th>
                                                <th class="sorter-false">単位</th>
                                                <th>金額</th>
                                                <th>備考</th>
                                                <th></th>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="construction_detail"
                                                            name="construction_detail"
                                                            class="form-control"
                                                            value="{{ old('construction_detail') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('construction_detail'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('construction_detail') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="construction_number"
                                                            name="construction_number"
                                                            class="form-control"
                                                            value="{{ old('construction_number') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('construction_number'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('construction_number') }}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <select name="construction_unit" class="form-control">

                                                            @foreach($tools as $tool)

                                                                <option
                                                                    value=" {{ $tool->tool_name }}"> {{ $tool->tool_name }}</option>
                                                                </option>

                                                            @endforeach
                                                        </select>


                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="construction_price"
                                                            name="construction_price"
                                                            class="form-control"
                                                            value="{{ old('construction_price') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('construction_price'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('construction_price') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">


                                                        <textarea name="construction_etc" id="construction_etc"
                                                                  cols="30"
                                                                  rows="3"></textarea>


                                                    </div>
                                                </td>

                                                <td>
                                                    <button type="submit" class="btn btn-primary">
                                                        投稿する
                                                    </button>
                                                </td>


                                            </tr>


                                        </table>


                                        @csrf

                                        <input type="hidden" name="construction_select"
                                               value="{{ $construction->construction_select }}">
                                        <input type="hidden" name="construction_name"
                                               value="{{ $construction->construction_name }}">
                                        <input type="hidden" name="construction_contractor"
                                               value="{{ $construction->construction_contractor }}">
                                        <input type="hidden" name="construction_category"
                                               value="{{ $construction->construction_category }}">
                                        <input type="hidden" name="construction_process_001"
                                               value="{{ $construction->construction_process_001 }}">

                                        <input type="hidden" name="construction_id"
                                               value=" {{ md5(date('Y-m-d H:i:s')) }}">
                                        <input type="hidden" name="construction_input"
                                               value="{{ $construction->construction_id }}">

                                        <input type="hidden" name="construction_process_002" value="">
                                        <input type="hidden" name="construction_process_003" value="">


                                    </form>

                                </div>
                        </td>
                    </tr>


                        <?php $select_id = $construction->construction_id; ?>

                    @foreach($constructions as $construction)

                            <?php $select_input = $construction->construction_input; ?>
                            <?php if ($select_id == $select_input) { ?>

                        <tr>
                            <td colspan="3"></td>
                            <td>{{ $construction->construction_category }}</td>
                            <td>{{ $construction->construction_detail }}</td>
                            <td>{{ $construction->construction_number }}{{ $construction->construction_unit }}</td>
                            <td>{{ $construction->construction_price }}</td>


                            <td style="text-align: center;">

                                <a href="/db/construction/editdetail/{{ $construction->id }}"
                                   style="border: 0px;background-color: transparent;cursor: pointer;color: black;"><i
                                        class="fas fa-pen"></i></a></td>

                            <td style="text-align: center;">

                                <form method="POST" action="{{ route('constructiondelete', $construction->id) }}"
                                      onSubmit="return checkDelete()">
                                    @csrf
                                    <button type="submit" onclick
                                            style="border: 0px;background-color: transparent;cursor: pointer;"><i
                                            class="far fa-trash-alt"></i></button>

                                </form>
                            </td>
                            <td>

                            </td>
                        </tr>

                        <?php } ?>

                    @endforeach

                    <tr>
                        <td colspan="11" style="background-color: #eee"></td>
                    </tr>


                    <?php }
                    } ?>

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
