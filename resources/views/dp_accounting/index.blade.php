@extends('layouts.app')

@section('content')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">

            Accounting.index

            <ul>
                <li><a href="{{'dp_accounting'}}">INDEX</a></li>
                <li><a href="{{'dp_accounting_list'}}">LIST</a></li>
                <li><a href="{{'dp_accounting_input'}}">INPUT</a></li>
                <li><a href="{{'dp_accounting_edit'}}">UPDATE</a></li>
                <li><a href="{{'dp_accounting_destroy'}}">DELETE</a></li>
            </ul>


        </div>
    </main>
@endsection
