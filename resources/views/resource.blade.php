@extends('layouts.layout')
@section('title', 'Resources')
@section('content')
    <div id="root">
        <v-app>
            <div class="mt-12">
                <resources></resources>
            </div>
        </v-app>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection
