@extends('layout.main')

@section('content')
    <section class="edit-student-section">
        <div class="edit-student-form">
            <h1>Edit Student</h1>
            <form action="{{route('students.update', $student->id)}}" method="POST" class="form">
                @method("PUT")
                @csrf
                @include("components._student-form")
                <button type="submit" class="btn btn-primary">Update Student</button>
                <div style="width: 100%; display: flex; justify-content: center; align-items: center; margin-top: 1rem">
                    <a href="{{route('students.index')}}" style="width: 10vw" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </section>
@endsection

<style>
    .edit-student-section {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .edit-student-form {
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

    .edit-student-form h1 {
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
    }
</style>
