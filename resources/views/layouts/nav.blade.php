<div
    style="background-color: rgb(0, 0, 0);
    color: white;
    border-radius: 25px;
    height: 100px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    font-size: 25px;


    ">
    <a style="padding-right: 70px; padding-left: 30px;" href="https://www.porsche.com/middle-east/_oman_/">
        HOME
    </a>
    <a style="padding-right: 70px;" href="">
        SEARCH
    </a>
    <a style="padding-right: 70px;" href="{{ route('contact_us') }}">
        CONTACT US
    </a>
    {{-- @if ($logged) --}}
    {{-- @auth --}}

    @auth
    @if (auth()->user()->hasRole('admin'))

    <a style="padding-right: 70px;" href="{{ route('contact_us_list') }}">
        CONTACT US LIST
    </a>
    <a style="padding-right: 70px;" href="{{ route('add_cars') }}">
        ADD CARS
    </a>
    <a style="padding-right: 70px;" href="{{ route('Buyers_list') }}">
        Buyers
    </a>
    {{-- @endauth --}}
    @endif


    @if (auth()->user()->hasRole('user') || auth()->user()->hasRole('admin') )
    <a style="padding-right: 70px;" href="{{ route('view_cars') }}">
        ADDED CARS LIST
    </a>
    @endif

    @endauth


    {{-- @endif --}}
</div>
