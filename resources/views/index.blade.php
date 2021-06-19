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
  protected $guarded = array('id');
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      <div class="container mt-3">
        <div class="container mb-4">
            {!! Form::open(['route' => 'todos.store', 'method' => 'POST']) !!}
            {{ csrf_field() }}
                <div class="row">
                    {{ Form::text('newTodo', null, ['class' => 'form-control col-8 mr-5']) }}
                    {{ Form::date('newDeadline', null, ['class' => 'mr-5']) }}
                    {{ Form::submit('新規追加', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
            <div class="todo">
        <form action="/todo/create" method="post" class="flex between mb-30">
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
            </td>
            <form action="http://young-woodland-12937.herokuapp.com/todo/update?id=1854" method="post">
              <input type="hidden" name="_token" value="zmRyXQ9PNHsVKI9xj4gbDCJ1KFz9JbNlrRc1MXi7">              <td>
                <input type="text" class="input-update" value="aaaa" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://young-woodland-12937.herokuapp.com/todo/delete?id=1854" method="post">
                <input type="hidden" name="_token" value="zmRyXQ9PNHsVKI9xj4gbDCJ1KFz9JbNlrRc1MXi7">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2021-05-27 15:22:00
            </td>
            <form action="http://young-woodland-12937.herokuapp.com/todo/update?id=1874" method="post">
              <input type="hidden" name="_token" value="zmRyXQ9PNHsVKI9xj4gbDCJ1KFz9JbNlrRc1MXi7">              <td>
                <input type="text" class="input-update" value="dadada" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://young-woodland-12937.herokuapp.com/todo/delete?id=1874" method="post">
                <input type="hidden" name="_token" value="zmRyXQ9PNHsVKI9xj4gbDCJ1KFz9JbNlrRc1MXi7">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2021-05-30 11:01:19
            </td>
            <form action="http://young-woodland-12937.herokuapp.com/todo/update?id=1894" method="post">
              <input type="hidden" name="_token" value="zmRyXQ9PNHsVKI9xj4gbDCJ1KFz9JbNlrRc1MXi7">              <td>
                <input type="text" class="input-update" value="鼻くそ" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://young-woodland-12937.herokuapp.com/todo/delete?id=1894" method="post">
                <input type="hidden" name="_token" value="zmRyXQ9PNHsVKI9xj4gbDCJ1KFz9JbNlrRc1MXi7">                <button class="button-delete">削除</button>
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