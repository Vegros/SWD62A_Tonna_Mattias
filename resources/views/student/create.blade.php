@extends('layout.main')

@section('content')
    <section class="add-student-section">
        <div class="add-student-form">
            <h1>Add Student</h1>
            <form action="{{ route('students.store') }}" method="POST" class="form">
                @csrf
                @include("components._student-form")
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </section>
@endsection

<style>
    .add-student-section {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .add-student-form {
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

    .add-student-form h1 {
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
