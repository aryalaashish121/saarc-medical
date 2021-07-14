@extends('layouts.layout')
@section('title', 'SAARC Medical Co-operation')

@section('content')
    <div id="root">
        <v-app>
            <welcome></welcome>
        </v-app>
    </div>
@stop
@section('scripts')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection
