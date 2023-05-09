@if (null !== ($msg = Session::get('message')) &&
null !== ($code = Session::get('code') ))
@if (Session::get('code')== 0)
<div class="bg-success text-white text-center" style="border-radius: 10px">
@else
<div class="bg-danger text-white text-center" style="border-radius: 10px">
@endif
{{ $msg }}
</div>
@endif