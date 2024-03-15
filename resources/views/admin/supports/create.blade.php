@extends('admin.layouts.app')
<h1>Nova Dúvida</h1>

<x-alert/>

<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form>