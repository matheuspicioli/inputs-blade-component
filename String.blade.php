<label for="{{ $id }}" class="control-label {{ $classes_label ?? null }}">{{ $texto }}</label>
<input type="text" class="form-control {{ $classes ?? null }}" name="{{ $nome }}" title="{{ $titulo ?? $texto ?? null }}"
	   value="{{ $valor ?? null }}" id="{{ $id }}" tabindex="{{ $tabindex ?? null }}" {{ $atributos ?? null }} />