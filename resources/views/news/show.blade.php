<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update News') }}
        </h2>
    </x-slot>

    <form action = "" method ="post">
      {{ csrf_field() }}
      <br>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "news_id"> News ID </label>
        <input type = "text" id = "news_id" name = "news_id" class = "form-control" value = '{{ $news->news_id }}' disabled/>
      </div>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "news_date"> News Date </label>
        <input type = "text" id = "news_date" name = "news_date" class = "form-control" value = '{{ $news->news_date }}'/>
      </div>
      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "news_title"> News Title </label>
        <input type = "text" id = "news_title" name = "news_title" class = "form-control" value = '{{ $news->news_title }}'/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "news_details"> News Details </label>
        <input type = "text" id = "news_details" name = "news_details" class = "form-control" value = '{{ $news->news_details }}'/>
      </div>

      <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "status"> Status </label>
        <input type = "text" id = "status" name = "status" class = "form-control" value = '{{ $news->status }}'/>
      </div>

      <div class="col-md-12 text-center">
      <button class = "btn btn-primary btn-lg active" type = "submit"> Update </button>
      <a href = "{{ route('news.customisenews') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Back </a>
      </div>

    </form>
  </div>
  </div>
</x-app-layout>


