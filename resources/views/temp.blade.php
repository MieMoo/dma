<h1>do the bardman</h1>
<h2>do the bardman</h2>
<h3>do the bardman</h3>
<h4>do the bardman</h4>
<h5>do the bardman</h5>
<h6>do the bardman</h6>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>