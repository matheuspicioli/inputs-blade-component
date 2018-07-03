<label for="{{ $id }}" class="control-label">{{ $texto }}</label>
<input type="email" class="form-control {{ $classes ?? null }}" name="{{ $nome }}" id="{{ $id }}" title="{{ $titulo ?? $texto ?? '' }}"
	   value="{{ $valor ?? null }}" tabindex="{{ $tabindex }}" {{ $atributos ?? null }} />