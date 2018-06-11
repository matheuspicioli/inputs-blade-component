<div class="row">
	<div class="col-md-12">
		<div class="box box-primary box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">@if( isset($model->endereco_principal) ) Endereço principal @else Endereço @endif</h3>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group @if($errors->has('cep')) has-error @endif">
							@component('formularios.String',[
								'nome'		=> 'cep',
								'id'		=> 'CEP',
								'texto'		=> 'CEP',
								'titulo'	=> 'CEP',
								'valor'		=> old('cep') ?? $model->endereco->cep ?? $model->endereco_principal->cep ?? '',
								'tabindex'	=> $prox_tab,
								'atributos'	=> 'data-mask=99999-999'
							])@endcomponent
							@if( $errors->has('cep') )
								<span style="color: #f56954">{{ $errors->get('cep')[0] }}</span>
							@endif
						</div>
					</div>

					<div class="col-md-8">
						<div class="form-group @if($errors->has('logradouro')) has-error @endif">
							@component('formularios.String',[
								'nome'		=> 'logradouro',
								'id'		=> 'Logradouro',
								'texto'		=> 'Logradouro',
								'titulo'	=> 'Logradouro',
								'valor'		=> old('logradouro') ?? $model->endereco->logradouro ?? $model->endereco_principal->logradouro ?? '',
								'tabindex'	=> $prox_tab+=1
							])@endcomponent
							@if( $errors->has('logradouro') )
								<span style="color: #f56954">{{ $errors->get('logradouro')[0] }}</span>
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div class="form-group @if($errors->has('numero')) has-error @endif">
							@component('formularios.String',[
								'nome'		=> 'numero',
								'id'		=> 'Numero',
								'texto'		=> 'Número',
								'titulo'	=> 'Número',
								'valor'		=> old('numero') ?? $model->endereco->numero ?? $model->endereco_principal->numero ?? '',
								'tabindex'	=> $prox_tab+=1
							])@endcomponent
							@if( $errors->has('numero') )
								<span style="color: #f56954">{{ $errors->get('numero')[0] }}</span>
							@endif
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-group @if($errors->has('complemento')) has-error @endif">
							@component('formularios.String',[
								'nome'		=> 'complemento',
								'id'		=> 'Complemento',
								'texto'		=> 'Complemento',
								'titulo'	=> 'Complemento',
								'valor'		=> old('complemento') ?? $model->endereco->complemento ?? $model->endereco_principal->complemento ?? '',
								'tabindex'	=> $prox_tab+=1
							])@endcomponent
							@if( $errors->has('complemento') )
								<span style="color: #f56954">{{ $errors->get('complemento')[0] }}</span>
							@endif
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group @if($errors->has('bairro')) has-error @endif">
							@component('formularios.String',[
								'nome'		=> 'bairro',
								'id'		=> 'Bairro',
								'texto'		=> 'Bairro',
								'titulo'	=> 'Bairro',
								'valor'		=> old('bairro') ?? $model->endereco->bairro ?? $model->endereco_principal->bairro ?? '',
								'tabindex'	=> $prox_tab+=1
							])@endcomponent
							@if( $errors->has('bairro') )
								<span style="color: #f56954">{{ $errors->get('bairro')[0] }}</span>
							@endif
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group @if($errors->has('cidade_id')) has-error @endif">
							@component('formularios.Select',[
								'id'		=> 'CidadeCOD',
								'nome'		=> 'cidade_id',
								'texto'		=> 'Cidade',
								'classes'	=> 'select2',
								'tabindex'	=> $prox_tab+=1
							])
								<option selected disabled>-------Selecione uma cidade-------</option>
								@foreach($cidades as $cidade)
									@if( isset($model) )
										@if( isset($model->endereco) )
											<option value="{{ $cidade->id }}" {{ old('cidade_id') == $cidade->id ? 'selected' : ($cidade->id == $model->endereco->cidade->id ? 'selected' : '') }}>{{ $cidade->descricao }}
												- {{ $cidade->estado->descricao }}</option>
										@else
											<option value="{{ $cidade->id }}" {{ old('cidade_id') == $cidade->id ? 'selected' : ($cidade->id == $model->endereco_principal->cidade->id ? 'selected' : '') }}>{{ $cidade->descricao }}
												- {{ $cidade->estado->descricao }}</option>
										@endif
									@else
										<option value="{{ $cidade->id }}" {{ old('cidade_id') == $cidade->id ? 'selected' : '' }}>{{ $cidade->descricao }}
											- {{ $cidade->estado->descricao }}</option>
									@endif
								@endforeach
							@endcomponent
							@if( $errors->has('cidade_id') )
								<span style="color: #f56954">{{ $errors->get('cidade_id')[0] }}</span>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>