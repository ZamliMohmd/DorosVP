<form method="post" action="{{route('teacher_installments_payments')}}">
    {{csrf_field()}}
    <button type="submit">pay</button>
</form>

