@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-row">

            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header">{{ $product->titale }}</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-11 mb-4 shadow-sm">
                                <div class="card" style="width: 18rem,height:100%">
                                    <div class="card-img-top">
                                        <img class="card-img-top" src="{{ $product->picture }}"
                                            alt="{{ $product->titale }}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->titale }}</h5>
                                        <p class=" text-dark font-weight-bold">{{ $product->titale }}</p>
                                        <p class="d-flex flex-row justify-content-between align-items-center">

                                            <b><span class="text-muted">{{ $product->price }} DH</span></b>
                                            <strike>
                                                <b> <span class="text-danger">{{ $product->old_price }}
                                                        DH</span></b>
                                            </strike>
                                        </p>
                                        <p class="card-text">
                                            {{ $product->description }}
                                        </p>
                                        <p class=" font-weight-bold">
                                            @if ($product->in_stock > 0)
                                                <span class=" text-success">available</span>
                                            @else
                                                <span class=" text-danger">Unvailable</span>

                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
            <div class="d-flex p-2">

            </div>
        </div>
    </div>
@endsection
