<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($data as $datas)
              <tr>
                <td>{{ $datas->id }}</td>
                <td>{{ $datas->name }}</td>
                <td>{{ $datas->class }}</td>
                <td>
                <a href="{{ route('students.edit', $datas->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('students.destroy', $datas->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    
</body>
</html>