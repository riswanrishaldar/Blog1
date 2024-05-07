<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('store') }}" method="post" >
        @csrf
          <label for="">Name</label>
          <input type="text" name="name" ><br>
          <label for="">Class</label>
          <input type="text" name="class"><br>
          <input type="submit" value="submit">

    </form>
    
</body>
</html>