@extends('adminlte::page')

@section('title', 'Event List')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
<form method="post" action="{{ route('events.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="begin" type="datetime-local" label="Begin" />
    <x-adminlte-input name="finish" type="datetime-local" label="Finish" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
