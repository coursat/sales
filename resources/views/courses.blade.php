@extends('container')
@section('pageName')Course @endsection
@section('content')
<div class="col-lg-12">
    <div class="block">
        <div class="title"><strong>List Of Courses</strong>
        <div class="form-group pull-right">
                    <button class="btn btn-primary">
                        <i class="fa fa-plus"></i>  Add Course
                    </button>
                  </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Date</th>
                <th>Student</th>
                <th>Branch</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter      </td>
                <td>@twitter      </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection
