@php
    $page_upload = $_GET["page_upload"] ?? "0";
@endphp

<style>
    .tab_button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        background-color: #fff;
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
        text-decoration: none;
    }


</style>

<div class="accordion-item">
    <h2 class="accordion-header" id="heading_{{$property_lists -> id}}">

        <a class="tab_button bg-white "
           href="{{asset('dp_assessment_detail')}}/{{$property_lists -> id}}?tabs=1&&cals=12&&list_detail={{$property_lists -> id}}&&tab_detail=2#collapse_{{$property_lists -> id}}">

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
        </a>
    </h2>

</div>





