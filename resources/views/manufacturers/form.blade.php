@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8 offset-2 mb-5">
            <h2>業者登録1</h2>
            <form method="POST" action="{{ route('manufacturers_store') }}" onSubmit="return checkSubmit()">
                @csrf

                    <input
                        id="manufacturers_id"
                        name="manufacturers_id"
                        class="form-control"
                        value="{{ md5(date('y/m/d H:i:s'))}}"
                        type="hidden"
                    >


                <div class="form-group">
                    <label for="booklets_manufacturers">
                        業者名
                    </label>
                    <input
                        id="manufacturers_name"
                        name="manufacturers_name"
                        class="form-control"
                        value="{{ old('manufacturers_name') }}"
                        type="text"
                    >
                    @if ($errors->has('manufacturers_name'))
                        <div class="text-danger">
                            {{ $errors->first('manufacturers_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="manufacturers_post">
                        業者郵便番号
                    </label>
                    <input
                        id="manufacturers_post"
                        name="manufacturers_post"
                        class="form-control"
                        value="{{ old('manufacturers_post') }}"
                        type="text"
                    >
                    @if ($errors->has('manufacturers_post'))
                        <div class="text-danger">
                            {{ $errors->first('manufacturers_post') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="manufacturers_address">
                        業者住所
                    </label>
                    <input
                        id="manufacturers_address"
                        name="manufacturers_address"
                        class="form-control"
                        value="{{ old('manufacturers_address') }}"
                        type="text"
                    >
                    @if ($errors->has('manufacturers_address'))
                        <div class="text-danger">
                            {{ $errors->first('manufacturers_address') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="manufacturers_tel">
                        業者電話番号
                    </label>
                    <input
                        id="manufacturers_tel"
                        name="manufacturers_tel"
                        class="form-control"
                        value="{{ old('manufacturers_tel') }}"
                        type="text"
                    >
                    @if ($errors->has('manufacturers_tel'))
                        <div class="text-danger">
                            {{ $errors->first('manufacturers_tel') }}
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
