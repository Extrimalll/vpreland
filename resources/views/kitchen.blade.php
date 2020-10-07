<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tagsinput.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4><?=$kitchen[0]['name']?></h4>
        </div>
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2" style="color: black !important;">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="mb-3">Добавление тегов</label>
                        <div id="status" class="mb-1"></div>
                        <input type="text" id="tags" value=" <?php foreach ($kitchen as $kitch) echo $kitch['tagname'].', '?>" data-role="tagsinput" class="form-control tags" />
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_tags" id="id_tags" value="<?=$kitchen[0]['id_tags']?>">
                    </div>
                    <button id="addTag" type="button" class="btn btn btn-success">Добавить тег(и)</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/tagsinput.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
</div>
</body>
</html>
