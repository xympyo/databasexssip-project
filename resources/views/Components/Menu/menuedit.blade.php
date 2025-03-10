@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Menu | Edit</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>Cepi Order</h3>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <h2>Customize {{ $f_names }}</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <nav class="navbar">
                    <ul class="navigationbar">
                        <li class="navigation-nav mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3-range-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2h16a2 2 0 0 0-2-2zM0 8V3h16v2h-6a1 1 0 1 0 0 2h6v7a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-4h6a1 1 0 1 0 0-2z" />
                            </svg>
                            <a class="nav-link ms-2" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="navigation-nav mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M3.5 5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1M5 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                            </svg>
                            <a class="nav-link ms-2" href="{{ route('dashboard.list') }}">Order List</a>
                        </li>
                        <li class="navigation-nav mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0M2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <a class="nav-link ms-2" href="{{ route('dashboard.history') }}">Order History</a>
                        </li>
                        <li class="navigation-nav active mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-fill" viewBox="0 0 16 16">
                                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h8A1.5 1.5 0 0 0 11 3.5v-2A1.5 1.5 0 0 0 9.5 0zm5.927 2.427A.25.25 0 0 1 7.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                            </svg>
                            <a class="nav-link ms-2" href="{{ route('dashboard.menu') }}">Menu</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <div class="container outline p-3">
                    <form method="post" action="{{ route('dashboard.menu.edit.store') }}">
                        @csrf
                        @method('post')
                        <div class="mt-3 mb-3">
                            <input type="hidden" name="foodId" value="{{ $f_id }}">
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="foodName" class="form-label">Food Name</label>
                            <input type="text" class="form-control" id="foodName" name="foodName" placeholder="{{ $f_names }}">
                        </div>
                        <div class="mb-3">
                            <label for="foodDesc" class="form-label">Food Description</label>
                            <input type="text" class="form-control" id="foodDesc" name="foodDesc" placeholder="{{ $f_desc }}">
                        </div>
                        <div class="mb-3">
                            <label for="foodPrice" class="form-label">Food Price</label>
                            <input type="number" class="form-control" id="foodPrice" name="foodPrice" placeholder="{{ $f_price }}">
                        </div>
                        <div class="mb-3">
                            <label for="foodCategory" class="form-label">Choose Food Category</label>
                            <select class="form-select" name="foodCategory" id="foodCategory">
                                <option selected>{{ $f_category }}</option>
                                @foreach($categories as $index => $cat)
                                <option value="{{ $categories[$index] }}">{{ $categories[$index] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>