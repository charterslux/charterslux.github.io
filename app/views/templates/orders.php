<script id="ordersTemplate" type="text/x-jsrender">
{{if data}}
{{for data}}
	<tr id="order_{{:id}}" class="clickable {{:status_class}}" data-url="<?php echo $order_url?>/{{:id}}">
		<td>{{:id}}</td>
		<td>
			{{for legs tmpl="#airport_fromTemplate"/}}
		</td>
		<td>
			{{for legs tmpl="#airport_toTemplate"/}}
		</td>
		<td>
			{{for legs tmpl="#departureDateTemplate"/}}
		</td>
		<td>
			{{for legs tmpl="#departureTimeTemplate"/}}
		</td>
		<td>
			{{for legs tmpl="#passengersTemplate"/}}
		</td>
		<td>
			<div>{{:status}}</div>
		</td>
	</tr>
{{/for}}
{{else}}
<tr>
	<td colspan="6">
		<div class="no-data text-center"><?php echo trans('chunks.words.no_data')?></div>
	</td>
</tr>
{{/if}}
</script>

<script id="airport_fromTemplate" type="text/x-jsrender">
	<div>{{:airport_from.airport_name}} ({{:airport_from.iata_code}})</div>
</script>
<script id="airport_toTemplate" type="text/x-jsrender">
	<div>{{:airport_to.airport_name}}  ({{:airport_to.iata_code}})</div>
</script>
<script id="departureDateTemplate" type="text/x-jsrender">
	<div>{{:departure_date}}</div>
</script>
<script id="departureTimeTemplate" type="text/x-jsrender">
	<div>{{:time_interval}}</div>
</script>
<script id="passengersTemplate" type="text/x-jsrender">
	<div>{{:passengers}}</div>
</script>