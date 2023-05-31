<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
       <base href="/public">
    {{-- include css here --}}
    @include('admin.admincss')
    <style>
        .container{position: relative;left: 250px;top: 100px;margin-bottom: 150px}
        .btn{position: absolute;left: 250px;font-size: 20px;font-weight: bold}
        table{position: relative;left: -150px;width: 900px;
            border: 1px solid rgb(194, 77, 77);
            text-align: center;
        }
        #bt{background-color: brown;padding: 10px;border-radius: 40px;color: yellow;font-weight: bold}
    </style>
</head>

<body>

    <div class="container-scroller">

    {{-- include navbar here --}}
    @include('admin.navbar')

     <div class="container">
        <form action="{{ url('/updatefoodchef',$data->id) }}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="form-group col-md-6">
            <label for="name">Chef Name:</label>
            <input type="text" id="name" class="form-control text-white" name="name">
           </div>
           <div class="form-group col-md-6">
            <label for="speciality">Speaciality:</label>
            <input type="text" id="speciality" class="form-control text-white" name="speciality">
           </div>
           <div class="form-group col-md-6" >
            <label for="name" >old Image:</label>
            <img src="/ChefImages/{{$data->image}}" height="200px" width="200px" alt="" >
           </div>
           <div class="form-group col-md-6">
            <label for="image">New Image:</label>
            <input type="file" id="image" class="form-control text-white" name="image">
           </div><br>
           <button type="submit" class="btn btn-danger text-warning rounded ">Submit</button>
        </form>
     </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->
</body>

</html>
