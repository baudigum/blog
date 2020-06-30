@foreach ($product as $item)
 {{ $item->title }}

@endforeach
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table style="width:100%">
@foreach ($search as $valve)

  {{-- <tr>
    <th>{{ $valve->id }}</th>
    <th>{{ $valve->title }}</th>
    <th>{{ $valve->amount }}</th>
    <th>{{ $valve->prices }}</th>
  </tr> --}}
  <tr>
    <td>{{ $valve->price }}</td>
  </tr>

@endforeach
</table>
<h1>{{ $first }}</h1>
<h1>{{ $dota }}</h1>
