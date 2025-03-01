@extends('layout.main')
@section('content')
    <main class="student-section">
        <div class="student-card">
            <div class="card-header">
                <h2>Student Details</h2>
            </div>
            <div class="card-body">
                <div class="info-group">
                    <label>Student Name:</label>
                    <p class="text-wrap">{{ $student->name }}</p>
                </div>

                <div class="info-group">
                    <label>Student Email</label>
                    <p class="text-wrap">{{ $student->email }}</p>
                </div>
                <div class="info-group">
                    <label>Student Phone</label>
                    <p class="text-wrap">{{ $student->phone }}</p>
                </div>
                <div class="info-group">
                    <label>Student Date Of Birth</label>
                    <p class="text-wrap">{{ $student->dob }}</p>
                </div>
                <div class="info-group">
                    <label>Student College</label>
                    <p class="text-wrap">{{ $student->college->name }}</p>
                </div>

                <hr class="divider">

                <div class="button-group">
                    <a href="{{ route('students.index') }}" class="btn btn-outline-light">Back</a>
                </div>
            </div>
        </div>
    </main>
@endsection

<style>
    .student-section {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .student-card {
        background: #212529;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 0 2rem rgba(0, 0, 0, 0.8);
        width: 50vw;
        max-width: 600px;
        text-align: center;
        color: white;
    }

    .card-header {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 1.5rem !important;
        text-align: center;
        color: #ffc107;
    }
    .info-group {
        display: flex;
        flex-direction: column;
        text-align: left;
        margin-bottom: 1rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }

    .info-group label {
        font-weight: bold;
        color: #f8f9fa;
        font-size: 1.1rem;
    }

    .info-group p {
        margin: 0;
        font-size: 1rem;
        color: #ddd;
    }

    .divider {
        border: none;
        height: 2px;
        background: white;
        margin: 1.5rem 0;
    }


    .button-group {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .btn {
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
        transition: 0.3s;
    }

    .btn-outline-light:hover {
        background-color: #f8f9fa;
        color: black;
    }
    .text-wrap {
        white-space: normal !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        max-width: 500px;
    }

</style>
