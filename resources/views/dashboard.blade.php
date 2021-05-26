@extends('layouts/app')

@section('title', 'Dashboard | CropSystem')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a class="h3 mb-0 text-gray-800" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"> {{ __('Dashboard') }} </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Temperature</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">28 °C </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-temperature-high fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Curah Hujan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0.0mm</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cloud-moon-rain fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kecepatan Angin</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">3.9m/s</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wind fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kelembapan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">61%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-water fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sekilas</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row no-gutters align-items-center mb-3">
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check fa-1x text-gray-300"></i>
                        </div>
                        <div class="col ml-4">
                            <div class="h6 mb-0 font-weight-bold text-gray-700">1 task</div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center mb-3">
                        <div class="col-auto">
                            <i class="fab fa-pagelines fa-1x text-gray-300"></i>
                        </div>
                        <div class="col ml-4">
                            <div class="h6 mb-0 font-weight-bold text-gray-700">1 Jenis produksi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tanaman yang sedang dikembangkan</h6>
                    <div class="text-xs font-weight-bold">
                        Lihat semua
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Varietas
                                </th>
                                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Batches Qty
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Kentang</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">10</div>
                                </td>
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
                        Lihat semua
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Items
                                </th>
                                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kategori
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="form-check">
                                        <input class="form-check-input mr-3" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label ml-2" for="flexCheckDefault">
                                            <div class="text-md text-gray-900">Siapkan semalam</div>
                                            <div class="text-sm font-weight-light text-primary">Read details</div>
                                            <div class="text-sm">Due date : 20/04/2021</div>
                                        </label>


                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-lg text-gray-900"><button type="button" class="btn btn-dark btn-sm"><b>General</b></button></div>
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