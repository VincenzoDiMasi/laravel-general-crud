@extends('/layout.main')
@section('content')
<section id="exam-details">
  <h1 class="text-center">Azienda Boolean</h1>

  <div class="container mt-5">
    <h4>Surname: {{$exam->surname}} </h4>
    <h4>Name: {{$exam->name}} </h4>
    <h4>Tax Code: {{$exam->fiscal_code}} </h4>
    <h4>Date of Birth: {{$exam->date_of_birth}} </h4>

  </div>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Esame</th>
          <th scope="col">Esito</th>
          <th scope="col">U.M.</th>
          <th scope="col">Intervalli di riferimento</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Plateletes</th>
          <td>{{$exam->blood_platelet}}</td>
          <td>10/microL</td>
          <td>140-144</td>
        </tr>
        <tr>
          <th scope="row">White Blood Cells</th>
          <td>{{$exam->white_blood_cells}}</td>
          <td>10/microL</td>
          <td>4.00-11.00</td>
        </tr>
        <tr>
          <th scope="row">Hemoglobin</th>
          <td>{{$exam->hemoglobin}}</td>
          <td>g/dL</td>
          <td>14.00-18.0</td>
        </tr>
        <tr>
          <th scope="row">Hematocrit</th>
          <td>{{$exam->hematocrit}}</td>
          <td>%</td>
          <td>40.0-52.0</td>
        </tr>
        <tr>
          <th scope="row">Average Cell Volume</th>
          <td>{{$exam->average_cell_volume}}</td>
          <td>fL</td>
          <td>82.0-98.0</td>
        </tr>
        <tr>
          <th scope="row">Average Cell Content</th>
          <td>{{$exam->average_cell_content_hb}}</td>
          <td>pg</td>
          <td>25.0-34.0</td>
        </tr>
        <tr>
          <th scope="row">Average Cell Concentration</th>
          <td>{{$exam->average_cell_concentration}}</td>
          <td>g/dL</td>
          <td>32.0-36.0</td>
        </tr>
        <tr>
          <th scope="row">G.R.</th>
          <td>{{$exam->gr}}</td>
          <td>%</td>
          <td>11.5-14.5</td>
        </tr>
        <tr>
          <th scope="row">Mean Platelates Volume</th>
          <td>{{$exam->mean_plate_volume}}</td>
          <td>fL</td>
          <td>7.2-11.1</td>
        </tr>
        <tr>
          <th scope="row">Hypocromic Red Blood Cells</th>
          <td>{{$exam->hypochromic_red_blood_cells}}</td>
          <td>%</td>
          <td>0.0-2.5</td>
        </tr>
        <tr>
          <th scope="row">SGPT</th>
          <td>{{$exam->sgpt}}</td>
          <td>%</td>
          <td>4-41</td>
        </tr>
      </tbody>
    </table>
    <div>
      {{-- Buttons  --}}

      <div class="d-flex">
         <a href="{{route('exams.index')}}" class="btn btn-primary me-3">Return</a>
         <form action="{{route('exams.destroy', $exam->id)}}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger me-3">Delete exam</button>
         </form>
         <a href="{{route('exams.edit', $exam->id)}}" class="btn btn-warning">Edit</a>
      </div>

    </div>
  </div>


</section>
@endsection