<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>Files</h1>
    <ul>
        @foreach ($files as $file)
            <li>
                {{ basename($file) }}
                <a href="{{ route('backup.download', ['filename' => basename($file)]) }}">Download</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
