<h1>Post</h1>

<form action="{{url('home/form')}}" method="post">
	<label>Name: </label>
	<input type="text" name="name" value="{{$name}}" />
	{{ csrf_field() }}

	<button type="submit">Send</button>

</form>

<p>Vaor del campo name: {{$name}}</p>