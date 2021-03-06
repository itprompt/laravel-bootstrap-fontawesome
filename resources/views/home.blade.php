<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ mix('css/thaifont.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="container border border-secondary py-4 my-4">
        <h1 class="text-danger">Hello World !</h1>
        <i class="fab fa-github h1 text-warning"></i><br />
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
        <h1 class="font-sarabun text-success">ทดสอบภาษาไทย</h1>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/bootstrap.js') }}"></script>
    <script src="{{ mix('js/fontawesome.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
