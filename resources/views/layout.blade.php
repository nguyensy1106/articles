

    {{-- Sử dụng đến Partial của navigation menu --}}
    @include('navbar')
    <div class="container"><!-- ② Thêm -->
        {{-- Hiển thị Flash message --}}
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif
        {{-- // Giản lược code
         --}}
        @yield('content')
    </div>