<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('colleges.index') ? 'active' : '' }}" href="{{ route('colleges.index') }}">Colleges</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('students.index') ? 'active' : '' }}" href="{{ route('students.index') }}">Students</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>

    .text-format{
        cursor: default;
        min-width: fit-content !important;
        width: fit-content !important;
        max-width: 10rem !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #9a9696;
        font-weight: bolder;
        font-style: italic;
    }
    .text-format:hover{
        color: #9a9696;
    }

    .nav-link.active {
        font-weight: bold;
        color: yellow !important;
    }

    .navbar {
        display: flex;
        padding: 2rem;
        position: absolute;
        width: 100%;
        font-weight: bold;
        z-index: 1000;
    }


    li.nav-item {
        display: flex;
        justify-content: end;
        cursor: pointer;

    }

    .nav-link {
        width: fit-content;
    }

</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        toggler.addEventListener('click', function () {
            navbarCollapse.classList.toggle('show');
        });
    });

</script>
