@extends('layouts.admin.app')

@section('content')
@include('partials.alert')
<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Message</li>
    </ol>
</div>
<!-- Page header end -->

{{-- Main Container Start --}}
<div class="main-container">
    <div class="row gutters">
        <div class="col">
            <div class="table-container">
                <div class="t-header bg-primary text-light">
                    Message List
                </div>
                <div class="table-responsive">
                    <div class="row my-3 justify-content-end message-top">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#trashMessageModal">
                                <i class="fas fa-trash"></i> Sampah
                            </button>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 col-8">
                            <form action="{{ route('admin.message.search') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request('search') }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @foreach ($messages as $message)
                            <a href="{{ route('admin.message.show', $message->id) }}">
                                <div class="row message-list {{ (!$message->read) ? 'message-active' : ''}} position-relative">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <p>{{ $message->name }}</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <p>{{ $message->subject }}</p>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                        <p>{{ date('M j, Y', strtotime($message->created_at)) }}</p>
                                    </div>
                                    <div class="form-del-message col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">
                                        <form action="{{ route('admin.message.destroy', $message->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus pesan ini ?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Model Trash Message --}}
<div class="modal fade" id="trashMessageModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="basicModalLabel">Daftar Sampah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3 trash-message-top">
                    <div class="col-12 text-right">
                        <a href="{{ route('admin.message.restore') }}" class="btn btn-success" onclick="return confirm('Apakah anda yakin ingin memulihkan semua pesan?')">
                            <i class="fas fa-trash-restore-alt"></i> Pulihkan Semua Sampah
                        </a>
                        {{-- <a href="{{ route('admin.message.permanentdestroy') }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus permanen semua pesan?')">
                            <i class="fas fa-trash"></i> Hapus Semua Permanen
                        </a> --}}
                    </div>
                </div>

                @foreach ($trashMessages as $trashMessage)
                    <div class="row message-list {{ (!$trashMessage->read) ? 'message-active' : ''}} position-relative">
                        <div class="col-12">
                            <p>{{ $trashMessage->name }}</p>
                        </div>
                        <div class="col-12">
                            <p>{{ $trashMessage->subject }}</p>
                        </div>
                        <div class="col-12">
                            <p>{{ date('M j, Y', strtotime($trashMessage->created_at)) }}</p>
                        </div>
                        <div class="form-del-message d-flex">
                            <form action="{{ route('admin.message.restorebyid') }}" method="post">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id_msg" value="{{ $trashMessage->id }}">
                                <button type="submit" class="btn btn-success mr-2" onclick="return confirm('Apakah anda yakin ingin memulihkan pesan ini?')"><i class="fas fa-trash-restore-alt"></i></button>
                            </form>
                            <form action="{{ route('admin.message.permanendestroybyid', $trashMessage->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id_msg" value="{{ $trashMessage->id }}">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus permanen pesan ini?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection