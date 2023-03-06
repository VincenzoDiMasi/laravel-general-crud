@extends('/layout.main')

@section('content')
<div class="container py-5">
    <div class="d-flex flex-column align-items-center pb-5">
        <h1 class="text-center pb-2">
            Exams Result
        </h1>
        <div> <a href="{{route('exams.create')}}" class="btn btn-success">Add Exam</a></div>
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-3 row-cols-xl-4">
        @foreach($exams as $exam)
        <div id="col" class="col">
            <div id="card" class="card text-center h-100 ">
                <div class="img">
                    <img src="https://w0.peakpx.com/wallpaper/955/713/HD-wallpaper-doctor-medical.jpg" class="card-img-top" alt="...">
                </div>
                <p class="list-group-item">
                    Name: <strong>{{$exam->surname}}</strong>
                </p>
                <p class="list-group-item">
                    Surname: <strong>{{$exam->name}}</strong>
                <p class="list-group-item">
                    Fiscal code: <strong>{{$exam->fiscal_code}}</strong>
                </p>

                <p class="list-group-item">
                    Date of birth: <strong>{{$exam->date_of_birth}}</strong>
                </p>

                <div>
                    <p>Exam Type:</p> <strong>{{$exam->exam_type}}</strong>
                </div>
                <div id="btn" class="pt-3 d-flex justify-content-center">
                    <a href="{{route('exams.show', $exam->id)}}" class="btn btn-primary me-2">More Info</a>
                    <form action="{{route('exams.destroy', $exam->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete exam</button>
                       </form>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection