@extends('layouts.app')

@section('title', 'CodeByACR | Agustín Constantino Rugerio — Desarrollador Full Stack')
@section('meta_description', 'Portafolio de Agustín Constantino Rugerio: proyectos web, sistemas empresariales, e-learning y comercio electrónico.')

@section('content')
    @include('sections.hero')
    @include('sections.technologies')

    <div class="container">
        <div class="row gy-5 align-items-start">
            @include('sections.about')
            @include('sections.experience')
        </div>
    </div>

    @include('sections.projects')
    @include('sections.services')
    @include('sections.cta')
    @include('partials.footer')
@endsection
