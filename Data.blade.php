<label for="{{ $id }}" class="control-label">{{ $texto }}</label>
<input type="date" class="form-control {{ $classes ?? null }}" name="{{ $nome }}" title="{{ $titulo ?? null }}"
       id="{{ $id }}" value="{{ $valor ?? null }}" tabindex="{{ $tabindex }}"  {{ $atributos ?? null }} />