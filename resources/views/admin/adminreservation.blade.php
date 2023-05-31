<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- include css here --}}
    @include('admin.admincss')
    <style>
        table{
            position: relative;
            left: 30px;
            top: 100px;
            border: 1px solid brown;
            width: 1000px;
            text-align: center;
            margin-bottom: 50px;
        }
        thead{
            background-color: brown;
            color: yellow;
            font-weight: bold;

        }
        tbody{
            background-color: rgb(97, 97, 97);
        }
    </style>
</head>

<body>

    <div class="container-scroller">

    {{-- include navbar here --}}
    @include('admin.navbar')

    <div >
        <table>
            <thead>
                <tr>
                    <td style="padding:20px">Name</td>
                    <td style="padding:20px">Email address</td>
                    <td style="padding:20px">Phone no.</td>
                    <td style="padding:20px">Guest no.</td>
                    <td style="padding:20px">Date</td>
                    <td style="padding:20px">Time</td>
                    <td style="padding:20px">Message</td>
                </tr>
            </thead>
            <tbody style="color: yellow">
                @foreach ($data as $d)
                    <tr>
                        <td style="padding:10px">{{$d->name}}</td>
                        <td style="padding:10px">{{$d->email}}</td>
                        <td style="padding:10px">{{$d->phone}}</td>
                        <td style="padding:10px">{{$d->guest}}</td>
                        <td style="padding:10px">{{$d->date}}</td>
                        <td style="padding:10px">{{$d->time}}</td>
                        <td style="padding:10px">{{$d->message}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->
</body>

</html>
