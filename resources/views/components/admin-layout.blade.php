<nav class="navbar">
    <!-- Home -->
    <a 
        style="color: {{ Request::routeIs('admin.dashboard') ? '#ffc107' : '#7D7878' }}" 
        href="{{ route('admin.dashboard') }}">
        Home
    </a>

    <!-- Activity Logs -->
    <a 
        style="color: {{ Request::routeIs('admin.activityLogs') ? '#ffc107' : '#7D7878' }}" 
        href="{{ route('admin.activityLogs') }}">
        Activity Logs
    </a>

    <!-- User Management -->
    <div class="dropdown">
        <a 
            style="color: {{ Request::routeIs('admin.userManagement') || 
                Request::routeIs('admin.lockAccount') || 
                Request::routeIs('admin.deactivate') || 
                Request::routeIs('admin.modify') 
                ? '#ffc107' : '#7D7878' }}" 
            class="dropbtn">
            User Management
        </a>
        <div class="dropdown-content">
            <a 
            style="color: #000 {{ Request::routeIs('admin.userManagement') ? '#ffc107' : '#7D7878' }}" 
            href="{{ route('admin.userManagement') }}">
            Manage
        </a>
            <a 
                style="color: #000 {{ Request::routeIs('admin.lockAccount') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('admin.lockAccount') }}">
                Lock
            </a>
            <a 
                style="color: #000{{ Request::routeIs('admin.deactivate') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('admin.deactivate') }}">
                Deactivate 
            </a>
            <a 
                style="color: #000{{ Request::routeIs('admin.modify') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('admin.modify') }}">
                Modify
            </a>
        </div>
    </div>

        <!-- Document Management -->
        <div class="dropdown">
            <a 
                style="color: {{ Request::routeIs('admin.documentManagement') || 
                    Request::routeIs('admin.documentManagement') || 
                    Request::routeIs('admin.archivedDocuments') 
                    ? '#ffc107' : '#7D7878' }}" 
                class="dropbtn">
                Document Maintenance
            </a>
            <div class="dropdown-content">
                <a 
                style="color: #000 {{ Request::routeIs('admin.documentManagement') ? '#ffc107' : '#7D7878' }}" 
                href="{{ route('admin.documentManagement') }}">
                Manage
            </a>
                <a 
                    style="color: #000 {{ Request::routeIs('admin.archivedDocuments') ? '#ffc107' : '#7D7878' }}" 
                    href="{{ route('admin.archivedDocuments') }}">
                    Archived
                </a>
            </div>
        </div>
</nav>
