
@auth
    

<div class="widget widget-all-cars">
    <h4 class="widget-title">User Panel</h4>
    <ul class="cars-list">
        <li><a href="{{route('myprofile')}}">My Profile</a></li>
        <li><a href="{{route('myrents')}}">My Rents</a></li>
        <li><a href="#0">My Messages</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>

        @php
             $userRoles = Auth::user()->roles->pluck('name');
        @endphp

        @if ($userRoles->contains('admin'))
        <li><a href="{{route('admin_home')}}">Admin Panel</a></li>
        @endif

    </ul>
</div>

@endauth