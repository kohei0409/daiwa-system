@extends('layouts.app')

@section('content')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">

            Construction.index

            <ul>
                <li><a href="{{'dp_construction'}}">INDEX</a></li>
                <li><a href="{{'dp_construction_list'}}">LIST</a></li>
                <li><a href="{{'dp_construction_input'}}">INPUT</a></li>
                <li><a href="{{'dp_construction_edit'}}">UPDATE</a></li>
                <li><a href="{{'dp_construction_destroy'}}">DELETE</a></li>
            </ul>

        </div>
    </main>
@endsection
