@extends('layout')
@section('title','ブログ詳細')
@section('content')


    <div class="row mb-3 p-3" style="background-color: #dde0e3">
        <div class="col-10 offset-1 mb-5" style="letter-spacing: 0.1em;font-size: 1.5em;font-weight: 500;">
            ＜{{ $manufacturers->manufacturers_name }}＞ <?php echo str_replace('/', '年', $_GET['get_month']); ?>月 工事詳細

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

               href="https://daiwa-housing.jp/db/list/paper<?php echo $param;?>">印刷する</a>


            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/db/list/contractors/<?php echo $_GET['constractor'];?>?get_month=<?php echo date('Y/n'); ?>&&select_position=&&constractor=<?php echo $_GET['constractor'];?>">今月：<?php echo date('Y/n'); ?></a>
            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/db/list/contractors/<?php echo $_GET['constractor'];?>?get_month=<?php echo date('Y/n', strtotime('-1 month')); ?>&&select_position=&&constractor=<?php echo $_GET['constractor'];?>">先月：<?php echo date('Y/n', strtotime('-1 month')); ?></a>
            <a class="btn btn-success mx-1 text-white"
               href="https://daiwa-housing.jp/db/list/contractors/<?php echo $_GET['constractor'];?>?get_month=<?php echo date('Y/n', strtotime('-2 month')); ?>&&select_position=&&constractor=<?php echo $_GET['constractor'];?>">先々月：<?php echo date('Y/n', strtotime('-2 month')); ?> </a>

        </div>

    </div>





    <div class="row">

        <div class="col-10 offset-1 pb-5">

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


            <table id="fav-table" class="table table-bordered">
                <thead>
                <tr style="background-color: #eee">
                    {{--                    <th class="sorter-false">ID</th>--}}
                    <th class="sorter-false">年月</th>
                    <th class="sorter-false">現場名</th>
                    <th class="sorter-false">工事項目</th>
                    <th class="sorter-false">工事名</th>
                    <th class="sorter-false">数/単位</th>
                    <th class="sorter-false">金額</th>
                    <th class="sorter-false">処理</th>


                    <th class="sorter-false text-end"></th>

                    <th class="sorter-false text-end"></th>

                    {{--                    <th class="sorter-false">処理２</th>--}}
                    {{--                    <th>処理３</th>--}}
                </tr>
                </thead>


                <?php
                //                $booklets = $booklets->sortByDesc('id');

                if ($select_position == 'property') {
                    $booklets = $booklets->sortByDesc('booklets_id');

                }
                if ($select_position == 'contractor') {
                    $booklets = $booklets->sortByDesc('booklets_contractor');

                }

                ?>

                @foreach($booklets as $booklet)
                    <?php
                    $select_month = $booklet->booklet_select;
                    $select_input = $booklet->booklets_input;
                    $select_contractor = $booklet->booklets_contractor;

                    if($select_contractor == $_GET['constractor']) {
                    if($select_month == $get_month) {
                    if($select_input == "") {
                    ?>
                    <tr>

                        <td>{{ $booklet-> booklet_select }}</td>
                        <td>{{ $booklet-> booklet_name }}</td>
                        <td>{{ $booklet-> booklets_category }}</td>
                        <td>{{ $booklet-> booklet_detail }}</td>
                        <td>{{ $booklet-> booklet_number }}{{ $booklet-> booklet_unit }}</td>
                        <td>{{ $booklet-> booklet_price }}</td>
                        <td>{{ $booklet-> booklet_process_001 }}</td>


                        <td style="text-align: center;">
                            {{--                            <a href="/db/booklet/edit/{{ $property->id }}"--}}
                            {{--                               style="border: 0px;background-color: transparent;cursor: pointer;color: black;"><i--}}
                            {{--                                    class="fas fa-pen"></i></a>--}}
                            <a data-bs-toggle="collapse" href="#tag_{{ $booklet-> booklets_id }}" role="button"
                               aria-expanded="false" aria-controls="tag_{{ $booklet-> booklets_id }}">
                                <i class="fas fa-plus"></i>
                            </a>

                        </td>
                        <td style="text-align: center;">
                            <form method="POST" action="{{ route('bookletdelete', $booklet->id) }}"
                                  onSubmit="return checkDelete()">
                                @csrf

                                <button type="submit" onclick
                                        style="border: 0px;background-color: transparent;cursor: pointer;"><i
                                        class="far fa-trash-alt"></i></button>

                            </form>

                        </td>
                    </tr>



                    <tr>
                        <td colspan="16" style="padding: 0;">
                            <div class="collapse" id="tag_{{ $booklet-> booklets_id }}">
                                <div class="card card-body">


                                    <form method="POST" action="{{ route('bookletstorecon') }}"
                                          onSubmit="return checkSubmit()">


                                        <table class="table">

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
                                                            id="booklet_detail"
                                                            name="booklet_detail"
                                                            class="form-control"
                                                            value="{{ old('booklet_detail') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('booklet_detail'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('booklet_detail') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input
                                                            id="booklet_number"
                                                            name="booklet_number"
                                                            class="form-control"
                                                            value="{{ old('booklet_number') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('booklet_number'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('booklet_number') }}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <select name="booklet_unit" class="form-control">

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
                                                            id="booklet_price"
                                                            name="booklet_price"
                                                            class="form-control"
                                                            value="{{ old('booklet_price') }}"
                                                            type="text"
                                                        >
                                                        @if ($errors->has('booklet_price'))
                                                            <div class="text-danger">
                                                                {{ $errors->first('booklet_price') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">


                                                        <textarea name="booklet_etc" id="booklet_etc" cols="30"
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
                                        <input type="hidden" name="id"
                                               value="{{ $booklet->id }}">
                                        <input type="hidden" name="booklet_select"
                                               value="{{ $booklet->booklet_select }}">
                                        <input type="hidden" name="booklet_name" value="{{ $booklet->booklet_name }}">
                                        <input type="hidden" name="booklets_contractor"
                                               value="{{ $booklet->booklets_contractor }}">
                                        <input type="hidden" name="booklets_category"
                                               value="{{ $booklet->booklets_category }}">
                                        <input type="hidden" name="booklet_process_001"
                                               value="{{ $booklet->booklet_process_001 }}">

                                        <input type="hidden" name="booklets_id" value=" {{ md5(date('Y-m-d H:i:s')) }}">
                                        <input type="hidden" name="booklets_input" value="{{ $booklet->booklets_id }}">

                                        <input type="hidden" name="booklet_process_002" value="">
                                        <input type="hidden" name="booklet_process_003" value="">


                                    </form>

                                </div>
                        </td>
                    </tr>

                    <?php $select_id = $booklet->booklets_id; ?>

                    @foreach($booklets as $booklet)

                        <?php $select_input = $booklet->booklets_input; ?>

                        <?php  if( $select_id == $select_input) { ?>



                        <tr>
                            <td colspan="2"></td>
                            <td>{{ $booklet-> booklets_category }}</td>
                            <td>{{ $booklet-> booklet_detail }}</td>
                            <td>{{ $booklet-> booklet_number }}{{ $booklet-> booklet_unit }}</td>
                            <td>{{ $booklet-> booklet_price }}</td>
                            <td>{{ $booklet-> booklet_process_001 }}</td>


                            <td style="text-align: center;"><a href="/db/booklet/editdetail/{{ $booklet->id }}"
                                                               style="border: 0px;background-color: transparent;cursor: pointer;color: black;"><i
                                        class="fas fa-pen"></i></a></td>

                            <td style="text-align: center;">
                                <form method="POST" action="{{ route('bookletdelete', $booklet->id) }}"
                                      onSubmit="return checkDelete()">
                                    @csrf

                                    <button type="submit" onclick
                                            style="border: 0px;background-color: transparent;cursor: pointer;"><i
                                            class="far fa-trash-alt"></i></button>

                                </form>

                            </td>
                        </tr>

                        <?php } ?>





                    @endforeach


                    <tr>
                        <td colspan="10" style="background-color: #eee"></td>
                    </tr>






                <?php }}}

 ?>




                @endforeach


            </table>
        </div>

    </div>


@endsection

