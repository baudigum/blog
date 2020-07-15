{{-- @foreach ($product as $item)
 <h1>{{ $item->title }} product</h1>
@endforeach --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@foreach ($irakli as $ira)
  <table>
    <tr>
      <th>  {{ $ira->first_name }}</th>
    </tr>
  </table>
@endforeach
@foreach ($mari as $dd)
    <table>
      <tr>
        <th>{{ $dd->price }}</th>
      </tr>
    </table>

@endforeach
@foreach($users as $ff)
<table>


 <tr class="Filterable">
  <td><img src="{{ URL::to('/') }}/images/{{ $ff->image}}" class="img-thumbnail" width="75" /></td>
  <th>{{ $ff->first_name }}</th>

 </td>
 </tr>
 </table>
@endforeach --}}

{{-- <table>
@foreach ($join as $grey)
  <tr>
    @foreach ($join as $grey)
<th>{{ $grey->title }}</th>
    @endforeach
  </tr>
@endforeach
</table> --}}
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 700px;
    margin: auto;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  .center{
    text-align: center;
  }
  .center h3{
    border: 1px solid #dddddd;
    width: 700px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: -1px;
    font-size: 20px;
    font-weight: normal;
    font-family: arial, sans-serif;
    padding: 10px 0px
  }
  </style>
</head>
<body>
  <div class="center">
    <h3>{{ Auth::user()->name }}</h3>
  </div>
<table>
  <tr>
    <th>title</th>
    <th>amount</th>
    <th>price</th>
  </tr>
@foreach ($join as $key)
  <tr>
    <td>{{{$key->title}}}</td>
    <td>{{{$key->amount}}}</td>
    <td>{{{$key->price}}}</td>
  </tr>
@endforeach
</table>
<br>
<table>
  @foreach ($users as $rey)
    <tr>
      <td>{{ $rey->name }}</td>
    </tr>


  @endforeach
  {{ now()->year }}
</table>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
