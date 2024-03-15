@extends('admin.layouts.app')

@section('header')
<h1>Nova Dúvida</h1>
@endsection


@section('content')
<x-alert/>

<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>
@endsection