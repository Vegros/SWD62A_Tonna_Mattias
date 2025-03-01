@extends('layout.main')

@section('content')
    <section class="students-section">
        <div class="format-container">
            <div class="ml-auto header">
                <h2>Students</h2>
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add New</a>
            </div>
            @include('components._filter-sort')
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>DOB</th>
                        <th>College</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td class="text-wrap">{{ $student->name }}</td>
                            <td class="text-wrap">{{ $student->email }}</td>
                            <td class="text-wrap">{{ $student->phone }}</td>
                            <td class="text-wrap">{{ $student->dob }}</td>
                            <td class="text-wrap">{{ $student->college->name}}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{route('students.destroy', $student->id)}}"  class="btn btn-danger btn-sm student-delete"> <i class="bi bi-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <form method="POST" id="form-student-delete" style="display: none;">
                @method('DELETE')
                @csrf
            </form>
        </div>

    </section>
@endsection

<style>
    .students-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem 1rem;
        box-sizing: border-box;
        justify-content: flex-start;
        position: relative;
        top: 16vh;
        transform: translateY(0);
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-bottom: 1rem;
    }

    .format-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 87vw;
        gap: 2rem;
    }

    .table {
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
    }
    .table th{
        font-size: 25px;
    }
    .table td{
        font-size: 20px;
    }
    .btn i{
        font-size: 20px;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .btn-sm {
        padding: 0.7rem 0.7rem;
    }
    .table-responsive {
        width: 100%;
    }
    .text-wrap {
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        max-width: 150px;
    }

</style>
