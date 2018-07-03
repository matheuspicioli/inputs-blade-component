<div class="radio">
	<label>
		<input type="radio" name="{{ $nome }}" value="{{ $valor ?? null }}" id="{{ $id }}" {{ $campo == $valor ? 'checked' : '' }} {{ $atributos ?? null }}>
			{{ $texto }}
	</label>
</div>