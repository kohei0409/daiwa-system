@php
    $page_upload = $_GET["page_upload"] ?? "0";
@endphp

<div class="accordion-item">
    <h2 class="accordion-header" id="heading_{{$property_lists_2 -> id}}">
        <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse_{{$property_lists_2 -> id}}" aria-expanded="false"
                aria-controls="collapse_ {{$property_lists_2 -> id}}">
            <table class="table mt-2" style="font-size: 1em;font-weight: 500;">
                <tr class="bg-white">
                    <td class="p-0" width="50px;">
                        {{$property_lists_2 -> id}}
                    </td>
                    <td class="p-0" width="100px;">
                        {{$property_lists_2 -> Property_status}}
                    </td>
                    <td class="p-0" width="200px;">
                        {{$property_lists_2 -> Property_bukkenid}}
                    </td>

                    <td class="p-0" width="200px;">
                        {{$property_lists_2 -> Property_bukkenName}}
                    </td>

                    <td class="p-0" width="600px;">
                        {{$property_lists_2 -> Property_houseaddress}}
                    </td>
                    <td class="d-none">{{$property_lists_2 -> Property_status}}</td>
                    {{--                    <td class="p-3">{{$property_lists_2 -> Property_id}}</td>--}}


                </tr>
            </table>
        </button>
    </h2>
    <div id="collapse_{{$property_lists_2 -> id}}" class="accordion-collapse collapse p-3
<?php if($property_lists_2 -> id == $page_upload){echo 'show';} ?>

    "
         aria-labelledby="heading_{{$property_lists_2 -> id}}" data-bs-parent="#accordionExample">
        <div class="accordion-body">



        </div>
    </div>
</div>





