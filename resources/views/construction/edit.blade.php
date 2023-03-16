@extends('layout')
@section('title', 'ブログ投稿')
@section('content')

    <div class="row">

        <div class="col-10 offset-1 mb-5" style="background-color: #eeeeee;">
            <form method="POST" action="{{ route('bookletupdate') }}" onSubmit="return checkSubmit()">

                <table class="table">
                    <thead>
                    <tr>
                        {{--                    <th>ID</th>--}}
                        {{--                    <th>現場ID</th>--}}
                        <th>年月</th>
                        <th>現場名</th>
                        <th>業者名</th>
                        <th>工事名</th>

                        {{--                    <th class="sorter-false">備考</th>--}}
                        {{--                    <th class="sorter-false text-end"></th>--}}
                        {{--                    <th>処理１</th>--}}
                        {{--                    <th>処理２</th>--}}
                        {{--                    <th>処理３</th>--}}
                    </tr>
                    </thead>


                    <tr>
                        <td>
                            <div class="form-group">
                                {{ $booklet->booklet_select }}
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                {{ $booklet->booklet_name }}

                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                {{ $booklet->booklets_contractor }}


                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input
                                    id="booklets_category"
                                    name="booklets_category"
                                    class="form-control"
                                    value="{{ $booklet->booklets_category }}"
                                    type="text"
                                >
                                @if ($errors->has('booklets_category'))
                                    <div class="text-danger">
                                        {{ $errors->first('booklets_category') }}
                                    </div>
                                @endif


                            </div>


                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                更新する
                            </button>
                        </td>

                    </tr>


                </table>


                @csrf

                <input type="hidden" name="id" value="{{ $booklet->id }}">
                <input type="hidden" name="booklet_select" value="{{ $booklet->booklet_select }}">

                <input type="hidden" name="booklet_name" value="{{ $booklet->booklet_name }}">
                <input type="hidden" name="booklets_contractor" value="{{ $booklet->booklets_contractor }}">

                <input type="hidden" name="booklet_detail" value="{{ $booklet->booklet_detail }}">
                <input type="hidden" name="booklet_number" value="{{ $booklet->booklet_number }}">
                <input type="hidden" name="booklet_unit" value="{{ $booklet->booklet_unit }}">
                <input type="hidden" name="booklet_price" value="{{ $booklet->booklet_price }}">
                <input type="hidden" name="booklets_input" value="{{ $booklet->booklets_input }}">
                <input type="hidden" name="booklets_id" value="{{ $booklet->booklets_id }}">
                <input type="hidden" name="booklet_etc" value="{{ $booklet->booklet_etc }}">
                <input type="hidden" name="booklet_process_001" value="{{ $booklet->booklet_process_001 }}">
                <input type="hidden" name="booklet_process_002" value="{{ $booklet->booklet_process_002 }}">
                <input type="hidden" name="booklet_process_003" value="{{ $booklet->booklet_process_003 }}">


            </form>
        </div>
    </div>



    {{--    <script>--}}
    {{--        function checkSubmit() {--}}
    {{--            if (window.confirm('送信してよろしいですか？')) {--}}
    {{--                return true;--}}
    {{--            } else {--}}
    {{--                return false;--}}
    {{--            }--}}
    {{--        }--}}
    {{--    </script>--}}
@endsection
