<!-- <ul>
    @foreach($users as $user)
        <li>{{ $user['first_name'] }} {{ $user['last_name'] }}</li>
    @endforeach
</ul> -->

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class='list-group'>
                @foreach($users as $user)
                    <li class='list-group-item' style="margin-top: 20px;">
                        <span>{{ $user->name }}</span>
                        <span class="pull-right clearfix">
                            Joined ({{ $user->created_at->diffForHumans() }})
                        </span>
                        <button class='btn btn-xs btn-primary'>Follow</button>
                    </li>
                @endforeach
            </ul>
            {{ $users->links() }} <!--显示分页-->
        </div>
    </div>
@endsection