<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Phone Number</th>
                            <th scope="col" class="text-center">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td class="text-center">{{ $row->name }}</td>
                            <td class="text-center">{{ $row->number }}</td>
                            <td class="text-center">{{ $row->balance }}</td>
                        </tr>
                        @break
                        @endforeach

                        <form action="{{ route('user.transaction1') }}" method="post">
                            @csrf
                            <td class="text-center">
                                <input type="number" name="balance" required>
                                <input type="number" name="number" required>
                                <input type="hidden" name="SenderNumber" value="0177505022" required>
                            </td>
                            <td>
                                <button class="btn btn-info" type="submit">Balance Transfer</button>
                            </td>
                        </form>


                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Phone Number</th>
                            <th scope="col" class="text-center">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $count = 0 @endphp 
@foreach($data as $row)
    @if ($count < 2)
        <tr>
            <td class="text-center">{{ $row->name }}</td>
            <td class="text-center">{{ $row->number }}</td>
            <td class="text-center">{{ $row->balance }}</td>
        </tr>
    @php $count++ @endphp
    @endif
@endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
