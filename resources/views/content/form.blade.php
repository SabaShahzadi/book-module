<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>

  <style>
     form{
            padding-top: 20px;
            text-align: center;
                color: white;
                background-color: rgba(45, 45, 60, 0.617);
                width: 400px;
                height: 400px;
                margin-left: 490px;
        }
        input{
            font-weight: bold;
        }
  </style>

   {{-- <link href="{{ asset('assets') }}/style.css" rel="stylesheet"> --}}
</head>

<body>
  <div class="container">
        <h1 style="margin-left: 550px;color:blue"> Add Book Records</h1>
        <p style="margin-left: 600px; color:blue"> Enter Book Details </p>
@if (Session::has('message'))
    <span> {{Session::get('message')  }}</span>

  @endif   
</div>

    {{-- <form @if(isset($data->id)) action="{{ route('updateData', $data->id) }}" @else action="{{ route('register') }}" @endif method="post"> --}}


        <form   @if(isset($data->id)) action="{{ route('book.update', $data->id) }}" @else action="{{ route('store.book') }}" @endif   method="post">
        @csrf
        <label for="name">Enter Book Name</label> <br>
        <input type="text" name=" name" placeholder="Enter Book Name" value="{{ $data->name?? '' }}"> <br><br>
        @error('name')
            {{ $message }}
        @enderror
        <label for="author">Enter Author Name</label><br>

        <input type="text" name="author" placeholder="Enter Author Name" value="{{ $data->author_name?? '' }}"><br><br>
        @error('author')
        {{ $message }}
        @enderror
        <label for="date">Enter Publishing Date</label><br>
        <input type="date" name="date" placeholder="Enter Publishing Date" value="{{ $data->publishing_date?? '' }}"><br><br>
        @error('date')
            {{ $message }}
        @enderror
        <label for="description">Enter description</label><br>
        <input type="text" name="description" placeholder="Enter one line description" value="{{ $data->description?? '' }}"><br><br>
        @error('description')
        {{ $message }}
        @enderror

        @if(isset($data->id))

        <input type="submit" value="update" class="btn">

        @else

        <input type="submit" value="submit" class="btn">
        @endif
    </form>



</body>

</html>


