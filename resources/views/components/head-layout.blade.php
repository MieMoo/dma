<nav class="navbar">
    <!-- Home -->
    <a 
        style="color: {{ Request::routeIs('head-registrar.dashboard') ? '#ffc107' : '#7D7878' }}" 
        href="{{ route('head-registrar.dashboard') }}">
        Home
    </a>
