<div class="container">
    <div class="row bg-gray-300">

        <div class="col-9 text-start p-3">

            <style>
                ul {
                    margin-top: 20px;
                    list-style-type: none;
                    display: flex;
                    flex-wrap: nowrap;
                }

                li {

                    text-align: center;
                    padding: 5px;
                }
            </style>


            <ul>
                <li>
                    <form class="mb-2" method="GET" action="property">
                        <input type="hidden" name="search" value="すべて">
                        <button class="btn btn-outline-info btn-sm bg-white">

                            すべて

                        </button>

                    </form>
                </li>


                <li>
                    <form class="mb-2" method="GET" action="property">

                        <input type="hidden" name="search" value="工事中">
                        <button class="btn btn-sm btn-outline-danger bg-white">
                            工事中
                        </button>
                    </form>
                </li>
                <li>
                    <form class="mb-2" method="GET" action="property">
                        <input type="hidden" name="search" value="販売中">
                        <button class="btn btn-outline-primary btn-sm bg-white">

                            販売中

                        </button>

                    </form>
                </li>
                <li>
                    <form class="mb-2" method="GET" action="property">
                        <input type="hidden" name="search" value="商談中">
                        <button class="btn btn-outline-success btn-sm bg-white">

                            商談中

                        </button>

                    </form>
                </li>
                <li>
                    <form class="mb-2" method="GET" action="property">
                        <input type="hidden" name="search" value="成約済">
                        <button class="btn btn-outline-dark btn-sm bg-white">

                            成約済

                        </button>

                    </form>
                </li>
                <li style="padding-left: 20px">
                    <form class="mb-2" method="GET" action="property">
                        <div class="input-group input-group-sm mb-3">

                            <input type="text" name="roomnumber" value="{{$roomnumber}}" class="form-control">
<div class="px-3">
                        <button
                            class="btn btn-sm btn-success"
                            type="submit" name=""
                            value="1">検索する
                        </button>
    </div>

                        </div>
                    </form>
                </li>

            </ul>


        </div>


        <div class="col-3 text-end p-3">
            {{--            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"--}}
            {{--               aria-expanded="false" aria-controls="collapseExample">--}}
            {{--                SEARCH--}}
            {{--            </a>--}}
            <a class="btn btn-danger btn-sm" href="{{'property/add'}}" style="margin-top: 20px;">
                物件追加
            </a>
        </div>
    </div>
</div>
