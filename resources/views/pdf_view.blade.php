


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traceability</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Traceability</h2>

       

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                <th>Category</th>
                <th  style = "width:30%">question</th>
                <th  style = "width:50%">Answers</th>
                <th>snippets</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($allData as $data)
              <tr>
              <td>{{ json_encode($data[7],TRUE)}}</td>
              <td>{{ json_encode($data[9],TRUE)}}</td>
              <td>
              <?php //dd($data[3]) ?>
                @if($data[3] == "redio")
              {{ json_encode($data[1],TRUE)}}
              @else
                  <ul>
                  @foreach ($data[1] as $answer)
                  <li>{{json_encode($answer,TRUE)}}</li>
                  @endforeach
                  </ul>
                  @endif
              </td>
              <td>{{ json_encode($data[5],TRUE)}}</td>
              </tr>
              @endforeach
            </tbody>
        </table>

    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>