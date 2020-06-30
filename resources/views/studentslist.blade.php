<div class="card mb-3">
    <img src="https://www.arcgis.com/sharing/rest/content/items/6c036c09c490450db100cbf867c7688a/resources/1571940616424.png?w=3340" class="card-img-top" alt="...">
    <div class="card-body card align-items-center">
      <h5 class="card-title">List of Students</h5>
 
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">StudentID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Major</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
        <tr>
    
          <td>{{$student->studentId}}</td>
          <td>{{$student->firstName}}</td>
          <td>{{$student->lastName}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->major}}</td>
          <td>
              <a href="{{route('edit', $student->id)}}" class='btn btn-sm btn-warning'>Edit</a>
          </td>

          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>








   