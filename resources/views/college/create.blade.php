@extends('layout.main')

@section('content')
    <section class="add-college-section">
        <div class="add-college-form">
            <h1>Add College</h1>
            <form action="{{ route('colleges.store') }}" method="POST" class="form">
                @csrf
                @include("components._college-form")
                <button type="submit" class="btn btn-primary">Add College</button>
            </form>
        </div>
    </section>
@endsection

<style>
    .add-college-section {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .add-college-form {
        background: #212529;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 0 4rem black;
        width: 40vw;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        border: 1px solid black;
        text-align: center;
    }

    .add-college-form h1 {
        font-size: 2rem;
        font-weight: bold;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
    }

    .form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
</style>
