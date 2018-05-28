<label for="{{ $id }}" class="control-label">{{ $texto }}</label>
<input type="email" class="form-control {{ $classes }}" name="{{ $nome }}" id="{{ $id }}"
	   value="{{ $valor ?? null }}" tabindex="{{ $tabindex }}" {{ $atributos }} />