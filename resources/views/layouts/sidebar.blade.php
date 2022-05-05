<div class="col-3">
    <ul class="nav flex-column">
        {{--Illuminate\Support\Facades\Auth--}}
        @if (Auth::check())
            {{--<li class="nav-item">--}}
            {{--    <a class="nav-link" href='{{ route('event.create') }}'>Create a new Events</a>--}}
            {{--</li>--}}

            {{--<li class="nav-item">--}}
            {{--    <a class='nav-link' href='{{ route('event.index') }}'>All events</a>--}}
            {{--</li>--}}

            <li class="nav-item">
                <a class='nav-link' href='{{ route('label.create') }}'>Create a new label</a>
            </li>

            <li class="nav-item">
                <a class='nav-link' href='{{ route('label.index') }}'>Your Labels</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
            </li>

            <li class="nav-item">
                <form method='POST' action='{{ route('auth.logout') }}'>
                    @csrf
                    <button type='submit' class='btn btn-link'>Logout</button>
                </form>
            </li>

        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.signupForm') }}">Sign Up</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        @endif

    </ul>
</div>



