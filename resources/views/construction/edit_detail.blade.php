@extends('layout')
@section('title', 'ブログ投稿')
@section('content')

    <div class="row">

        <div class="col-10 offset-1 mb-5" style="background-color: #eeeeee;">
            <form method="POST" action="{{ route('bookletupdate') }}" onSubmit="return checkSubmit()">

                <table class="table">
                    <thead>
                    <tr>
                        <th>項目</th>
                        <th>数</th>
                        <th>単位</th>
                        <th>金額</th>
                        <th>備考</th>
                        <th>更新する</th>

                    </tr>
                    </thead>


                    <tr>
                        <td>
                            <div class="form-group">
                                <div class="form-group">
                                    <input
                                        id="booklet_detail"
                                        name="booklet_detail"
                                        class="form-control"
                                        value="{{ $booklet->booklet_detail }}"
                                        type="text"
                                    >
                                    @if ($errors->has('booklet_detail'))
                                        <div class="text-danger">
                                            {{ $errors->first('booklet_detail') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">

                                <div class="form-group">
                                    <input
                                        id="booklet_number"
                                        name="booklet_number"
                                        class="form-control"
                                        value="{{ $booklet->booklet_number }}"
                                        type="text"
                                    >
                                    @if ($errors->has('booklet_number'))
                                        <div class="text-danger">
                                            {{ $errors->first('booklet_number') }}
                                        </div>
                                    @endif

                                </div>

                            </div>
                        </td>
                        <td>
                            {{ $booklet->booklet_unit }}
                        </td>
                        <td>
                            <div class="form-group">
                                <input
                                    id="booklet_price"
                                    name="booklet_price"
                                    class="form-control"
                                    value="{{ $booklet->booklet_price }}"
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
                                          rows="3">{{ $booklet->booklet_etc }}</textarea>

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
                <input type="hidden" name="booklets_category" value="{{ $booklet->booklets_category }}">
                <input type="hidden" name="id" value="{{ $booklet->id }}">
                <input type="hidden" name="booklet_select" value="{{ $booklet->booklet_select }}">
                <input type="hidden" name="booklet_name" value="{{ $booklet->booklet_name }}">
                <input type="hidden" name="booklets_contractor" value="{{ $booklet->booklets_contractor }}">
                <input type="hidden" name="booklet_unit" value="{{ $booklet->booklet_unit }}">
                <input type="hidden" name="booklets_input" value="{{ $booklet->booklets_input }}">
                <input type="hidden" name="booklets_id" value="{{ $booklet->booklets_id }}">
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
