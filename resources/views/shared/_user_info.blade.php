<a href="{{route('users.show',[$users])}}">
  <img src="{{$users->gravatar('140')}}" alt="{{$users->name}}" class="gravatar">
</a>
<h1>{{$users->name}}</h1>