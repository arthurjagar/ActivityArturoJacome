<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
        <body>
            <h1>Show view</h1>
            <table>
                <tbody>
                    <th>Company</th>
                    <td>{{ $universe->company }}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{ $universe->age }}</td>
                </tr>
            </tbody>
        </table>

        <br>

        <a href="{{ route('universes.edit',$universe->id) }}">Edit Universe</a>

        <br><br>

        <form action="{{route('universes.destroy', $universe->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Delete Universe</button>
        </form>
    </body>
</html>