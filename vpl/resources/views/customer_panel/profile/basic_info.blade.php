@extends('layout')
@section('basic_info')


<style>
    body{
      background-color: rgba(245, 245, 245, 0.63);
    }
    .a_tag{

      text-decoration: none;
    }
    .equal-width {
        width: 100%;
    }
    
.btn{
    background-color:#0088cc;color:white
}
.text-center
{
    font-size:30px;
}

</style>

<br>
<br>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card rounded">
        <div class="card-header text-center bg-light">
          Basic Information
        </div>
        <table class="table table-bordered mt-0">
          <tbody>
            <tr>
              <th scope="row">Id</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="text" value="1005729" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">First Name</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="text" value="Ahmed" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">Last Name</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="text" value="Raza" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="text" value="Smi" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">Company</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="text" value="----" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="password" value="**********" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
            <tr>
              <th scope="row">Language</th>
              <td>
                <div class="form-group mb-0">
                  <input class="form-control" type="text" value="English" readonly>
                </div>
              </td>
              <td><a class="a_tag ml-5" href="#">Edit</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection