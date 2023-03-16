@extends('layouts.app')


@section('content')

    <?php
    if (!empty($_GET["search"])) {
        $search = $_GET['search'];
    } else {
        $search = "";
    }

    if (!empty($_GET["sales"])) {
        $sales = $_GET['sales'];
    } else {
        $sales = "";
    }

    if (!empty($_GET["pet"])) {
        $pet = $_GET['pet'];
    } else {
        $pet = "";
    }

    if (!empty($_GET["madori"])) {
        $madori = $_GET['madori'];
    } else {
        $madori = "";
    }

    if (!empty($_GET["button_one_price"])) {
        $button_one_price = $_GET['button_one_price'];
    } else {
        $button_one_price = "";
    }

    if (!empty($_GET["button_one"])) {
        $button_one = $_GET['button_one'];
    } else {
        $button_one = "";
    }

    if (!empty($_GET["button_two_price"])) {
        $button_two_price = $_GET['button_two_price'];
    } else {
        $button_two_price = "";
    }

    if (!empty($_GET["button_two"])) {
        $button_two = $_GET['button_two'];
    } else {
        $button_two = "";
    }
    ?>


    <?php
    if (!empty($_GET["areasize"])) {
        $areasize = $_GET['areasize'];
    } else {
        $areasize = "";
    }
    ?>

    <?php
    if (!empty($_GET["roomnumber"])) {
        $roomnumber = $_GET['roomnumber'];
    } else {
        $roomnumber = "";
    }
    ?>

    <?php
    if (!empty($_GET["button_areasize"])) {
        $button_areasize = $_GET['button_areasize'];
    } else {
        $button_areasize = "";
    }
    ?>

    <?php
    if (!empty($_GET["show"])) {
        $show = $_GET['show'];
    } else {
        $show = "";
    }
    ?>


    <div class="container-fluid" style="z-index: 99">


        <div class="row mb-5">                <div class="dropdown">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        SEARCH
                    </a>

                </div>

            <div class="collapse mt-0 <?php echo $show; ?>" id="collapseExample">


                <div>
                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">

                        <div class="container">
                            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                            <div class="row p-5">


                                <div class="col-2">
                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">


                                        <button
                                            class="btn btn-sm <?php if($search == ''){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            すべて
                                        </button>
                                    </form>


                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat1">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat1'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            神奈川
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat2">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">


                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat2'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            町田
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat3">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat3'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            横浜南
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat4">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">


                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat4'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            横浜
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat5">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat5'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            みなとみらい
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat6">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat6'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            宝塚
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="sheetformat18001">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($search == 'sheetformat18001'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>">
                                            塚口
                                        </button>
                                    </form>


                                </div>
                                <div class="col-2">


                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="sales" value="">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($sales == ''){ echo 'btn-warning text-black text-black';} else {echo 'btn-outline-gray-700';} ?>">
                                            指定なし
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="sales" value="status1">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($sales == 'status1'){ echo 'btn-warning text-black';} else {echo 'btn-outline-gray-700';} ?>">
                                            販売準備中
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="sales" value="status2">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($sales == 'status2'){ echo 'btn-warning text-black';} else {echo 'btn-outline-gray-700';} ?>">
                                            販売中
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="sales" value="status3">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($sales == 'status3'){ echo 'btn-warning text-black';} else {echo 'btn-outline-gray-700';} ?>">
                                            商談中
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="sales" value="status4">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($sales == 'status4'){ echo 'btn-warning text-black';} else {echo 'btn-outline-gray-700';} ?>">
                                            成約済
                                        </button>
                                    </form>
                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="sales" value="status5">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($sales == 'status5'){ echo 'btn-warning text-black';} else {echo 'btn-outline-gray-700';} ?>">
                                            荷物搬出待ち
                                        </button>
                                    </form>
                                </div>


                                <div class="col-2">
                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="madori" value="">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($madori == ''){ echo 'btn-info';} else {echo 'btn-outline-gray-700';} ?>">
                                            すべて
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="madori" value="1R">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($madori == '1R'){ echo 'btn-info';} else {echo 'btn-outline-gray-700';} ?>">
                                            1R
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="madori" value="1LDK">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($madori == '1LDK'){ echo 'btn-info';} else {echo 'btn-outline-gray-700';} ?>">
                                            1LDK
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="madori" value="1SLDK">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($madori == '1SLDK'){ echo 'btn-info';} else {echo 'btn-outline-gray-700';} ?>">
                                            1SLDK
                                        </button>
                                    </form>


                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="madori" value="2LDK">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($madori == '2LDK'){ echo 'btn-info';} else {echo 'btn-outline-gray-700';} ?>">
                                            2LDK
                                        </button>
                                    </form>
                                </div>

                                <div class="col-2">

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="pet" value="">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($pet == ''){ echo 'btn-success';} else {echo 'btn-outline-gray-700';} ?>">
                                            すべて
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="pet" value="1">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">


                                        <button
                                            class="btn btn-sm <?php if($pet == '1'){ echo 'btn-success';} else {echo 'btn-outline-gray-700';} ?>">
                                            ペットOK
                                        </button>
                                    </form>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="hidden" name="pet" value="0">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if($pet == '2'){ echo 'btn-success';} else {echo 'btn-outline-gray-700';} ?>">
                                            ペットNG
                                        </button>
                                    </form>
                                </div>


                                <div class="col-4">

                                    <div>
                                        部屋番号検索
                                    </div>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="">
                                        <input type="hidden" name="pet" value="">
                                        <input type="hidden" name="madori" value="">
                                        <input type="hidden" name="button_two_price" value="">
                                        <input type="hidden" name="button_two" value="">
                                        <input type="hidden" name="areasize" value="">
                                        <input type="hidden" name="button_areasize" value="">
                                        <input type="text" name="roomnumber" value="{{$roomnumber}}">
                                        <button
                                            class="btn btn-sm btn-outline-gray-700"
                                            type="submit" name=""
                                            value="1">検索する
                                        </button>
                                        <a class="btn btn-sm btn-outline-gray-700"
                                           href="https://www.chienomori.jp/system/search?search=&sales=&madori=&e=&button_one=&button_two_price=&button_two=&areasize=&button_areasize=&pet=&show=show">クリア</a>
                                        <input type="hidden" name="show" value="show">

                                    </form>


                                    <div>
                                        一人入居時予算（総額）
                                    </div>
                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="text" name="button_one_price" value="{{ $button_one_price }}">
                                        <button
                                            class="btn btn-sm <?php if( $button_one_price != "" && $button_one == '1'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>"
                                            type="submit" name="button_one"
                                            value="1">以上
                                        </button>
                                        <button
                                            class="btn btn-sm <?php if( $button_one_price != "" && $button_one == '2'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>"
                                            type="submit" name="button_one"
                                            value="2">未満
                                        </button>
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                    </form>

                                    <div>
                                        二人入居時予算（総額）
                                    </div>


                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                        <input type="text" name="button_two_price" value="{{ $button_two_price }}">
                                        <button
                                            class="btn btn-sm <?php if( $button_two_price != "" && $button_two == '1'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>"
                                            type="submit" name="button_two"
                                            value="1">以上
                                        </button>
                                        <button
                                            class="btn btn-sm <?php if( $button_two_price != "" && $button_two == '2'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>"
                                            type="submit" name="button_two"
                                            value="2">未満
                                        </button>
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                    </form>


                                    <div>
                                        居室面積（㎡）
                                    </div>

                                    <form class="mb-2" method="GET" action="search">
                                        <input type="hidden" name="search" value="{{ $search }}">
                                        <input type="hidden" name="sales" value="{{ $sales }}">
                                        <input type="hidden" name="pet" value="{{ $pet }}">
                                        <input type="hidden" name="madori" value="{{ $madori }}">
                                        <input type="hidden" name="button_one_price" value="{{ $button_one_price }}">
                                        <input type="hidden" name="button_one" value="{{ $button_one }}">
                                        <input type="hidden" name="button_two_price" value="{{ $button_two_price }}">
                                        <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                        <input type="text" name="areasize" value="{{ $areasize }}">
                                        <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                        <input type="hidden" name="show" value="show">

                                        <button
                                            class="btn btn-sm <?php if( $areasize != "" && $button_areasize == '1'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>"
                                            type="submit"
                                            name="button_areasize"
                                            value="1">以上
                                        </button>
                                        <button
                                            class="btn btn-sm <?php if( $areasize != "" && $button_areasize == '2'){ echo 'btn-danger';} else {echo 'btn-outline-gray-700';} ?>"
                                            type="submit"
                                            name="button_areasize"
                                            value="2">未満
                                        </button>


                                    </form>
                                    <div class=" d-md-flex justify-content-md-end mb-5"
                                         style="margin-top: 50px;display:inline-flex;">
                                        <form class=" " method="GET" action="search">
                                            <input type="hidden" name="search" value="">
                                            <input type="hidden" name="sales" value="">
                                            <input type="hidden" name="madori" value="">
                                            <input type="hidden" name="e"
                                                   value="">
                                            <input type="hidden" name="button_one" value="">
                                            <input type="hidden" name="button_two_price"
                                                   value="">
                                            <input type="hidden" name="button_two" value="">
                                            <input type="hidden" name="areasize" value="">
                                            <input type="hidden" name="button_areasize" value="">
                                            <input type="hidden" name="pet" value="">
                                            <input type="hidden" name="roomnumber" value="">
                                            <input type="hidden" name="show" value="show">

                                            <button
                                                class="btn btn-primary btn-sm">
                                                条件クリア
                                            </button>
                                        </form>
                                        　

                                        <form class=" " method="GET" action="search">
                                            <input type="hidden" name="search" value="{{ $search }}">
                                            <input type="hidden" name="sales" value="{{ $sales }}">
                                            <input type="hidden" name="madori" value="{{ $madori }}">
                                            <input type="hidden" name="button_one_price"
                                                   value="{{ $button_one_price }}">
                                            <input type="hidden" name="button_one" value="{{ $button_one }}">
                                            <input type="hidden" name="button_two_price"
                                                   value="{{ $button_two_price }}">
                                            <input type="hidden" name="button_two" value="{{ $button_two_price }}">
                                            <input type="hidden" name="areasize" value="{{ $areasize }}">
                                            <input type="hidden" name="button_areasize" value="{{ $button_areasize }}">
                                            <input type="hidden" name="pet" value="{{ $pet }}">
                                            <input type="hidden" name="roomnumber" value="{{$roomnumber}}">
                                            <input type="hidden" name="show" value="">

                                            <button
                                                class="btn btn-danger btn-sm">
                                                閉じる
                                            </button>
                                        </form>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                </div>


            </div> <!-- / .row -->

            <div class="row">
                <div class="col">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100"
                         data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}'
                         id="users">
                        <div class="card-header border-0 card-header-space-between text-end">


                            <!-- Dropdown -->
                            <div class="dropdown ms-4">

                                <a class="btn btn-outline-danger" href="{{'property/add'}}">
                                    物件追加
                                </a>

                            </div>
                        </div>


                        <script>
                            $(function () {
                                $('.sort-table').tablesorter({
                                    textExtraction: function (node) {
                                        var attr = $(node).attr('data-value');
                                        if (typeof attr !== 'undefined' && attr !== false) {
                                            return attr;
                                        }
                                        return $(node).text();
                                    }
                                });
                            });
                        </script>


                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap mb-0 sort-table">
                                <thead>
                                <tr>
                                    <th class="w-60px" data-sorter="false">

                                    </th>

                                    <th class="w-60px">
                                        ID
                                    </th>

                                    <th>
                                        画像
                                    </th>
                                    <th class="w-150px min-w-150px">
                                        施設名
                                    </th>
                                    <th>
                                        販売状況
                                    </th>
                                    <th>
                                        部屋番号
                                    </th>
                                    <th>
                                        間取り
                                    </th>
                                    <th>
                                        居室面積（㎡）
                                    </th>
                                    <th>
                                        方角
                                    </th>
                                    <th>
                                        一人入居時金額
                                    </th>
                                    <th>
                                        二人入居時金額
                                    </th>
                                    <th>
                                        ペット
                                    </th>
                                    <th>
                                        リフォーム状況
                                    </th>
                                    <th>
                                        入居可能時期
                                    </th>
                                </tr>


                                </thead>

                                <tbody class="list">


{{--                                @foreach($institution as $institutions)--}}

{{--                                    @include('institution.result')--}}

{{--                                @endforeach--}}

                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                {{--                                <div class="me-5 text-secondary small">--}}
                                {{--                                    Showing: <span class="list-pagination-page-first"></span> - <span--}}
                                {{--                                        class="list-pagination-page-last"></span> of <span--}}
                                {{--                                        class="list-pagination-pages"></span>--}}
                                {{--                                </div>--}}

                                <!-- Pagination -->
                                <ul class="pagination list-pagination mb-0"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container-fluid -->

@endsection
