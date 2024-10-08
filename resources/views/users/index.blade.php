@extends('layouts.default')

@section('title', '所有用户')

@section('content')
<div class="offset-md-2 col-md-8">
    <h2 class="md-4 text-center">所以用户</h2>
    <div class="list-group list-group-flush">
        @foreach($users as $user)
            @include('users._user')
        @endforeach
    </div>

    <div class="mt-3">
        {{-- 渲染分页的时候使用的标签和其他的不一样需要注意 {!! $xxx->rander() !!}--}}
        {!! $users->render() !!}
    </div>
</div>
@endsection

