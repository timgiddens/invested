@if($stock_price == "The symbol does not seem to exist. Please check your spelling")
<table>
	<tbody>
		<tr>
			<td><span id="ticker-error">Something went wrong. We're taking a look at what happened.</span></td>
		</tr>
	</tbody>
</table>
@else
<table>
	<tbody>
		<tr>
			<td class="text-right">{{ $ticker }}</td>
			<td class="text-right">${{ $stock_price["05. price"] }}</td>
		</tr>
		<tr>
			<td class="text-right">Shares</td>
			<td class="text-right">{{ $shares }}</td>
		</tr>
		<tr class="total">
			<td class="text-right">Sell Price</td>
			<td class="text-right">
				${{ number_format($total,2) }}
			</td>
		</tr>
		<tr class="cash-remaining">
			<td class="text-right">Cash Remaining</td>
			<td class="text-right">
				${{ number_format($cash_available,2) }}
			</td>
		</tr>
	</tbody>
</table>
@endif
