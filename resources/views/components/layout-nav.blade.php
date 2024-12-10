<nav class="navbar">
    <!-- Home -->
    <a 
        style="color: {{ Request::routeIs('registrar.dashboard') ? '#ffc107' : '#7D7878' }}" 
        href="{{ route('registrar.dashboard') }}">
        Home
    </a>

    <!-- Upload File -->
    <a 
        style="color: {{ Request::routeIs('registrar.validate') ? '#ffc107' : '#7D7878' }}" 
        href="{{ route('registrar.validate') }}">
        Validate
    </a>

    <!-- Track -->
    <div class="dropdown">
        <a 
            style="color: {{ Request::routeIs('registrar.track') || 
                Request::routeIs('registrar.pulled') 
                ? '#ffc107' : '#7D7878' }}" 
            class="dropbtn">
            Track
        </a>
        <div class="dropdown-content">
            <a 
            style="color: #000 {{ Request::routeIs('registrar.track') ? '#ffc107' : '#7D7878' }}" 
            href="{{ route('registrar.track') }}">
            Tracking
        </a>
            <a 
                style="color: #000{{ Request::routeIs('registrar.pulled') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('registrar.pulled') }}">
                Pull Out
            </a>
        </div>
    </div>

    <!-- Transaction -->
    <div class="dropdown">
        <a 
            style="color: {{ Request::routeIs('registrar.transaction') || 
                Request::routeIs('registrar.statRequest') || 
                Request::routeIs('registrar.statTransac') || 
                Request::routeIs('registrar.released') || 
                Request::routeIs('registrar.reRecord') 
                ? '#ffc107' : '#7D7878' }}" 
            class="dropbtn">
            Transaction
        </a>
        <div class="dropdown-content">
            <a 
                style="color: #000{{ Request::routeIs('registrar.transaction') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('registrar.transaction') }}">
                Requisition
            </a>
            <a 
                style="color: #7D7878{{ Request::routeIs('registrar.statRequest') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('registrar.statRequest') }}">
                Total Request
            </a>
            <a 
                style="color: #7D7878{{ Request::routeIs('registrar.statTransac') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('registrar.statTransac') }}">
                Total Transac
            </a>
            <a 
                style="color: #000{{ Request::routeIs('registrar.released') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('registrar.released') }}">
                Release
            </a>
            <a 
                style="color: #7D7878{{ Request::routeIs('registrar.reRecord') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('registrar.reRecord') }}">
                Released Record
            </a>
        </div>
    </div>
</nav>




