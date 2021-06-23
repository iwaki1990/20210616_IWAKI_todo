
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
              <form action="/todo/delete" method="post">
                <input type="hidden" name="_token" value="7">                
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
            
            </td>