@extends('layouts.app')

@section('content')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">

            Assessment.index

            <ul>
                <li><a href="{{'dp_assessment'}}">INDEX</a></li>
                <li><a href="{{'dp_assessment_list'}}">LIST</a></li>
                <li><a href="{{'dp_assessment_input'}}">INPUT</a></li>
                <li><a href="{{'dp_assessment_edit'}}">UPDATE</a></li>
                <li><a href="{{'dp_assessment_destroy'}}">DELETE</a></li>
            </ul>


        </div>
    </main>
@endsection
