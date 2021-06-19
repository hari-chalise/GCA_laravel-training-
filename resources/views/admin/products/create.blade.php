<x-admin.layout>
    
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>  
                      @endforeach
                  </ul>
              </div>   
              @endif

              <h2>Create Product</h2>
    <form action="/admin/products/store" method="post" enctype="multipart/form-data">
        @csrf
        <x-forms.input type="text"  name = "full_name" />
        Product Name: <input type="text" name="product_name" id="" class="form-control" value="{{old('product_name')}}"
        @error('product_name')
         style="border-color: red;" 
        @enderror
        >
        @error('product_name')
         <div class="alert alert-danger">{{ $message}}</div>   
        @enderror
        <br>
        Product Description: <textarea name="product_desc" id="" cols="30" rows="10" class="form-control">{{old('product_desc')}}</textarea><br><br>
        Price: <input type=" text" name="price" id="" class="form-control"  value="{{old('price')}}"><br><br>
        Categories: <x-forms.select name="category_id" class="form-control">
            <option value="0" >Select a category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" {{ $category->id == old('category_id') ? "selected": '' }}>{{$category->category_name}}</option>
            @endforeach
        </x-forms.select>
    <br>

       Chose Image : <input type="file" name="image_upload" id=""> 
    
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
