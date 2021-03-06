@extends('layout.app')

@section('content')
    @if (session('status'))
    <div class="flex justify-center">
        <div class="w-8/12 bg-green-500 p-4 rounded-lg p-6 mb-4 text-white text-center">
            {{session('status')}}
        </div>
    </div>
    @endif
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Dashboard
        </div>
    </div>
@endsection
