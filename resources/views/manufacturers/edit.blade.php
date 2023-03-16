@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8 offset-2 mb-5">
            <h2>業者更新</h2>
            <form method="POST" action="{{ route('contractorsupdate') }}" onSubmit="return checkSubmit()">
                @csrf

                <input type="hidden" name="id" value="{{$contractor->id}}">
                <input
                    id="contractor_id"
                    name="contractor_id"
                    class="form-control"
                    value="{{ $contractor->contractor_id }}"

                    type="hidden"
                >


                <div class="form-group">
                    <label for="booklets_contractor">
                        業者名
                    </label>
                    <input
                        id="contractor_name"
                        name="contractor_name"
                        class="form-control"
                        value="{{ $contractor->contractor_name }}"
                        type="text"
                    >
                    @if ($errors->has('contractor_name'))
                        <div class="text-danger">
                            {{ $errors->first('contractor_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contractor_post">
                        業者郵便番号
                    </label>
                    <input
                        id="contractor_post"
                        name="contractor_post"
                        class="form-control"
                        value="{{ $contractor->contractor_post }}"
                        type="text"
                    >
                    @if ($errors->has('contractor_post'))
                        <div class="text-danger">
                            {{ $errors->first('contractor_post') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contractor_address">
                        業者住所
                    </label>
                    <input
                        id="contractor_address"
                        name="contractor_address"
                        class="form-control"
                        value="{{ $contractor->contractor_address }}"
                        type="text"
                    >
                    @if ($errors->has('contractor_address'))
                        <div class="text-danger">
                            {{ $errors->first('contractor_address') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contractor_tel">
                        業者電話番号
                    </label>
                    <input
                        id="contractor_tel"
                        name="contractor_tel"
                        class="form-control"
                        value="{{ $contractor->contractor_tel }}"
                        type="text"
                    >
                    @if ($errors->has('contractor_tel'))
                        <div class="text-danger">
                            {{ $errors->first('contractor_tel') }}
                        </div>
                    @endif
                </div>


                <div class="mt-5">

                    <button type="submit" class="btn btn-primary">
                        投稿する
                    </button>
                </div>


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
