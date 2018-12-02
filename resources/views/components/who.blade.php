@if(Auth::guard('web')->check())

    <p class="text-success">
        you are logged in as <strong>User</strong>
    </p>

    @else

<p class="text-danger">
    You are logged out as a <strong>user</strong>
</p>

@endif



@if(Auth::guard('admin')->check())

    <p class="text-success">
        you are logged in as <strong>admin</strong>
    </p>

@else

    <p class="text-danger">
        You are logged out as a <strong>admin</strong>
    </p>

@endif