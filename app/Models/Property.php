<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

       protected $table = 'properties';

    protected $fillable =
        [
            'Property_id',
            'Property_status_ddone',
            'Property_status',
            'Property_bukkenName',
            'Property_adtcheck',
            'Property_bukkenid',
            'Property_newold',
            'Property_madori',
            'Property_price',
            'Property_space',
            'Property_subspace1',
            'Property_subspace2',
            'Property_buildingfloorareasize',
            'Property_subbuildingfloorareasize',
            'Property_buildingfloorareasize2',
            'Property_buildingareasize',
            'Property_subbuildingareasize',
            'Property_kenpeiritsu',
            'Property_yousekiristu',
            'Property_houseaddress',
            'Property_houseaddresssub',
            'Property_houseaddressshort',
            'Property_housestructure',
            'Property_housetop',
            'Property_trainlinename',
            'Property_traindata1',
            'Property_traindata3tohoorcar',
            'Property_traindata2',
            'Property_stationdistance',
            'Property_tatemonotext',
            'Property_toshikeikaku',
            'Property_chisei',
            'Property_youto',
            'Property_hanbaikukaku',
            'Property_setsudou',
            'Property_chikudate',
            'Property_setsubi',
            'Property_chimoku',
            'Property_icondata',
            'Property_dataoption2',
            'Property_maintext1',
            'Property_maintext1forsheet',
            'Property_rightheadertext',
            'Property_rightfootertext',
            'Property_madoriimage1',
            'Property_mainimage',
            'Property_mainimagetext',
            'Property_subimage1',
            'Property_subimage2',
            'Property_subimage3',
            'Property_subimage4',
            'Property_subimage1text',
            'Property_subimage2text',
            'Property_subimage3text',
            'Property_subimage4text',
            'Property_thphotogallery',
            'Property_sortvalue',
            'Property_memo1',
            'Property_isGentei',
            'Property_isdisplaytaxtext',
            'Property_youtubeiframe',
            'Property_youtubetitle',
            'Property_shiire',
            'Property_cost_0001',
            'Property_cost_0002',
            'Property_cost_0003',
            'Property_cost_0004',
            'Property_cost_0005'


        ];

}
