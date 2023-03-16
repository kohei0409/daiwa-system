@extends('layouts.app')

@section('content')



    <div class="row">
        <div class="col-10 offset-1 mb-5">
            <h2>業者一覧</h2>
            <table class="table table-striped">
                <tr>
                    <th class="table-light px-3">業種</th>
                    <th class="px-3">業者名</th>
                    <th class="table-light px-3"></th>
                    <th class="table-light px-3"></th>
                    <th class="table-light px-3"></th>
                    <th></th>
                </tr>
                @foreach($manufacturers as $manufacturers)
                    <tr>

                        <td valign="middle" class="table-light px-3">
                            {{ $manufacturers->manufacturers_type }}</td>
                        <td valign="middle" class="px-3">
                            {{ $manufacturers->manufacturers_name }}</td>
                        <td valign="middle" class="table-light">
                            <div class="p-2 d-grid gap-2">
                                <a type="button"
                                   href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n'); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                   class="btn btn-outline-success btn-sm"><?php echo date('Y / n'); ?></a>
                            </div>
                        </td>

                        <td valign="middle" class="table-light">
                            <div class="p-2 d-grid gap-2">
                                <a type="button"
                                   href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-1 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                   class="btn btn-outline-success btn-sm"><?php echo date('Y / n', strtotime('-1 month')); ?></a>
                            </div>
                        </td>

                        <td valign="middle" class="table-light">
                            <div class="p-2 d-grid gap-2">
                                <a type="button"
                                   href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-2 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                   class="btn btn-outline-success btn-sm"><?php echo date('Y / n', strtotime('-2 month')); ?></a>
                            </div>
                        </td>

                        <td align="center" valign="middle">
                            <a class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                               href="#collapseExample{{ $manufacturers-> id }}" role="button"
                               aria-expanded="false" aria-controls="collapseExample{{ $manufacturers-> id }}">
                                詳細をみる
                            </a>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="12" style="padding: 0;">
                            <div class="collapse" id="collapseExample{{ $manufacturers-> id }}">

                                <div class="row p-3">
                                    <div class="col-4 p-3">
                                        <div class="p-2">{{ $manufacturers->manufacturers_post }}1</div>
                                        <div class="p-2">{{ $manufacturers->manufacturers_address }}2</div>
                                        <div class="p-2">{{ $manufacturers->manufacturers_telsub }}3</div>
                                        <div class="p-2">{{ $manufacturers->manufacturers_manager }}
                                            ({{ $manufacturers->manufacturers_tel }}
                                            )
                                        </div>
                                        <div class="p-2">{{ $manufacturers->manufacturers_mail }}4</div>
                                        <div class="p-2">{{ $manufacturers->manufacturers_remarks }}5</div>
                                        <div><a class="btn btn-primary btn-sm"
                                                href="/database/list/manufacturers/edit/{{ $manufacturers->id }}">情報更新</a></div>
                                    </div>
                                    <div class="col-4 p-3">
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n'); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n'); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-1 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-1 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-2 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-2 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-3 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-3 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-4 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-4 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-5 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-5 month')); ?></a>
                                        </div>

                                    </div>
                                    <div class="col-4 p-3">
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-6 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-6 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-7 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-7 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-8 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-8 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-9 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-9 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-10 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-10 month')); ?></a>
                                        </div>
                                        <div class="p-2 d-grid gap-2">
                                            <a type="button"
                                               href="/database/list/manufacturers/{{ $manufacturers-> id }}/?get_month=<?php echo date('Y/n', strtotime('-11 month')); ?>&&select_position=&&constractor={{ $manufacturers->id }}"
                                               class="btn btn-outline-info btn-sm"><?php echo date('Y / n', strtotime('-11 month')); ?></a>
                                        </div>

                                    </div>


                                </div>


                            </div>
                        </td>


                    </tr>

                @endforeach

            </table>
            <div class="my-3">
                <a href="https://daiwa-housing.jp/database/list/manufacturers/create">入力する</a><br>
            </div>
        </div>
    </div>

    <script>
        function checkDelete() {
            if (window.confirm('削除してよろしいですか？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>


@endsection

