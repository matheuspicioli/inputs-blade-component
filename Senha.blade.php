<label for="{{ $id }}" class="control-label">{{ $texto }}</label>
<input type="password" class="form-control {{ $classes }}" name="{{ $nome }}" id="{{ $id }}"
	   value="{{ $valor ?? null }}" tabindex="{{ $tabindex }}" {{ $atributos }} />