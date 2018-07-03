<label for="{{ $id }}" class="control-label {{ $classes_label ?? null }}">{{ $texto }}</label>
<input type="date" class="form-control {{ $classes ?? null }}" name="{{ $nome }}" title="{{ $titulo ?? $texto ?? null }}"
       id="{{ $id }}" value="{{ $valor ?? null }}" tabindex="{{ $tabindex }}"  {{ $atributos ?? null }} />