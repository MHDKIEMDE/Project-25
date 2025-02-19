@extends('dashboard.layouts.appAdmin')

@section('title')
    Dashboard Quartiers
@endsection

@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title"> Dashboard Quartiers
            <a class="common_btn" href="{{ route('admin.quartier.create') }}">+ Add Quartier</a>
            <a class="common_btn" href="{{ route('admin.ville.index') }}">+ show les Ville</a>
            <a class="common_btn" href="{{ route('admin.pays.index') }}">+ Show Pays</a>
        </h2>
        <div class="dashboard_order wow fadeInUp" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="serial">id</th>
                                    <th class="date">Quartiers</th>
                                    <th class="date">Ville associer</th>
                                    <th class="package">Add date</th>
                                    <th class="action">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quartier as $q)
                                    <tr>
                                        <td class="serial">{{ $q->id }}</td>
                                        <td class="package">{{ $q->name }}</td>
                                        <td class="details">
                                            <p>{{ $q->ville->name }} / {{ $q->ville->pays->name }}</p>
                                        </td>
                                        <td class="date">{{ $q->created_at }}</td>
                                        <td class="action">
                                            <form action="{{ route('admin.quartier.edit', ['quartier' => $q->id]) }}"
                                                method="GET" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="far fa-pen-alt"></i> Edit
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.quartier.destroy', $q->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div id="pagination_area">
                                {{ $quartier->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
