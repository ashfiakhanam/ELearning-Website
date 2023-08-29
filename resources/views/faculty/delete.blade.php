<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Course') }}
        </h2>
    </x-slot>

    <form action = "" method ="post">
      {{ csrf_field() }}
      <br>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "faculty_id"> Faculty ID </label>
        <input type = "text" id = "faculty_id" name = "faculty_id" class = "form-control" value = '{{ $faculty->faculty_id }}' disabled/>
      </div>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "faculty_initials"> Faculty Initials </label>
        <input type = "text" id = "faculty_initials" name = "faculty_initials" class = "form-control" value = '{{ $faculty->faculty_initials }}' disabled/>
      </div>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "faculty_name"> Faculty Name </label>
        <input type = "text" id = "faculty_name" name = "faculty_name" class = "form-control" value = '{{ $faculty->faculty_name }}' disabled/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "faculty_designation"> Faculty Designation </label>
        <input type = "text" id = "faculty_designation" name = "faculty_designation" class = "form-control" value = '{{ $faculty->faculty_designation }}' disabled/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "faculty_image"> Faculty Image URL </label>
        <input type = "text" id = "faculty_image" name = "faculty_image" class = "form-control" value = '{{ $faculty->faculty_image }}' disabled/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "status"> Status </label>
        <input type = "text" id = "status" name = "status" class = "form-control" value = '{{ $faculty->status }}' disabled/>
      </div>

      <div class="col-md-12 text-center">
      <button class = "btn btn-danger btn-lg active" type = "submit"> Delete </button>
      <a href = "{{ route('faculty.customisefaculty') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Back </a>
      </div>

    </form>
  </div>
  </div>
</x-app-layout>


