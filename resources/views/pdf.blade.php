<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>{{Auth::user()->VIS_MATRICULE}}</p>
    {{-- <p>PDF</p> --}}
    <p>{{ $rapports->RAP_NUM }}</p>
    <p>{{ $rapports->RAP_DATE }}</p>
    <p>{{ $rapports->RAP_BILAN }}</p>
    <p>{{ $rapports->RAP_MOTIF }}</p>
</body>
</html>


