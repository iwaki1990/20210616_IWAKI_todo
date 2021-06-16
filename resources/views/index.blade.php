@extends('layouts.hello')
<style>
   th {
      background-color: black;
      color: white;
      padding: 5px 30px;
    }
    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
</style>
@section('title', 'index.blade.php')


@section('content')
<table>
  <tr>
    <th>id</th>
    <th>content</th>
    <th>更新</tr>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->content}}
    </td>
    <td>
      {{$item->age}}
    </td>
  </tr>
  @endforeach
</table>
@endsection