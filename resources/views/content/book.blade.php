<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books</title>

    <style>
    table {
       border-collapse: collapse; /* Collapsing borders */
       width: 100%;
      }

      /* Applying styles to table headers */
     th {
         background-color: #f2f2f2; /* Setting background color */
         border: 1px solid #dddddd; /* Adding border */
  text-align: left; /* Aligning text to the left */
  padding: 5px; /* Adding padding */
}

/* Applying styles to table rows */
tr {
  border: 1px solid #dddddd; /* Adding border */
}

/* Applying styles to table cells */
td {
  padding: 5px; /* Adding padding */
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

    </style>
</head>
<body>

    <div class="container">
        <h1 style="margin-left: 550px; color:blueviolet">Book Data</h1>

{{-- @if($data->isEmpty())
<h1>Tabale is empty</h1>
@endif --}}
    </div>
    <button type="button" class="btn btn-dark"" style="margin-bottom: 5px; "><a href="{{ route('book.create') }}">Add Record</a></button>

    <table>
        <thead>


            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Publishing Date</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th> 
            </tr>
        </thead>
        <tbody>

          @foreach ( $data as $data )



                <tr>
                    <th scope="row">{{ $data->id?? '' }}</th>
                    <td>{{ $data->name?? '' }}</td>
                    <td>{{ $data->author_name?? '' }}</td>
                    <td>{{ $data->publishing_date?? '' }}</td>
                    <td>{{ $data->description?? '' }}</td>

                    {{-- <td>{{ $trav</td>
                    <td>{{ $travel->email?? '' }}</td>
                    <td>{{ $travel->created_at?? ''}}</td>
                    <td>{{ $travel->updated_at?? ''}}</td> --}}
                    <td><a href="{{ route('book.edit',$data->id) }}">Update</a>
                        <a href="{{ route('book.destroy',$data->id) }}">Delete </a>
                    </td>

                    {{-- <td><a href="{{ route('b',$travel->id) }}">Update</a>
                        <a href="{{ route('deleteData',$travel->id) }}">Delete </a>
                    </td> --}}
                </tr>

 @endforeach 


        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    {{-- <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> --}}
</body>
</html>