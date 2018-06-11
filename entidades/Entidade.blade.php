	<div class="row">
		<div class="col-md-6">
			<div class="form-group @if($errors->has('tipo')) has-error @endif">
				@component('formularios.Select',[
					'id'		=> 'tipo',
					'nome'		=> 'tipo',
					'texto'		=> 'Tipo pessoa',
					'tabindex'	=> $tab += 1,
					'classes'	=> 'select2'
				])
					@if ( isset($entidade) )
						<option value="CPF" {{ old('tipo') == 'CPF' ? 'selected' : ($entidade->tipo == 'CPF' ? 'selected' : '') }}>
							CPF
						</option>
						<option value="CNPJ" {{ old('tipo') == 'CNPJ' ? 'selected' : ($entidade->tipo == 'CNPJ' ? 'selected' : '') }}>
							CNPJ
						</option>
					@else
						<option value="CPF" {{ old('tipo') == 'CPF' ? 'selected' : '' }}>
							CPF
						</option>
						<option value="CNPJ" {{ old('tipo') == 'CNPJ' ? 'selected' : '' }}>
							CNPJ
						</option>
					@endif
				@endcomponent
				@if( $errors->has('tipo') )
					<span style="color: #f56954">{{ $errors->get('tipo')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group @if($errors->has('cpf_cnpj')) has-error @endif">
				@component('formularios.String',[
					'id'		=> 'cpf_cnpj',
					'nome'		=> 'cpf_cnpj',
					'texto'		=> 'CPF/CNPJ',
					'valor'		=> old('cpf_cnpj') ?? $entidade->cpf_cnpj ?? '',
					'tabindex'	=> $tab += 1
				])@endcomponent
				@if( $errors->has('cpf_cnpj') )
					<span style="color: #f56954">{{ $errors->get('cpf_cnpj')[0] }}</span>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="form-group @if($errors->has('nome')) has-error @endif">
				@component('formularios.String',[
					'id'		=> 'nome',
					'nome'		=> 'nome',
					'texto'		=> 'Nome',
					'valor'		=> old('nome') ?? $entidade->nome ?? '',
					'tabindex'	=> $tab += 1
				])@endcomponent
				@if( $errors->has('nome') )
					<span style="color: #f56954">{{ $errors->get('nome')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group @if($errors->has('apelido')) has-error @endif">
				@component('formularios.String',[
					'id'		=> 'apelido',
					'nome'		=> 'apelido',
					'texto'		=> 'Apelido',
					'valor'		=> old('apelido') ?? $entidade->apelido ?? '',
					'tabindex'	=> $tab += 1
				])@endcomponent
				@if( $errors->has('apelido') )
					<span style="color: #f56954">{{ $errors->get('apelido')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group @if($errors->has('rg_ie')) has-error @endif">
				@component('formularios.String',[
					'id'		=> 'rg_ie',
					'nome'		=> 'rg_ie',
					'texto'		=> 'RGIE',
					'valor'		=> old('rg_ie') ?? $entidade->rg_ie ?? '',
					'tabindex'	=> $tab += 1
				])@endcomponent
				@if( $errors->has('rg_ie') )
					<span style="color: #f56954">{{ $errors->get('rg_ie')[0] }}</span>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="form-group @if($errors->has('fantasia')) has-error @endif">
				@component('formularios.String',[
					'id'			=> 'fantasia',
					'nome'			=> 'fantasia',
					'texto'			=> 'Fantasia',
					'valor'			=> old('fantasia') ?? $entidade->fantasia ?? '',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cnpj',
					'classes_label'	=> 'cnpj'
				])@endcomponent
				@if( $errors->has('fantasia') )
					<span style="color: #f56954">{{ $errors->get('fantasia')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group @if($errors->has('inscricao_municipal')) has-error @endif">
				@component('formularios.String',[
					'id'			=> 'inscricao_municipal',
					'nome'			=> 'inscricao_municipal',
					'texto'			=> 'Inscrição municipal',
					'valor'			=> old('inscricao_municipal') ?? $entidade->inscricao_municipal ?? '',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cnpj',
					'classes_label'	=> 'cnpj'
				])@endcomponent
				@if( $errors->has('inscricao_municipal') )
					<span style="color: #f56954">{{ $errors->get('inscricao_municipal')[0] }}</span>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="form-group @if($errors->has('ramo_atividade')) has-error @endif">
				@component('formularios.String',[
					'id'			=> 'ramo_atividade',
					'nome'			=> 'ramo_atividade',
					'texto'			=> 'Ramo atividade',
					'valor'			=> old('ramo_atividade') ?? $entidade->ramo_atividade ?? '',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cnpj',
					'classes_label'	=> 'cnpj'
				])@endcomponent
				@if( $errors->has('ramo_atividade') )
					<span style="color: #f56954">{{ $errors->get('ramo_atividade')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group @if($errors->has('data_abertura')) has-error @endif">
				@component('formularios.Data',[
					'id'			=> 'data_abertura',
					'nome'			=> 'data_abertura',
					'texto'			=> 'Data abertura',
					'valor'			=> old('data_abertura') ?? ( isset($entidade->ramo_atividade) ? $entidade->data_abertura->format('Y-m-d') : ''),
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cnpj',
					'classes_label'	=> 'cnpj'
				])@endcomponent
				@if( $errors->has('data_abertura') )
					<span style="color: #f56954">{{ $errors->get('data_abertura')[0] }}</span>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group @if($errors->has('nome_mae')) has-error @endif">
				@component('formularios.String',[
					'id'			=> 'nome_mae',
					'nome'			=> 'nome_mae',
					'texto'			=> 'Nome da mãe',
					'valor'			=> old('nome_mae') ?? $entidade->nome_mae ?? '',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cpf',
					'classes_label'	=> 'cpf'
				])@endcomponent
				@if( $errors->has('nome_mae') )
					<span style="color: #f56954">{{ $errors->get('nome_mae')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group @if($errors->has('estado_civil_id')) has-error @endif">
				@component('formularios.Select',[
					'id'			=> 'estado_civil_id',
					'nome'			=> 'estado_civil_id',
					'texto'			=> 'Estado civil',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cpf',
					'classes_label'	=> 'cpf',
				])
					<option value="-1" selected disabled>-----SELECIONE-----</option>
					@foreach($estados_civis as $estados_civil)
						@if( isset($entidade) )
							<option value="{{ $estados_civil->id }}" {{ old('estado_civil_id') == $estados_civil->id ? 'selected' : ($entidade->estado_civil_id == $estados_civil->id ? 'selected' : '') }}>
								{{ $estados_civil->descricao }}
							</option>
						@else
							<option value="{{ $estados_civil->id }}" {{ old('estado_civil_id') == $estados_civil->id ? 'selected' : '' }}>
								{{ $estados_civil->descricao }}
							</option>
						@endif
					@endforeach
				@endcomponent
				@if( $errors->has('estado_civil_id') )
					<span style="color: #f56954">{{ $errors->get('estado_civil_id')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group @if($errors->has('regime_casamento_id')) has-error @endif">
				@component('formularios.Select',[
					'id'			=> 'regime_casamento_id',
					'nome'			=> 'regime_casamento_id',
					'texto'			=> 'Regime casamento',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cpf',
					'classes_label'	=> 'cpf',
				])
					<option value="-1" selected disabled>-----SELECIONE-----</option>
					@foreach($regimes_casamentos as $regime_casamento)
						@if( isset($entidade) )
							<option value="{{ $regime_casamento->id }}"
									{{ old('regime_casamento_id') == $regime_casamento->id ? 'selected' : ($entidade->regime_casamento_id == $regime_casamento->id ? 'selected' : '') }}>
								{{ $regime_casamento->descricao }}</option>
						@else
							<option value="{{ $regime_casamento->id }}"
									{{ old('regime_casamento_id') == $regime_casamento->id ? 'selected' : '' }}>
								{{ $regime_casamento->descricao }}</option>
						@endif
					@endforeach
				@endcomponent
				@if( $errors->has('regime_casamento_id') )
					<span style="color: #f56954">{{ $errors->get('regime_casamento_id')[0] }}</span>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group @if($errors->has('profissao')) has-error @endif">
				@component('formularios.String',[
					'id'			=> 'profissao',
					'nome'			=> 'profissao',
					'texto'			=> 'Profissão',
					'valor'			=> old('profissao') ?? $entidade->profissao ?? '',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cpf',
					'classes_label'	=> 'cpf'
				])@endcomponent
				@if( $errors->has('profissao') )
					<span style="color: #f56954">{{ $errors->get('profissao')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group @if($errors->has('data_nascimento')) has-error @endif">
				@component('formularios.Data',[
					'id'			=> 'data_nascimento',
					'nome'			=> 'data_nascimento',
					'texto'			=> 'Data de nascimento',
					'valor'			=> old('data_nascimento') ?? (isset($entidade->data_nascimento) ? $entidade->data_nascimento->format('Y-m-d') : ''),
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cpf',
					'classes_label'	=> 'cpf'
				])@endcomponent
				@if( $errors->has('data_nascimento') )
					<span style="color: #f56954">{{ $errors->get('data_nascimento')[0] }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group @if($errors->has('nacionalidade')) has-error @endif">
				@component('formularios.String',[
					'id'			=> 'nacionalidade',
					'nome'			=> 'nacionalidade',
					'texto'			=> 'Nacionalidade',
					'valor'			=> old('nacionalidade') ?? $entidade->nacionalidade ?? '',
					'tabindex'		=> $tab += 1,
					'classes'		=> 'cpf',
					'classes_label'	=> 'cpf'
				])@endcomponent
				@if( $errors->has('nacionalidade') )
					<span style="color: #f56954">{{ $errors->get('nacionalidade')[0] }}</span>
				@endif
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group @if($errors->has('empresa')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'empresa',
						'nome'			=> 'empresa',
						'texto'			=> 'Empresa',
						'valor'			=> old('empresa') ?? $entidade->empresa ?? '',
						'tabindex'		=> $tab += 1,
						'classes'		=> 'cpf',
						'classes_label'	=> 'cpf'
					])@endcomponent
					@if( $errors->has('empresa') )
						<span style="color: #f56954">{{ $errors->get('empresa')[0] }}</span>
					@endif
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group @if($errors->has('inss')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'inss',
						'nome'			=> 'inss',
						'texto'			=> 'INSS',
						'valor'			=> old('inss') ?? $entidade->inss ?? '',
						'tabindex'		=> $tab += 1,
						'classes'		=> 'cpf',
						'classes_label'	=> 'cpf'
					])@endcomponent
					@if( $errors->has('inss') )
						<span style="color: #f56954">{{ $errors->get('inss')[0] }}</span>
					@endif
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group @if($errors->has('dependentes')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'dependentes',
						'nome'			=> 'dependentes',
						'texto'			=> 'Dependentes',
						'valor'			=> old('dependentes') ?? $entidade->dependentes ?? '',
						'tabindex'		=> $tab += 1,
						'classes'		=> 'cpf',
						'classes_label'	=> 'cpf'
					])@endcomponent
					@if( $errors->has('dependentes') )
						<span style="color: #f56954">{{ $errors->get('dependentes')[0] }}</span>
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group @if($errors->has('telefone_principal')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'telefone_principal',
						'nome'			=> 'telefone_principal',
						'texto'			=> 'Telefone principal',
						'valor'			=> old('telefone_principal') ?? $entidade->telefone_principal ?? '',
						'tabindex'		=> $tab += 1,
						'atributos'		=> 'data-mask=(99)9999-9999'
					])@endcomponent
					@if( $errors->has('telefone_principal') )
						<span style="color: #f56954">{{ $errors->get('telefone_principal')[0] }}</span>
					@endif
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group @if($errors->has('telefone_comercial')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'telefone_comercial',
						'nome'			=> 'telefone_comercial',
						'texto'			=> 'Telefone comercial',
						'valor'			=> old('telefone_comercial') ?? $entidade->telefone_comercial ?? '',
						'tabindex'		=> $tab += 1,
						'atributos'		=> 'data-mask=(99)9999-9999'
					])@endcomponent
					@if( $errors->has('telefone_comercial') )
						<span style="color: #f56954">{{ $errors->get('telefone_comercial')[0] }}</span>
					@endif
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group @if($errors->has('celular_1')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'celular_1',
						'nome'			=> 'celular_1',
						'texto'			=> 'Celular 1',
						'valor'			=> old('celular_1') ?? $entidade->celular_1 ?? '',
						'tabindex'		=> $tab += 1,
						'atributos'		=> 'data-mask=(99)99999-9999'
					])@endcomponent
					@if( $errors->has('celular_1') )
						<span style="color: #f56954">{{ $errors->get('celular_1')[0] }}</span>
					@endif
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group @if( $errors->has('celular_2') ) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'celular_2',
						'nome'			=> 'celular_2',
						'texto'			=> 'Celular 2',
						'valor'			=> old('celular_2') ?? $entidade->celular_2 ?? '',
						'tabindex'		=> $tab += 1,
						'atributos'		=> 'data-mask=(99)99999-9999'
					])@endcomponent
					@if( $errors->has('celular_2') )
						<span style="color: #f56954">{{ $errors->get('celular_2')[0] }}</span>
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group @if($errors->has('site')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'site',
						'nome'			=> 'site',
						'texto'			=> 'Site',
						'valor'			=> old('site') ?? $entidade->site ?? '',
						'tabindex'		=> $tab += 1
					])@endcomponent
					@if( $errors->has('site') )
						<span style="color: #f56954">{{ $errors->get('site')[0] }}</span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group @if($errors->has('email')) has-error @endif">
					@component('formularios.String',[
						'id'			=> 'email',
						'nome'			=> 'email',
						'texto'			=> 'E-mail',
						'valor'			=> old('email') ?? $entidade->email ?? '',
						'tabindex'		=> $tab += 1
					])@endcomponent
					@if( $errors->has('email') )
						<span style="color: #f56954">{{ $errors->get('email')[0] }}</span>
					@endif
				</div>
			</div>
		</div>
		@component('formularios.enderecos.Endereco',[
			'model'     => $entidade ?? null,
			'cidades'   => $cidades,
			'prox_tab'	=> $tab
		])@endcomponent
		{{ $endereco_cobranca ?? null }}
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					@component('formularios.Botao',[
						'classes' 	=> 'btn-info',
						'icone'		=> 'fa fa-save',
						'id'		=> 'salvar',
						'texto'		=> 'Salvar'
					])@endcomponent
					@component('formularios.Botao',[
						'classes' 	=> 'btn-danger',
						'icone'		=> 'fa fa-trash',
						'texto'		=> 'Excluir',
						'target'	=> '#modal-excluir',
						'toggle'	=> 'modal',
						'atributos'	=> 'type=button'
					])@endcomponent
				</div>
			</div>
		</div>