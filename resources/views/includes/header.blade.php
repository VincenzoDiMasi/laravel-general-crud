<header>
    <div class="container d-flex justify-content-center mt-3 py-3">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid d-flex justify-content-center">
                <a href="{{route('home')}}"><img src="../img/healthcare.png" alt="" width="65px" class="me-4"></a>
                <a class="navbar-brand" href="{{route('home')}}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('exams.index') }}">Our Exams</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>