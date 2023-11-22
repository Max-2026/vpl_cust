@extends('layout')

@section('content')


<body>
<div class="container" style="margin-left:4%;margin-top:2%;">

<div class="mb-3">
<label for="message" class="form-label">Make A Wish</label>
<textarea style=" resize: none;" class="form-control" id="message" name="message" rows="3"></textarea>
</div>
<button type="submit" style = "background-color:#0088cc;color:white" >Send</button>
</form>
</div>
</body>
<br>
<br>
<br>
<br>
<br>
@endsection