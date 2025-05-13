
@extends('wlc-main')
    @section('title','Testing ')
    @section('stylesheets')
    <style>
        .hero-video-wrapper {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            transform: translate(-50%, -50%);
            object-fit: cover;
            pointer-events: none;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4); /* Optional dark layer */
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-content {
            z-index: 2;
            color: #fff;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
}

        </style>
    @endsection
    @section('content')
    <section class="hero-video-wrapper">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="video/CodingUniverse-HomePageVideo.mp4" type="video/mp4">
            <source src="video/CodingUniverse-HomePageVideo.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay">
            <div class="hero-content">
            <h1>Welcome to My Website</h1>
            <p>Engaging tagline goes here</p>
            </div>
        </div>
    </section>

    @endsection