<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Data Mobil</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04aa6d;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1 class="text-center mb-5 mt-5">Data Mobil</h1>
        <table id="customers">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Merek Mobil</th>
                <th scope="col">Tipe Mobil</th>
                <th scope="col">Warna</th>
                <th scope="col">Harga Sewa/Hari</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td scope="row">{{$loop -> iteration}}</td>
                <td>{{$item->merekmobil}}</td>
                <td>{{$item->type_id}}</td>
                <td>{{$item->warna}}</td>
                <td>{{$item->harga}}</td>
            </tr>
            @endforeach
        </table>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
