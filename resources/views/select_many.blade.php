<h2>Pet List</h2>

<table border="1">
    <tr>
        <th>名前</th>
        <th>生年月日</th>
        <th>性別</th>
    </tr>
    @foreach($pets as $pet)
    <tr>
        <td>{{$pet->name}}</td>
        <td>{{$pet->birthday}}</td>
        <td>{{$pet->gender}}</td>
    </tr>
    @endforeach
</table>