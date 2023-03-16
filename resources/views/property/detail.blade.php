@extends('layouts.app')


@section('content')

    <div class="container-fluid">
        <div class="row ">

            <div class="col-10 offset-1 mb-5">
                <h2>
                    {{ $property->Property_bukkenid }}
                </h2>
                <div>
                    {{ $property->Property_houseaddress }}
                </div>

                <a class="btn btn-primary mt-3" data-bs-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    物件詳細を見る
                </a>

                <a class="btn btn-primary mt-3" href="edit/{{ $property-> id }}">更新</a>

                <div class="collapse" id="collapseExample">
                    <div class="mt-5">


                        <table class="table table-bordered">

                            <tr>
                                <td>物件メモ</td>
                                <td>{{ $property->   Property_status_ddone}}</td>
                            </tr>
                            <tr>
                                <td>アドトラストチェック</td>
                                <td>{{ $property->   Property_adtcheck}}</td>
                            </tr>

                            <tr>
                                <td>ステータス</td>
                                <td>{{ $property->   Property_status}}</td>
                            </tr>

                            <tr>
                                <td>物件名</td>
                                <td>{{ $property->   Property_bukkenName}}</td>
                            </tr>
                            <tr>
                                <td>物件NO</td>
                                <td>{{ $property->   Property_bukkenid}}</td>
                            </tr>

                            <tr>
                                <td>新築/中古</td>
                                <td>{{ $property->   Property_newold}}</td>
                            </tr>

                            <tr>
                                <td>間取り</td>
                                <td>{{ $property->   Property_madori}}</td>
                            </tr>

                            <tr>
                                <td>値段</td>
                                <td>{{ $property->   Property_price}}</td>
                            </tr>

                            <tr>
                                <td>延床面積（㎡）</td>
                                <td>{{ $property->   Property_space}}</td>
                            </tr>

                            <tr>
                                <td>延床面接（坪）</td>
                                <td>{{ $property->   Property_subspace1}}</td>
                            </tr>

                            <tr>
                                <td>接道状況</td>
                                <td>{{ $property->   Property_subspace2}}</td>
                            </tr>

                            <tr>
                                <td>土地面積（㎡）</td>
                                <td>{{ $property->   Property_buildingfloorareasize}}</td>
                            </tr>

                            <tr>
                                <td>土地面積（坪）</td>
                                <td>{{ $property->   Property_subbuildingfloorareasize}}</td>
                            </tr>

                            <tr>
                                <td>土地面積（私道情報）</td>
                                <td>{{ $property->   Property_buildingfloorareasize2}}</td>
                            </tr>

                            <tr>
                                <td>建築面積（㎡）</td>
                                <td>{{ $property->   Property_buildingareasize}}</td>
                            </tr>

                            <tr>
                                <td>建築面積（坪）</td>
                                <td>{{ $property->   Property_subbuildingareasize}}</td>
                            </tr>

                            <tr>
                                <td>建ぺい率</td>
                                <td>{{ $property->   Property_kenpeiritsu}}</td>
                            </tr>

                            <tr>
                                <td>容積率</td>
                                <td>{{ $property->   Property_yousekiristu}}</td>
                            </tr>

                            <tr>
                                <td>住所</td>
                                <td>{{ $property->   Property_houseaddress}}</td>
                            </tr>

                            <tr>
                                <td>共有部分</td>
                                <td>{{ $property->   Property_houseaddresssub}}</td>
                            </tr>

                            <tr>
                                <td>住所（短縮）</td>
                                <td>{{ $property->   Property_houseaddressshort}}</td>
                            </tr>

                            <tr>
                                <td>構造</td>
                                <td>{{ $property->   Property_housestructure}}</td>
                            </tr>

                            <tr>
                                <td>屋根</td>
                                <td>{{ $property->   Property_housetop}}</td>
                            </tr>

                            <tr>
                                <td>路線名</td>
                                <td>{{ $property->   Property_trainlinename}}</td>
                            </tr>

                            <tr>
                                <td>駅名</td>
                                <td>{{ $property->   Property_traindata1}}</td>
                            </tr>

                            <tr>
                                <td>駅からの距離（車）</td>
                                <td>{{ $property->   Property_traindata3tohoorcar}}</td>
                            </tr>

                            <tr>
                                <td>駅からの距離（徒歩）</td>
                                <td>{{ $property->   Property_traindata2}}</td>
                            </tr>

                            <tr>
                                <td>駅からの時間</td>
                                <td>{{ $property->   Property_stationdistance}}</td>
                            </tr>


                            <tr>
                                <td>都市計画</td>
                                <td>{{ $property->   Property_toshikeikaku}}</td>
                            </tr>

                            <tr>
                                <td>地勢</td>
                                <td>{{ $property->   Property_chisei}}</td>
                            </tr>

                            <tr>
                                <td>用途</td>
                                <td>{{ $property->   Property_youto}}</td>
                            </tr>

                            <tr>
                                <td>販売区画</td>
                                <td>{{ $property->   Property_hanbaikukaku}}</td>
                            </tr>

                            <tr>
                                <td>接道状況</td>
                                <td>{{ $property->   Property_setsudou}}</td>
                            </tr>

                            <tr>
                                <td>築年数</td>
                                <td>{{ $property->   Property_chikudate}}</td>
                            </tr>

                            <tr>
                                <td>設備</td>
                                <td>{{ $property->   Property_setsubi}}</td>
                            </tr>

                            <tr>
                                <td>地目</td>
                                <td>{{ $property->   Property_chimoku}}</td>
                            </tr>

                            <tr>
                                <td>アイコンデータ</td>
                                <td>{{ $property->   Property_icondata}}</td>
                            </tr>

                            <tr>
                                <td>周辺情報</td>
                                <td>{{ $property->   Property_dataoption2}}</td>
                            </tr>

                            <tr>
                                <td>メインテキスト</td>
                                <td>{{ $property->   Property_maintext1}}</td>
                            </tr>


                            <tr>
                                <td>公開/非公開</td>
                                <td>{{ $property->   Property_isGentei}}</td>
                            </tr>

                            <tr>
                                <td>税金</td>
                                <td>{{ $property->   Property_isdisplaytaxtext}}</td>
                            </tr>


                            <tr>
                                <td colspan="2"><a href="/db/list/property/edit/{{ $property-> id }}">更新</a></td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>





        </div>

    </div>

@endsection
