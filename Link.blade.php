<a href="{{ $link }}" class="{{ $classes ?? null }}" {{ $atributos ?? null }}>
	@if( isset($texto) && isset($icone) )
		<i class="{{ $icone }}"></i> {{ $texto }}
	@elseif( isset($texto) && !isset($icone) )
		{{ $texto }}
	@elseif( isset($icone) && !isset($texto) )
		<i class="{{ $icone }}"></i>
	@endif
</a>