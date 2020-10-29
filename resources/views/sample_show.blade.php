<h2>Pet List</h2>

<form method="POST" action="">
  @csrf 
  <p>
    名前: <input type="text" name="name" value="{{$pet->name}}">
  </p>
  <p>
    生年月日: <input type="text" name="name" value="{{$pet->birthday}}">
  </p>
  <p>
    性別: <input type="text" name="name" value="{{$pet->gender}}">
  </p>
  <p>
    作成日時: <input type="text" name="name" value="{{$pet->created_at}}">
  </p>
  <p>
    更新日時: <input type="text" name="name" value="{{$pet->updated_at}}">
  </p>
  <input type="submit" name="update" value="更新">
</form>