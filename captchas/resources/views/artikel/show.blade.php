@extends('Layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">List Artikel</div>

					<div class="card-body">

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">ID</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->id !!}</label>
						</div>

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">Judul</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->judul !!}</label>
						</div>

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">Isi</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->isi !!}</label>
						</div>

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">Users_Id</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->users_id !!}</label>
						</div>

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">Created_At</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->created_at !!}</label>
						</div>

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">Update_At</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->update_at !!}</label>
						</div>

						<div class="from-group row">
							<label class="col-md-4 col-from-label text-md-right">Kategori_Artikel_Id</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $artikel->kategori_artikel_id !!}</label>
						</div>

						<div class="from-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<a href="{!! route('kategori_artikel.index') !!}" class="btn btn-primary">
									Back
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

					}

