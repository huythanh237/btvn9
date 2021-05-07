@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided'))
