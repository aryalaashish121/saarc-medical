@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               @if(Auth::user()->is_admin)
                   @include('admin.admin')
               @else
               @include('user.user')
               @endif
        </div>
    </div>
</div>
@endsection
