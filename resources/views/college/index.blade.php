@extends('layout.main')

@section('content')
    <section class="colleges-section">
        <div class="format-container">
            <div class="ml-auto header">
                <h2>Colleges</h2>
                <a href="{{ route('colleges.create') }}" class="btn btn-primary">Add New</a>
            </div>
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
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($colleges as $college)
                        <tr>
                            <td>{{ $college->id }}</td>
                            <td class="text-wrap">{{ $college->name }}</td>
                            <td class="text-wrap">{{ $college->address }}</td>
                            <td>
                                <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="{{ route('colleges.show', $college->id) }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{route('colleges.destroy', $college->id)}}"  class="btn btn-danger btn-sm college-delete"> <i class="bi bi-trash"></i> </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <form method="POST" id="form-college-delete" style="display: none;">
                @method('DELETE')
                @csrf
            </form>
        </div>

    </section>
@endsection

<style>
    .colleges-section {
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
        width: 89%;
    }
    .text-wrap {
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        max-width: 150px;
    }

</style>
