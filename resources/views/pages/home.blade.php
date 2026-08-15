<!DOCTYPE html>
<html>
<head>
    <title>Velora Digital</title>
</head>
<body>
@extends('layouts.app')

@section('content')

<section class="hero">

    <div class="hero-text">

        <p class="small-title">
            DIGITAL SOLUTIONS FOR MODERN BUSINESSES
        </p>

        <h1>
            Turn Your Ideas Into
            <span>Digital Experiences.</span>
        </h1>

        <p class="description">
            We help businesses build beautiful, reliable, and meaningful
            digital solutions that connect them with their customers.
        </p>

        <a href="{{ route('services') }}" class="hero-button">
            Explore Our Services
        </a>

    </div>

</section>

<section class="about-preview">

    <div class="about-text">

        <p class="section-label">
            WHO WE ARE
        </p>

        <h2>
            We Create Technology With Purpose.
        </h2>

        <p>
            Velora Digital is a technology and creative solutions company
            dedicated to helping businesses establish a strong digital presence.
            We combine creativity, technology, and strategy to turn ideas into
            meaningful digital experiences.
        </p>

        <a href="{{ route('about') }}" class="text-button">
            Learn More About Us →
        </a>

    </div>

</section>
<section class="services-preview">

    <div class="section-heading">
        <p class="section-label">WHAT WE DO</p>

        <h2>Our Digital Solutions</h2>

        <p>
            We combine creativity and technology to help businesses
            grow, connect, and succeed in the digital world.
        </p>
    </div>

    <div class="service-cards">

        <div class="service-card">
            <div class="service-icon">✦</div>

            <h3>Web Development</h3>

            <p>
                Modern and responsive websites designed to give
                your business a strong online presence.
            </p>
        </div>

        <div class="service-card">
            <div class="service-icon">♡</div>

            <h3>UI/UX Design</h3>

            <p>
                Beautiful and intuitive interfaces designed
                to create better digital experiences.
            </p>
        </div>

        <div class="service-card">
            <div class="service-icon">✧</div>

            <h3>IT Consulting</h3>

            <p>
                Practical technology guidance to help your
                business choose better digital solutions.
            </p>
        </div>

    </div>

    <div class="services-link">
        <a href="{{ route('services') }}" class="text-button">
            View All Services →
        </a>
    </div>

</section>

@endsection

</body>
</html>