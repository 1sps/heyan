@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  @if (false)
  @livewire('notice-component')
  @livewire('todo-component')
  @endif
@stop
