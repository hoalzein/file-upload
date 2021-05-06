<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <title>Simple File Upload</title>
        <style>
            .container {
                max-width: 500px;
            }
            dl, ol, ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <form action="{{route('file-upload')}}" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-5">Upload File</h3>
                @csrf
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label class="custom-file-label" for="chooseFile">Select file</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Upload Files
                </button>
            </form>
        </div>
        <script>
jQuery(document).ready(function () {
    jQuery('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        var label = jQuery('.custom-file-label');
        label.html(fileName);
    });
});
        </script>
    </body>
</html>