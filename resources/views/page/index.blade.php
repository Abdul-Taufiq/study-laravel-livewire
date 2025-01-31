@extends('page.layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-4">hallo, percobaan CRUD with Livewire</h1>
        <img class="" src="{{ url('/resource-gambar/xxx.png') }}" style="width: 35%">

        <div class="mb-4 row">
            <div class="col-md-8">
                @livewire('kelas-create')
            </div>
        </div>

        <div>
            @livewire('kelas-table')
        </div>
    </div>
@endsection
