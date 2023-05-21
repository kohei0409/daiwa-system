@extends('layouts.app')

@section('content')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">

            Sales.index

            <ul>
                <li><a href="{{'dp_sales'}}">INDEX</a></li>
                <li><a href="{{'dp_sales_list'}}">LIST</a></li>
                <li><a href="{{'dp_sales_input'}}">INPUT</a></li>
                <li><a href="{{'dp_sales_edit'}}">UPDATE</a></li>
                <li><a href="{{'dp_sales_destroy'}}">DELETE</a></li>
            </ul>

        </div>
    </main>
@endsection
