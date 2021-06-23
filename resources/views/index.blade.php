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
  @foreach($items as $item)
<th $guarded = array('id')>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
            <div class="todo">
            <form action="/" method="post" class="flex between mb-30">
            <input type="text" class="input-add" name="content">
            <input class="button-add" type="submit" value="追加" />
          </form>
          @csrf
            <td>
            {{ \Carbon\Carbon::now()->format("Y年m月d日 H:i:s") }}
              {{$item->created_at}}
            </td>
            <form action="/todo/update/{{$item->id}}" method="post">
              @csrf
              <td>
                <input type="text" class="input-update" value="{{$item->content}}" name="content" />
              </td>
              <td>
                <input class="button-update" type="submit" value="更新">
              </td>
            </form>
            <td>
              <form action="/todo/delete" method="post">
                <input type="hidden" name="_token" value="削除">
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
      </div>
    </div>
  </div>
  </div>
</body>

</html>