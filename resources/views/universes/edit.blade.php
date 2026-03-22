<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Edit Universe</h1>

    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('patch')

        <label for="name">Name:</label>
        <input type="text" id="universe" name="universe" value="{{ $universe->universe }}" >
        <br></br>

        <label> Company:</label>
        <select name="company">
            <option value="Marvel"@selected($universe->company == 'Marvel')>Marvel</option>
            <option value="DC" @selected($universe->company == 'DC')>DC</option>
        </select>
        <br></br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" value="{{ $universe->age }}"/>
        <br></br>

        <input type="submit" value="Edit Universe" />
    </form> 
</body>
</html>