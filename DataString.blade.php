<label for="{{ $id }}" class="control-label">{{ $texto }}</label>
<input type="text" data-mask="00/00/0000" class="form-control {{ $classes ?? null }}" name="{{ $nome }}" id="{{ $id }}"
	   title="{{ $titulo ?? null }}" value="{{ $valor ?? null }}" tabindex="{{ $tabindex }}" {{ $atributos ?? null }} />