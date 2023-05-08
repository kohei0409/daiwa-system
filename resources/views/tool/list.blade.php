@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 mb-5">
                <h2>ブログ投稿フォーム</h2>
                <form method="POST" action="{{ route('toolsstore') }}" onSubmit="return checkSubmit()">
                    @csrf


                    <div class="form-group">
                        <label for="tool_category">
                            現場名
                        </label>


                        <select name="tool_category" id=tool_category" class="form-control">
                            <option value="tani">
                                単位
                            </option>
                        </select>


                        @if ($errors->has('tool_category'))
                            <div class="text-danger">
                                {{ $errors->first('tool_category') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tool_name">
                            業者名
                        </label>
                        <input
                            id="tool_name"
                            name="tool_name"
                            class="form-control"
                            value="{{ old('tool_name') }}"
                            type="text"
                        >
                        @if ($errors->has('tool_name'))
                            <div class="text-danger">
                                {{ $errors->first('tool_name') }}
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


        <div class="row">
            <div class="col-12">

            </div>
            <div class="col-12">


                @foreach($tools as $tool)

                    {{ $tool->tool_category }}--
                    {{ $tool->tool_name }}<br>

                @endforeach

            </div>
        </div>
    </div>

@endsection


