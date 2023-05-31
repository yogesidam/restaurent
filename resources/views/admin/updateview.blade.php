<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->

    {{-- include css here --}}
    @include('admin.admincss')
    <style>
        .container{position: relative;left: 250px;top: 50px;margin-bottom: 200px}
        .btn{position: absolute;left: 250px;}
    </style>
</head>

<body>

    <div class="container-scroller">

    {{-- include navbar here --}}
    @include('admin.navbar')

    <div class="container">
        <form action="{{ url('/upload',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6 type-center">
                <label for="inputtitle"><h4>Title</h4></label>
                <input type="text" id="inputtitle" name="title" class="form-control text-white" value="{{$data->title}}">
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputtprice"><h4>Price</h4></label>
                <input type="number" id="inputtprice" name="price" class="form-control text-white" value="{{$data->price}}">
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputimage"><h4>Old Image</h4></label>
                <center><img src="/FoodImages/{{$data->image}}" width="200px" alt="no image for you"></center>
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputimage"><h4>Image</h4></label>
                <input type="file" id="inputimage" name="image" class="form-control text-white" >
            </div>
            <div class="form-group col-md-6 type-center">
                <label for="inputtitle"><h4>Description</h4></label>
                <textarea id="inputtitle" rows="5" name="description" class="form-control text-white">{{{$data->description}}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary rounded"> Submit</button>
        </form>
    </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->
</body>

</html>
