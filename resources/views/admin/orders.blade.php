<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- include css here --}}
    @include('admin.admincss')
    <style>
        .container{position: relative;left: 250px;top: 50px;margin-bottom: 100px}
        .btn{position: absolute;left: 250px;font-size: 20px;font-weight: bold;color: yellow;background-color: brown}
        table{position: relative;left: -150px;width: 900px;
            border: 1px solid rgb(194, 77, 77);
            text-align: center;
        }
        #bt{background-color: brown;padding: 10px;border-radius: 40px;color: yellow;font-weight: bold;border: 1px solid yellow}
    </style>
</head>

<body>

    <div class="container-scroller">

    {{-- include navbar here --}}
    @include('admin.navbar')

    <div class="container">
        <form action="{{ url('/search') }}" method="post">
            @csrf
            <input type="text" class="text-light bg-dark" name="search">
            <button type="submit" class="btn bg-danger text-light">Search</button>
        </form><br><br>
        <table>
            <thead style="background-color: brown;color:yellow">
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Phone</th>
                    <th style="padding: 30px">Address</th>
                    <th style="padding: 30px">Foodname</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Quantity</th>
                    <th style="padding: 30px">Total price</th>
                </tr>
            </thead>
            <tbody style="background-color: rgb(47, 47, 47)">
                @foreach ($data as $d)
                    <tr>
                        <td style="padding: 10px">{{$d->name}}</td>
                        <td style="padding: 10px">{{$d->phone}}</td>
                        <td style="padding: 10px">{{$d->address}}</td>
                        <td style="padding: 10px">{{$d->foodname}}</td>
                        <td style="padding: 10px">{{$d->price}}$</td>
                        <td style="padding: 10px">{{$d->quantity}}</td>
                        <td style="padding: 10px">{{$d->price * $d->quantity}}$</td>
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
