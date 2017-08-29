@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        {!! Table::withContents($users->items())->striped() !!}
    </div>
    <div class="row text-center">
    	{!! $users->links() !!}
    </div>
</div>
@endsection
