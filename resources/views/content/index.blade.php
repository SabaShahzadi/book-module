<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        .prop{
            width: 500px;
            height: 500px;
            border: 2px solid black;

            margin-left: 400px;
            margin-top: 100px;


        }
        .prop2{
            margin-left: 45px;
            margin-top:20px;
            color: blueviolet;
        }
    </style>
</head>
<body>

    <div class="prop">

   <div> <h1 class="prop2">Welcome to Blog Module </h1></div>
   <div style="margin-left: 45px">
    <h5>Cruds in Blog Module</h5>
      <ol>
         <a href="{{ route('book.index') }}"><li>Book</li></a>
         {{-- <a href="http://"><li>Product</li></a> --}}
     </ol></div>


        </div>

</body>
</html>

