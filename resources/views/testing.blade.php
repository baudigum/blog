{{-- @foreach ($product as $item)
 <h1>{{ $item->title }} product</h1>
@endforeach --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
