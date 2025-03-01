@extends('layout.main')

@section('content')
    <section class="edit-college-section">
        <div class="edit-college-form">
            <h1>Edit College</h1>
            <form action="{{route('colleges.update', $college->id)}}" method="POST" class="form">
                @method("PUT")
                @csrf
                @include("components._college-form")
                <button type="submit" class="btn btn-primary">Update college</button>
                <div style="width: 100%; display: flex; justify-content: center; align-items: center; margin-top: 1rem">
                    <a href="{{route('colleges.index')}}" style="width: 10vw" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </section>
@endsection

<style>
    .edit-college-section {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .edit-college-form {
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

    .edit-college-form h1 {
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
