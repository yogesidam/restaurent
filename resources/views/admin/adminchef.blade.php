<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- include css here --}}
    @include('admin.admincss')
    <style>
        .container{position: relative;left: 250px;top: 100px;margin-bottom: 150px}
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
        <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control text-white" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="speciality">Speaciality</label>
                <input type="text" id="speciality" class="form-control text-white" name="speciality">
            </div>
            <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="file" id="image" class="form-control text-white" name="image">
            </div><br>
            <button type="submit" class="btn btn-outline-warning rounded">Submit</button>
        </form><br><br><br>
        <table >
            <thead style="background-color: brown;color:yellow">
                <tr>
                    <th style="padding: 30px">Chef name</th>
                    <th style="padding: 30px">Speaciality</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action 2</th>
                </tr>
            </thead>
            <tbody style="background-color: rgb(47, 47, 47)">
                @foreach ($data as $d)
                <tr align="center">
                    <td style="padding: 10px">{{$d->name}}</td>
                    <td style="padding: 10px">{{$d->speciality}}</td>
                    {{-- <td><img src="{{asset('/FoodImages/'.$d->image)}}"  alt="no image"></td> --}}
                    <td style="padding: 10px"><img  width="200px" src="/ChefImages/{{$d->image}}" alt=""></td>
                    <td><a href="{{ url('/updatechef',$d->id) }}"><button id="bt">Update</button> </a></td>
                    <td><a href="{{ url('/deletechef',$d->id) }}"><button id="bt">Delete</button> </a></td>
                    
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
