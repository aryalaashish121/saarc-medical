@extends('layouts.app')

@section('content')
<div>
    
               @if(Auth::user()->is_admin)
                   @include('admin.admin')
               @else
               @include('user.user')
               @endif
       
</div>
@endsection
