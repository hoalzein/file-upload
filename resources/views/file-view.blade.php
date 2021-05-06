<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <title>Simple File Upload</title>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <table class="table table-bordered mb-5">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">HTML</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{!! $html !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <table class="table table-bordered mb-5">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">#</th>
                                <th scope="col">Paragraphs</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paragraphs as $paragraph)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $paragraph }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>