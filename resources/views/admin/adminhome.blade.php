<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    {{-- include css here --}}
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">

    {{-- include navbar here --}}
    @include('admin.navbar')

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
    <!-- End custom js for this page -->

             

</body>

</html>
