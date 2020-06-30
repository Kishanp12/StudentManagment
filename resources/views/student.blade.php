<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')

    <div class="row header-container justify-content-center">
      <div class="header">
        <h1>Student Management System</h1>
      </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
         <div class='container-fluid mt-4'>
           <div class='row justify-content-center'>
             <section class='col-md-7'>
               @include('studentslist')
             </section>
           </div>
         </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col-md-7'>
                @include('studentslist')
              </section>
              <section class='col-md-5'>

                <div class="card mb-3">
                  <img src="https://www.educationalappstore.com/images/best-apps-for-education.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Enter the Information of the new Students</h5>
                
                    <form action="{{route('store')}}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label>StudentID</label>
                          <input name="studentId" type="Text" class="form-control" placeholder="Enter StudentID">
                        </div>
                        <div class="form-group">
                          <label>First Name</label>
                          <input name="firstName" type="Text" class="form-control" placeholder="Enter the First Name">
                        </div>
                        <div class="form-group">
                          <label>Last Name</label>
                          <input name="lastName" type="Text" class="form-control" placeholder="Enter the Last Name">
                        </div>
                        <div class="form-group">
                          <label>Age</label>
                          <input name="age" type="Text" class="form-control" placeholder="Enter the Age">
                        </div>
                        <div class="form-group">
                          <label>Major</label>
                          <input name="major" type="Text" class="form-control" placeholder="Enter the Major">
                        </div>
                        <input type='submit' class="btn btn-info" value="Save">
                        <input type='reset' class="btn btn-warning" value="Reset">
      
                      </form>
                  </div>
                </div>

              </section>
          </div>
        </div>

    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col'>
                @include('studentslist')
                </section>
                <section class='col'></section>
          </div>
        </div>

    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class='col-md-7'>
                  @include('studentslist')
                </section>
                <section class='col-md-5'>

                  <div class="card mb-3">
                    <img src="https://support.content.office.net/en-us/media/9baeb92c-fa30-474c-b8f9-c14d1532622b.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Update Student Information</h5>
                    
                      <form action="{{route('update', $student->id)}}" method="POST">
                        @csrf
                          <div class="form-group">
                            <label>StudentID</label>
                          <input value="{{$student->studentId}}" name="studentId" type="Text" class="form-control" placeholder="Enter StudentID">
                          </div>
                          <div class="form-group">
                            <label>First Name</label>
                            <input value='{{$student->firstName}}'' name="firstName" type="Text" class="form-control" placeholder="Enter the First Name">
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <input value='{{$student->lastName}}'' name="lastName" type="Text" class="form-control" placeholder="Enter the Last Name">
                          </div>
                          <div class="form-group">
                            <label>Age</label>
                            <input value='{{$student->age}}'' name="age" type="Text" class="form-control" placeholder="Enter the Age">
                          </div>
                          <div class="form-group">
                            <label>Major</label>
                            <input value='{{$student->major}}'' name="major" type="Text" class="form-control" placeholder="Enter the Major">
                          </div>
                          <input type='submit' class="btn btn-info" value="Update">
                          <input type='reset' class="btn btn-warning" value="Reset">
        
                        </form>
                    </div>
                  </div>
                 
                </section>
          </div>
        </div>
    @endif

    

    
<footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>