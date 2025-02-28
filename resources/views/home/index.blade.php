@extends('layout.main')
@section('content')

    <section class="hero-section text-white">
        <div class="hero-content">
            @if($message = session('success'))
                <div class="alert alert-success">{{$message}} </div>
            @endif
            <h1>Colleges and Students Management System</h1>
            <p>Manage your colleges and students in one place.</p>
            <p>By Mattias Tonna SWD 6.2A</p>

        </div>
    </section>
@endsection

<style>

    .hero-section {
        color: white !important;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
        padding: 0 20px;
    }

    .hero-content {
        background: rgba(33, 37, 41, 0.9);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.6);
        border-radius: 15px;
        max-width: 700px;
        padding: 4rem;
    }

    .hero-section h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.2rem;
        font-weight: 400;
        margin-bottom: 25px;
        opacity: 0.9;
    }

</style>
