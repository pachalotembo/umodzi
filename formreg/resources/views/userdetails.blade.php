<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information Recordial System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
 
  <div class="container">
    <!-- Button trigger modal -->

        
      {{-- @if (count($errors) > 0 )
         <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
          </div> 
      @endif

      @if (\session::has('success'))
      <div class="alert alert-success">
        <p>{{ \session::get('success') }}</p>
      </div>
          
      @endif --}}

      <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary btn-sm mt-5"  style="margin-left: 70%" data-bs-toggle="modal" data-bs-target="#edubackground">
              Add Education background
            </button>
            <button type="button" class="btn btn-primary btn-sm mt-5" style="margin-left: 2%" data-bs-toggle="modal" data-bs-target="#workexperience">
              Add Work Experience
            </button>
        </div> 
      </div>

  
  
  
      <!-- Modal -->
      <div class="modal fade" id="edubackground" tabindex="-1" aria-labelledby="edubackgroundLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="edubackgroundLabel"><strong>Education background</strong> </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/edubackground" method="POST">
              @csrf

                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="highest_qualification">Highest qualification</label>
                            <input type="text" name="highest_qualification" class="form-control" placeholder="Enter highest qualification">
                            <span class="text-danger">@error('highest_qualification'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="institution">Name of School / Institution</label>
                          <input type="text" name="institution" class="form-control" placeholder="Enter Institution name">
                          <span class="text-danger">@error('institution'){{ $message }}@enderror</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Enter location">
                            <span class="text-danger">@error('location'){{ $message }}@enderror</span>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" class="form-control" placeholder="Enter start_date">
                            <span class="text-danger">@error('start_date'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="graduation_date">Graduation Date</label>
                          <input type="date" name="graduation_date" class="form-control" placeholder="Enter graduation date">
                          <span class="text-danger">@error('graduation_date'){{ $message }}@enderror</span>
                          <label for="not_graduated">
                            <input type="checkbox" name="not_graduated" value="not_graduated"> I havent graduated yet
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="e.g - preseneted 'Chancellors Trophy'. - Deane's List 2016. - Soccer Team Captain"></textarea>
                            <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                        </div>
                    </div>
                  </div>
                </div>  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>


      <!-- Button trigger modal -->

  

 


    <!-- Modal -->
    <div class="modal fade" id="workexperience" tabindex="-1" aria-labelledby="workexperienceLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="workexperienceLabel"><strong>Work Experience</strong> </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/workexperience" method="POST">
              @csrf

              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="position">Title/Position</label>
                          <input type="text" name="position" class="form-control" placeholder="Enter title / position">
                          <span class="text-danger">@error('position'){{ $message }}@enderror</span>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Institution / Company</label>
                        <input type="text" name="company" class="form-control" placeholder="Enter institution name">
                        <span class="text-danger">@error('company'){{ $message }}@enderror</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="location">Location</label>
                          <input type="text" name="location" class="form-control" placeholder="Location (City, State)">
                          <span class="text-danger">@error('location'){{ $message }}@enderror</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="start_date">Start Date</label>
                          <input type="date" name="start_date" class="form-control" placeholder="Enter start_date">
                          <span class="text-danger">@error('start_date'){{ $message }}@enderror</span>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" class="form-control" placeholder="Enter end date">
                        <span class="text-danger">@error('end_date'){{ $message }}@enderror</span>
                        <label for="still_working">
                          <input type="checkbox" name="still_working" value="still_working"> I'm in this job right now
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="work_description">Description</label>
                          <textarea class="form-control" name="work_description" rows="3" placeholder="e.g. - Handled stock intakes and helped to redesign the shop’s layout. - Gave one-to-one mentoring to a team of 8 shop assistants."></textarea>
                          <span class="text-danger">@error('work_description'){{ $message }}@enderror</span>
                      </div>
                  </div>
                </div>
              </div>  
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>



</body>
</html>