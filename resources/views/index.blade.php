<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
@if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
<th $guarded = array('id')>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
            <div class="todo">
            <form action="/todo/create" method="post" class="flex between mb-30">
          @csrf
            <input type="text" class="input-add" name="content">
            <input class="button-add" type="submit" value="追加" method="post" />
            </form>
            <table> 
          @csrf
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach($items as $item)
          <tr>
            <td>
             
              {{$item->updated_at}}
            </td>
            <form action="/todo/update" method="post">
            @csrf
              <td>
                <input type="text" class="input-update" value="{{$item->content}}" name="content" />
                <input type="hidden" value="{{$item->id}}" name="id">
              </td>             
              <td>
                <input class="button-update" type="submit" value="更新">
              </td>
            </form>
            
            <td>
              <form action="/todo/delete" method="post">
                <input type="hidden" name="id" value="{{$item->id}}">
                @csrf
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
          </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>