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
    section{
      width: 100vw;
      height: 100vh;
      background-position: center;
      background-repeat: none;
      background-image: url('https://img.thedailybeast.com/image/upload/c_crop,d_placeholder_euli9k,h_1440,w_2560,x_0,y_0/dpr_1.5/c_limit,w_1044/fl_lossy,q_auto/v1533067382/180731-Kemper-georgia-tease_t2aktf');
      display: flex;
      align-items: center;
      justify-content: center;
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 700px;
      margin: auto;
      background: white;
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
      margin-top: 0px;
      margin-bottom: -1px;
      font-size: 20px;
      font-weight: normal;
      font-family: arial, sans-serif;
      padding: 10px 0px;
      background: white;
    }
  </style>
</head>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action={{ route('filter') }}>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>








































<body>
  <section>
    <div class="center-all">
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
    </div>
    @foreach ($users as $rey)
      <tr>
        <td>{{ $rey->name }}</td>
      </tr>


    @endforeach
    <div class="center">
      <h3>{{ now()->day }}</h3>
    </div>
  </table>
</section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
