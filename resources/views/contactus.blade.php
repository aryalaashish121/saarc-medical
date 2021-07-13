@extends('layouts.layout')
@section('title', 'Contact Us')
@section('content')
    <div id="root">
        <v-app>
            <div class="mt-12">
                <contact></contact>
            </div>
        </v-app>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection
