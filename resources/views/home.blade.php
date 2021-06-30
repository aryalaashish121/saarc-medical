@extends('layouts.app')

@section('content')
<div class="container">
    
               @if(Auth::user()->is_admin)
                   @include('admin.admin')
               @else
               @include('user.user')
               @endif
       
</div>
@endsection
