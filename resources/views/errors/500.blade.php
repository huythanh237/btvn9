@extends('errors::minimal')

@section('title', __('Internal Server Error'))
@section('code', '500')
@section('message', __('A generic error message, given when no more specific message is suitable'))
