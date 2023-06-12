@extends('layouts.app')

@section('content')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">

            Construction.edit

            {{ $property_list->Property_bukkenName }}

        </div>

        <meta http-equiv="refresh" content="10">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12 p-3 bg-light">
                    見積書
                </div>
                <div class="col-12 p-3 bg-light">
                    <a href="{{asset('quotation_edit')}}/{{$property_list -> id}}?tabs=2&&cals=23">見積書を作成する</a>
                </div>
                <div class="col-12 p-3 bg-light">
                    Quotation

                </div>
            </div>


            <div class="row">

                <div class="col-12 bg-light">
                    工事内容
                </div>
                <div class="col-12 bg-light">

                    <table class="table table-striped table-hover">
                        @foreach($constructions as $construction)
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
                                    <form method="POST"
                                          action="{{ route('constructiondelete', $construction->id) }}"
                                          onSubmit="return checkDelete()">
                                        @csrf

                                        <button type="submit" onclick
                                                style="border: 0px;background-color: transparent;cursor: pointer;">
                                            <i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <td style="text-align: center;width: 30px">

                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
