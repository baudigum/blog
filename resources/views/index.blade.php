@extends('parent')

@section('main')
<a class="btn btn-success" href="{{ route('create') }}"> Create New Product</a>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<table class="table table-bordered table-striped">
  <tr>
  <th width="10%">Image</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr class="Filterable">
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>
     <a class="btn btn-success" href="{{ route('edit', $row->id) }}"> edit </a>
     <a class="btn btn-success" href="{{ route('filter', $row->id) }}"> filter </a>
     <a href="{{ route('destroy', $row->id) }}" class="btn btn-danger">Delete</button>

  </td>
  </tr>
 @endforeach
</table>

@endsection


@section('footer')
  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".Filterable").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
@endsection
