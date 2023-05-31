<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- include css here --}}
    @include('admin.admincss')
    <title>Food Menu</title>
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
        <form action="{{ url('/upload/food') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6 type-center">
                <label for="inputtitle"><h4>Title</h4></label>
                <input type="text" id="inputtitle" name="title" class="form-control text-white" placeholder="Write a title">
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputtprice"><h4>Price</h4></label>
                <input type="number" id="inputtprice" name="price" class="form-control text-white" placeholder="Enter a title">
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputimage"><h4>Image</h4></label>
                <input type="file" id="inputimage" name="image" class="form-control text-white" >
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputtitle"><h4>Description</h4></label>
                <textarea id="inputtitle" rows="5" name="description" class="form-control text-white"></textarea>
            </div><br>
            <button type="submit" class="btn btn-outline-warning rounded"> Submit</button>
        </form><br><br><br><br><br>
        <table >
            <thead style="background-color: brown;color:yellow">
                <tr>
                    <th style="padding: 30px">Food name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action 2</th>
                </tr>
            </thead>
            <tbody style="background-color: rgb(47, 47, 47)">
                @foreach ($data as $d)
                <tr>
                    <td style="padding: 10px">{{$d->title}}</td>
                    <td style="padding: 10px">{{$d->price}}</td>
                    <td style="padding: 10px">{{$d->description}}</td>
                    {{-- <td><img src="{{asset('/FoodImages/'.$d->image)}}"  alt="no image"></td> --}}
                    <td style="padding: 10px"><img  width="200px" src="/FoodImages/{{$d->image}}" alt=""></td>
                    <td><a href="{{ url('/deletemenu',$d->id) }}"><button id="bt">Delete</button> </a></td>
                    <td><a href="{{ url('/updatemenu',$d->id) }}"><button id="bt">Update</button> </a></td>
                    
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
