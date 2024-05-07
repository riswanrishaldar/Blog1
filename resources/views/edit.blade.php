<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Student</h2>
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="form-group">
                        <label for="class">Class</label>
                        <input type="text" class="form-control" id="class" name="class" value="{{ $student->class }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>