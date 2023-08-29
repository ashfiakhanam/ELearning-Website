<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
      
        <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Faculty') }}
          </h2>
        </x-slot>
      

    </div>

    <div class="col-md-12 text-center">
    <a href = "/faculty/create" class="btn btn-primary">Add New Faculty</a>
    </div>

    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Faculty ID</th>
            <th scope="col">Faculty Initials</th>
            <th scope="col">Faculty Name</th>
            <th scope="col">Faculty Designation</th>
            <th scope="col">Faculty Image</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        

        @foreach ($faculties as $faculty)
        <tr>
            <td> {{ $faculty->faculty_id }} </td>
            <td> {{ $faculty->faculty_initials }} </td>
            <td> {{ $faculty->faculty_name }} </td>
            <td> {{ $faculty->faculty_designation }} </td>
            <td> {{ $faculty->faculty_image }} </td>
            <td> {{ $faculty->status }} </td>
            <td> 
              <a href = "/faculty/update/{{$faculty->faculty_id}}" class="btn btn-secondary">Update</button></a>
              <a href = "/faculty/delete/{{$faculty->faculty_id}}" class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @endforeach 
        </tbody>
      </table>
      <div class="col-md-12 text-center">
        <a href = "/dashboard" class = "btn btn-secondary"> Back </a>
      </div>
    </div>
  </main>
  </div>
</x-app-layout>

