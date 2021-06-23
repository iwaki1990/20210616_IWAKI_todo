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
            {{ \Carbon\Carbon::now()->format("Y年m月d日 H:i:s") }}
            <form action="/todo/create" method="post">
              <input type="hidden" name="_token" value="">              
              <td>
                <input type="text" class="input-update" value="aaaa" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>