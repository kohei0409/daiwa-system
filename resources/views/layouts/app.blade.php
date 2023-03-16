@include('layouts.header')

    @include('layouts.sidebar')

{{--@include('layouts.topmenu')--}}




      <div class="be-content p-3" style="margin-top: 20px;">

          @yield('content')

      </div>


@include('layouts.footer')
