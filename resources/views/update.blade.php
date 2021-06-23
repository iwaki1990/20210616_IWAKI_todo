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
            <table>
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name" value="{{ $form->name }}">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age" value="{{ $form->age }}">
      </td>
    </tr>
  </table>
  <button>送信</button>
</form>
@endsection