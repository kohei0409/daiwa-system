@extends('layouts.app')

@section('content')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid">

            @php
                $url = basename($_SERVER['REQUEST_URI']);
                $parsedUrl = parse_url($url);
                $path = $parsedUrl['path'];
                echo $path;
            @endphp


        </div>
    </main>
@endsection
