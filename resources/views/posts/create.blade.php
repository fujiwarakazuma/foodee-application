<x-app-layout>
  
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="store">
            <h2>Store</h2>
            <input type="text" name="post[store]" placeholder="Edit store" >
            
          </div>
          <!--<div class="region">-->
          <!--  <h2>Region</h2>-->
          <!--  <input type="text" name="post[region]" placeholder="Edit region" >-->
            
          <!--</div>-->
          <!--<div class="category">-->
          <!--  <h2>Category</h2>-->
          <!--  <input type="text" name="post[category]" placeholder="Edit category" >-->
            
          <!--</div>-->
          <div class="body">
            <h2>Comment</h2>
            <input type="textarea" name="post[body]" placeholder="Edit comment" >
             
          </div>
          <input type="submit" value="Post">
        </form>
</x-app-layout>