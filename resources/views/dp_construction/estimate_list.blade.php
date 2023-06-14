@php
    $page_upload = $_GET["page_upload"] ?? "0";
@endphp


<tr class="clickable-row"
    data-href="{{asset('dp_construction_estimate_detail')}}/{{$property_lists->id}}?tabs=2&&cals=23">
    <td width="50px;">
        {{$property_lists->id}}
    </td>
    <td width="100px;">
        {{$property_lists->Property_status}}
    </td>
    <td width="300px;">
        {{$property_lists->Property_bukkenid}}
    </td>
    <td width="300px;">
        {{$property_lists->Property_bukkenName}}
    </td>
    <td width="600px;">
        {{$property_lists->Property_houseaddress}}
    </td>
    <td class="d-none">{{$property_lists->Property_status}}</td>
</tr>










