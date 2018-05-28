<label for="{{ $id }}" class="control-label">{{ $texto }}</label>
<select name="{{ $nome }}" class="form-control {{ $classes ?? null }}" id="{{ $id }}" tabindex="{{ $tabindex }}" {{ $atributos ?? null }}>
	{{ $slot }}
</select>