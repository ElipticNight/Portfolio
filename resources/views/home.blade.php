@extends('templates/layout')

@section('content')
    <div class="hero-banner">
        <div class="title">
            <h1>Aidan Byrne</h1>
            <h3>Full Stack Web Developer</h3>
        </div>
    </div>
    <hr>
    <div class="projects-section">
        <h1>projects</h1>
        <h3><a href="/projects">View all projects.</a></h3>
        <div class="projects">
            <project-card></project-card>
            <project-card></project-card>
            <project-card></project-card>
            <project-card></project-card>
        </div>
        <h1></h1>
    </div>
    <hr>
    <div class="about-me-section">
        <div class="title">
            <h1>About me</h1>
            <h3>Fusce elementum lectus tortor, a iaculis lectus tincidunt at. Nullam ultricies ac ante ac sagittis. Mauris rhoncus in purus et scelerisque. Ut sodales, erat eget. </h3>
        </div>
    </div>
    <hr>
    <div class="contact-section">
        <div class="title">
            <h1>Contact</h1>
            <h3>Fusce elementum lectus tortor, a iaculis lectus tincidunt at. Nullam ultricies ac ante ac sagittis. Mauris rhoncus in purus et scelerisque. Ut sodales, erat eget. </h3>
        </div>
    </div>
@endsection
