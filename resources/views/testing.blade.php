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
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h2>Add a border to a table:</h2>

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

</body>
</html>
