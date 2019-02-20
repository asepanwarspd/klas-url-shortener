@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card z-depth-0">
            <div class="card-content">
                <div class="card-title">Tautan Kustom</div>
                <div class="divider"></div>
                <div class="row">
                    <table class="striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>URL</th>
                            <th>Tautan Pendek</th>
                            <th>Tanggal</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $item->no }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->url }}</td>
                                <td>{{ $item->customurl }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <div id="delete-modal{{ $item->no }}" class="modal">
                                        <div class="modal-content">
                                            <h4>Apakah Anda yakin?</h4>
                                            <p>Data tersebut tidak dapat dikembalikan setelah dihapus.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form class="right" action="{{ route('admin.customurl.delete', ['id' =>$item->id]) }}" method="GET"><button class="modal-close waves-effect waves-green btn-flat" type="submit">Yakin, Saya mengerti</button></form>
                                            <a href="{{ route('admin.customurl') }}" class="modal-close waves-effect waves-green btn-flat">Tidak, Batalkan</a>
                                        </div>
                                    </div>
                                    <a class="waves-effect waves-light btn red modal-trigger" href="#delete-modal{{ $item->no }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
