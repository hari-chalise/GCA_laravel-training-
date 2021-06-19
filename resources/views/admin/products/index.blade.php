
<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
    <a href="/admin/products/create">Create Product</a>
    <table width="900px" align="center">
        <tr >
            <td><b>I.D</b></td>
            <td><b>Name</b></td>
            <td><b>Description</b></td>
            <td><b>Price</b></td>
            <td><b>Category</b></td>
            <td><b>Image</b></td>
            <td><b>Actions</b></td>
        </tr>
        @foreach ($products as $product)
        <tr><td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{substr($product->product_desc,0,50)}}</td>
            <td><b>{{$product->price}}</td>
            <td>{{$product->category_name}}</td>
            <td><img src="{{ $product->image == ''? 'https://via.placeholder.com/550x750':  asset('public/images/'.$product->image)}}" height="100px" width="150px"></td>
            <td>
                <a href="/admin/products/edit/{{ $product->id }}">Edit</a> |
                <a href="#">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
          </div>
        </div>
    </div>
</x-admin.layout>


 