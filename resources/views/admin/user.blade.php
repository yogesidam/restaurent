<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            
            position: relative;
            left: 100px;
            top: 100px;
            text-align: center;
            font-weight: bold;
            border: 1px solid rgb(194, 77, 77);
            width: 900px;
        }
        thead{
            font-size: 20px;
            font-family:Times-New-Roman;
        }
        #bt{background-color: brown;padding: 10px;border-radius: 40px;color: yellow;font-weight: bold;}

    </style>

    @include('admin.admincss')
</head>
<body>
    <div class="container-scroller">

        @include('admin.navbar')

        <div style="margin-bottom: 100px;">
            <table >
                <thead style="background-color: brown;color:yellow;font-weidth: bold;">
                    <tr>
                        <th style="padding: 20px">Name</th>
                        <th style="padding: 20px">Email</th>
                        <th style="padding: 20px">Action</th>
                    </tr>
                </thead>
                <tbody style="background-color: rgb(47, 47, 47)">
                    @foreach ($data as $d)
                        <tr>
                            <td style="padding: 10px">{{ $d->name }}</td>
                            <td style="padding: 10px">{{ $d->email }}</td>

                            @if ($d->usertype == '0')
                                <td style="padding: 10px"><a href="{{url('/delete/user',$d->id)}}">
                                    <button id="bt">Delete</button></a>
                                </td>

                            @else
                                <td style="padding: 10px;color: yellow"><a >Notallowed</a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </center>
        </div>

    </div>
    @include('admin.adminscript')
</body>

</html>

