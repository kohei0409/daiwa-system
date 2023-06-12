@php
    $page_upload = $_GET["page_upload"] ?? "0";
@endphp

<div class="accordion-item">
    <h2 class="accordion-header" id="heading_{{$property_lists -> id}}">
        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse_{{$property_lists -> id}}" aria-expanded="false"
                aria-controls="collapse_ {{$property_lists -> id}}">
            <table class="table mt-2" style="font-size: 1em;font-weight: 500;">
                <tr class="bg-white">
                    <td class="p-0" width="50px;">
                        {{$property_lists -> id}}
                    </td>
                    <td class="p-0" width="100px;">
                        {{$property_lists -> Property_status}}
                    </td>
                    <td class="p-0" width="200px;">
                        {{$property_lists -> Property_bukkenid}}
                    </td>

                    <td class="p-0" width="200px;">
                        {{$property_lists -> Property_bukkenName}}
                    </td>

                    <td class="p-0" width="600px;">
                        {{$property_lists -> Property_houseaddress}}
                    </td>
                    <td class="d-none">{{$property_lists -> Property_status}}</td>
                    {{--                    <td class="p-3">{{$property_lists -> Property_id}}</td>--}}


                </tr>
            </table>
        </button>
    </h2>
    <div id="collapse_{{$property_lists -> id}}" class="accordion-collapse collapse p-3
<?php if($property_lists -> id == $page_upload){echo 'show';} ?>

    "
         aria-labelledby="heading_{{$property_lists -> id}}" data-bs-parent="#accordionExample">
        <div class="accordion-body">

            <ul class="nav nav-tabs mb-3" id="myTab_{{$property_lists -> id}}" role="tablist">

                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="pills-detail-tab_{{$property_lists -> id}}"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-detail_{{$property_lists -> id}}"
                        type="button"
                        role="tab"
                        aria-controls="pills-detail_{{$property_lists -> id}}"
                        aria-selected="true"
                    >
                        物件詳細
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="pills-satei-tab_{{$property_lists -> id}}"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-satei_{{$property_lists -> id}}"
                        type="button"
                        role="tab"
                        aria-controls="pills-satei_{{$property_lists -> id}}"
                        aria-selected="false"
                    >
                        査定書
                    </button>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent_{{$property_lists -> id}}" style="min-height: 800px;">
                <div
                    class="tab-pane fade"
                    id="pills-detail_{{$property_lists -> id}}"
                    role="tabpanel"
                    aria-labelledby="pills-detail-tab_{{$property_lists -> id}}"
                >

                    <h2>{{ $property_lists->Property_bukkenid }}( {{ $property_lists->Property_bukkenName }})</h2>



                    @include('dp_assessment.form')


                </div>
                <div
                    class="tab-pane fade show active"
                    id="pills-satei_{{$property_lists -> id}}"
                    role="tabpanel"
                    aria-labelledby="pills-satei-tab_{{$property_lists -> id}}"
                >

                    <div>
                        査定リスト

                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>ファイル名</td>
                                <td></td>
                            </tr>

                            @foreach ($files as $folderName => $folderFiles)
                                @foreach ($folderFiles as $file)
                                    @if ($property_lists->Property_id === $folderName)

                                        @php
                                            $fileName = str_replace('public/uploads/' . $folderName . '/', '', $file);
                                            $delete_check =  mb_substr( $fileName , 0 , mb_strpos($fileName, "_") );
                                        @endphp

                                        @if($delete_check !== 'delete')

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>

                                                    <a href="{{ asset('storage/uploads/'.$folderName.'/'.$fileName) }}"
                                                       target="_blank">{{ $fileName }}</a>
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route('file_rename', ['folderName' => $folderName, 'fileName' => $fileName]) }}"
                                                        method="POST" onSubmit="return checkSubmit()">
                                                        @csrf
                                                        <div class="input-group">
                                                            <input type="hidden" name="newFileName" class="form-control"
                                                                   value="delete_<?php echo $fileName;?>">
                                                            <input type="hidden" name="page_upload" class="form-control"
                                                                   value="{{$property_lists->id}}">
                                                            <button type="submit" class="btn btn-primary">削除</button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>

                                        @endif
                                    @endif
                                @endforeach
                            @endforeach

                        </table>

                    </div>

                    <div>
                        <form action="{{ route('dp_assessment_upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="file" class="form-label">ファイル選択</label>
                                <input type="file" class="form-control" id="file" name="file" required>
                            </div>

                            <div class="mb-3">
                                <label for="filename" class="form-label">ファイル名</label>
                                <input type="text" class="form-control" id="filename" name="filename" required>
                            </div>

                            <input type="hidden" name="folder_name" value="{{ $property_lists->Property_id }}">

                            <input type="hidden" name="page_upload" value="{{ $property_lists->id }}">

                            <button type="submit" class="btn btn-primary">アップロード</button>
                        </form>

                    </div>


                </div>

            </div>


        </div>
    </div>
</div>





