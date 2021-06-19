<x-admin.layout>
    
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
              <h2>Update Product {{$product->product_name}}</h2>
    <form action="/admin/products/store" method="post">
        @csrf
        {{-- <x-forms.input type="text"  name = "full_name" /> --}}
        Product Name: <input type="text" name="product_name" id="" class="form-control" value="{{$product->product_name}}"><br>
        Product Description: <textarea name="product_desc" id="" cols="30" rows="10" class="form-control">{{$product->product_desc}}</textarea><br><br>
        Price: <input type=" text" name="price" id="" class="form-control" value="{{$product->price}}"><br><br>
        Categories: <x-forms.select name="category_id" class="form-control">
            <option value="0" >Select a category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" {{ $category->id == $product->category_id ? "selected" : ''}}  >{{$category->category_name}}</option>
                {{-- @if($category->id == $product->category_id) selected  @endif --}}
            @endforeach
        </x-forms.select>
    
    
        {{-- <select name="category_id" id="">
            <option value="0">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select><br><br> --}}
        <br>
       <center> <button type="submit" value="Save"  class="btn btn-az-secondary ">submit</button></center>
        
    </form>
          </div>
        </div>
    </div>
</x-admin.layout>
