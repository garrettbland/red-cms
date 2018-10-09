<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<body>

  <h1>Add new setting</h1>

    {!! Form::open(['url' => 'admin/settings', 'method' => 'post']) !!}

    <div>
      {!! Form::label('title', 'Title', ['class' => 'awesome']) !!}
      {!! Form::text('title') !!}
    </div>

    <div>
      {!! Form::label('value', 'Value', ['class' => 'awesome']) !!}
      {!! Form::text('value') !!}
    </div>

    <div>
      {!! Form::submit('Submit') !!}
    </div>

    {!! Form::close() !!}

</body>
</html>
