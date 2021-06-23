@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
            <td>
            <form action="/todo/update" method="post">
              <input type="hidden" name="_token" value="">              
              <td>
                <input type="text" class="input-update" value="aaaa" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>