@extends('layouts/app')

@section('title', 'Dashboard | CropSystem')

@section('container')
    <div class="container-fluid">

        <!-- Content Row -->

        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-3 col-lg-3">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tanaman yang sedang dikembangkan</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                @foreach($date as $dates)
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($dates ->pembibitan <= $today && $today < $dates ->panen )
                                            <a class="text-sm text-gray-900"
                                               href="{{url('/detail', $dates->jenis_tanaman)}}">{{$dates->jenis_tanaman}}</a>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Task</h6>
                        <div class="text-xs font-weight-bold">
                            <a href="{{ route('tanamans.index') }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Items
                                </th>
                                <th scope="col"
                                    class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kategori
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="form-check">
                                        <input class="form-check-input mr-3" type="checkbox" value=""
                                               id="flexCheckDefault">
                                        <label class="form-check-label ml-2" for="flexCheckDefault">
                                            <div class="text-md text-gray-900">Siapkan semalam</div>
                                            <div class="text-sm font-weight-light text-primary">Read details</div>
                                            <div class="text-sm">Due date : 20/04/2021</div>
                                        </label>


                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-lg text-gray-900">
                                        <button type="button" class="btn btn-dark btn-sm"><b>General</b></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
