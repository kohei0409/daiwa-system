<tr>
    <td class="">
        <a class="btn btn-sm btn-outline-danger" href="property/{{$property_lists -> id}}?tabs=<?php if($pop == ''){echo '1';}else{echo $pop;}?>&&tab=1">
            詳細
        </a>

    </td>

    <td class="">{{$property_lists -> id}}</td>
    <td class="">{{$property_lists -> Property_status}}</td>
    <td class="">{{$property_lists -> Property_bukkenid}}</td>
    <td class="">{{$property_lists -> Property_bukkenName}}</td>
    <td class="">{{$property_lists -> Property_houseaddress}}</td>

</tr>



