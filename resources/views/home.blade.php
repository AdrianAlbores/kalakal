@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <layout-dashboard/>
    </div>
    </div>
</body>

</html>

<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
    {{ csrf_field() }}
</form>