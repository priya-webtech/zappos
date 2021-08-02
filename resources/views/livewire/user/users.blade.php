<x-admin-layout>
    <div wire:key="alert">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    @livewire('user.create')
    @livewire('user.list-users')
</x-admin-layout>

