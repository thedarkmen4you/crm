@extends('layouts.app')
@section('title', 'Contacts')

@section('style-text')
	.clickable-row{
		cursor: pointer;
	}
@endsection

@section('content')
<div class="container">
	@if (count($contacts) > 0)
		<div class="panel-body">
			<button id="" name="" class="btn btn-primary" onclick="window.document.location = '/contacts/new'">New Contact</button>
			<table class="table table-striped task-table">

				<!-- Table Headings -->
				<thead>
					<th>Contacts</th>
					<th>&nbsp;</th>
				</thead>

				<!-- Table Body -->
				<tbody>
					@foreach ($contacts as $contact)
						<tr class='clickable-row' data-href='/contacts/{{ $contact->id }}'>
							<td width="64px">
								<!-- Image -->
								<img class="media-object" alt="" src="">
							</td>
							<!-- Task Name -->
							<td class="table-text">
								<div>{{ $contact->firs_name }} {{ $contact->last_name }}</div>
								<div><small>{{ $contact->email1 }}</small></div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endif
</div>
@endsection

@section('JavaScript')
	<script>
		jQuery(document).ready(function($) {
		    $(".clickable-row").click(function() {
		        window.document.location = $(this).data("href");
		    });
		});
	</script>
@endsection