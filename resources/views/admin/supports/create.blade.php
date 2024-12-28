@extends('admin.layouts.app')

<div class="container mx-auto mt-5 max-w-3xl">
    <h1 class="text-center font-bold text-3xl mb-6">Nova Dúvida</h1>

    <x-alert />

    <form action="{{ route('supports.store') }}" method="POST">
        @csrf
        @include('admin.supports.partials.form')
    </form>
</div>
