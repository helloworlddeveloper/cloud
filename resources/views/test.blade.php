<form action="{{ route('test.me') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="file" name="file" id="">

<button type="submit">Submit</button>
</form>
