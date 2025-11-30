@props(['title'=>'', 'cssClass'=>null])
<x-base-layout :title="$title" :$cssClass>
{{--    @include('components.layouts.header')--}}
    <x-layouts.header />
    {{$slot}}

    <footer></footer>
</x-base-layout>

{{--@extends('layouts.base')--}}


{{--@section('childContent')--}}
{{--    @include('layouts.partials.header')--}}
{{--    @yield('content')--}}
{{--    <footer></footer>--}}

{{--@endsection--}}
{{--@yield("content")--}}




