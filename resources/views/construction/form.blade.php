@extends('layout')
@section('title', 'ブログ投稿')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 mb-5">
            <h2>ブログ投稿フォーム</h2>
            <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
                @csrf
                <div class="form-group">
                    <label for="booklet_name">
                        現場名
                    </label>
                    <input
                        id="booklet_name"
                        name="booklet_name"
                        class="form-control"
                        value="{{ old('booklet_name') }}"
                        type="text"
                    >
                    @if ($errors->has('booklet_name'))
                        <div class="text-danger">
                            {{ $errors->first('booklet_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="booklets_contractor">
                        業者名
                    </label>
                    <input
                        id="booklets_contractor"
                        name="booklets_contractor"
                        class="form-control"
                        value="{{ old('booklets_contractor') }}"
                        type="text"
                    >
                    @if ($errors->has('booklets_contractor'))
                        <div class="text-danger">
                            {{ $errors->first('booklets_contractor') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="booklet_detail">
                        工事名
                    </label>
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

                <div class="form-group">
                    <label for="booklet_number">
                        数
                    </label>
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

                <div class="form-group">
                    <label for="booklet_unit">
                        単位
                    </label>
                    <input
                        id="booklet_unit"
                        name="booklet_unit"
                        class="form-control"
                        value="{{ old('booklet_unit') }}"
                        type="text"
                    >
                    @if ($errors->has('booklet_unit'))
                        <div class="text-danger">
                            {{ $errors->first('booklet_unit') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="booklet_price">
                        金額
                    </label>
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


                <div class="mt-5">

                    <button type="submit" class="btn btn-primary">
                        投稿する
                    </button>
                </div>

                <input type="hidden" name="booklets_input" value="booklets_input">
                <input type="hidden" name="booklet_select" value="booklet_select">
                <input type="hidden" name="booklets_id" value="booklets_id">
                <input type="hidden" name="booklet_etc" value="booklet_etc">
                <input type="hidden" name="booklet_process_001" value="0">
                <input type="hidden" name="booklet_process_002" value="booklet_process_002">
                <input type="hidden" name="booklet_process_003" value="booklet_process_003">


            </form>
        </div>
    </div>







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
