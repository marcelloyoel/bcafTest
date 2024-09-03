@extends('template.auth.bodyPages')
@section('sidebar')
    @include('template.auth.sidebar')
@endsection
@section('container')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Post</h6>
    </div>
    <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="title"><strong>Judul Berita</strong></label>
                    <input placeholder="Buatlah judul beritamu disini" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" name="title" required autofocus>
                    @error('title')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="slug"><strong>Slug</strong></label>
                    <input disabled type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" name="slug" required autofocus>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="excerpt"><strong>Ringkasan / Sinopsis</strong></label>
                    <input placeholder="Buatlah ringkasan dari tulisanmu disini" type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" value="{{ old('excerpt') }}" excerpt="excerpt" required>
                    @error('excerpt')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="selectMultipleStatus"><strong>Genre / Tag</strong></label>
                    <select name="selectMultipleStatus" multiple class="form-control selectpicker" id="selectMultipleStatus"
                        data-live-search="true" required>
                        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error('selectMultipleStatus')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" id="submitBtn" class="btn btn-primary my-3">Create User</button>
        </div>
    </form>
</div>
@endsection
