<x-app-layout>
  
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="store">
            <h2>Store</h2>
            <input type="text" name="post[store]" placeholder="Edit store" >
            
          </div>
          <div class="region">
            <h2>Region</h2>
            <select name="post[region_id]">
              @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->region }}</option>
              @endforeach
            </select>
            
          </div>
          <div class="category">
            <h2>Category</h2>
            <select name="post[category_id]">
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
              @endforeach
            </select>
          </div>
          <div class="body">
            <h2>Comment</h2>
            <input type="textarea" name="post[body]" placeholder="Edit comment" >
             
          </div>
          <input type="submit" value="Post">
        </form>
</x-app-layout>