<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    @include('admin.admincss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')

        <div class="container text-center" style="width:900px; margin:50px">
            <table class="table datatable">
                <thead style="background-color: rgb(201, 48, 48)">
                    <tr>
                        <th style="padding: 30px" class="text-warning">Name</th>
                        <th style="padding: 30px" class="text-warning">Phone</th>
                        <th style="padding: 30px" class="text-warning">Address</th>
                        <th style="padding: 30px" class="text-warning">Foodname</th>
                        <th style="padding: 30px" class="text-warning">Price</th>
                        <th style="padding: 30px" class="text-warning">Quantity</th>
                        <th style="padding: 30px" class="text-warning">Total price</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @include('admin.adminscript')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('.datatable').DataTable({
                processing: true,
                // serverSide: true,
                ajax: {
                    url: "{{ url('/orderlist') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: "json",
                },
                columns: [
                    { data: 'name', name: 'name'},
                    { data: 'phone', name: 'phone'},
                    { data: 'address', name: 'address'},
                    { data: 'foodname', name: 'foodname'},
                    { data: 'price', name: 'price'},
                    { data: 'quantity', name: 'quantity'},
                    { data: 'total', name: 'total'},
                ],
            });
        });
    </script>
   </body>
</html>
