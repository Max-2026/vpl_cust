@extends('layout')

@section('content')


<body>
<div class="container" style="margin-left:4%;margin-top:2%;">

<div class="mb-3">
<label for="message" class="form-label">Make A wish</label>
<textarea style=" resize: none; width:50%;" class="form-control" id="message" name="message" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-default" style = "background-color:#0088cc;color:white" >Send</button>
</form>
</div>
</body>
<br>
<br>
<br>
<br>
<br>
@endsection