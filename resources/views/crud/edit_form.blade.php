<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000000;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="{{ route('update', $data->id ) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Enter your name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="address">Enter your address:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $data->address }}">
        </div>
        <div class="mb-3">
            <label for="mobile">Enter your mobile number:</label>
            <input type="number" name="mobile" id="mobile" class="form-control" value="{{ $data->mobile }}">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
