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
            <input class="button-add" type="submit" value="追加" />
          </form>
        <table>
        @csrf
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
                    <tr>
            <td>
              2021-05-27 13:28:17
            <form action="/todo/create" method="post">
              <input type="hidden" name="_token" value="">              
              <td>
                <input type="text" class="input-update" value="aaaa" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="/todo/create" method="post">
                <input type="hidden" name="_token" value="">                
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2021-05-27 15:22:00
            </td>
            <form action="/todo/create" method="post">
              <input type="hidden" name="_token" value="">              <td>
                <input type="text" class="input-update" value="dadada" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="/todo/create" method="post">
                <input type="hidden" name="_token" value="">                
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2021-05-30 11:01:19
            </td>
            <form action="/todo/create" method="post">
              <input type="hidden" name="_token" value="">              <td>
                <input type="text" class="input-update" value="鼻くそ" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="/todo/create" method="post">
                <input type="hidden" name="_token" value="">                
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                  </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>