@extends('page.layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-4">hallo, percobaan Edit with Livewire</h1>

        <div class="mb-4 row">
            <div class="col-md-8">
                @livewire('kelas-edit', ['kelases' => $kelases])
            </div>
        </div>
    </div>
@endsection
