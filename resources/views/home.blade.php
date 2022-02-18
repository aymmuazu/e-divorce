@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($spouses) >= 4)
                        <div class="alert alert-warning">
                            👌 Maximum Spouse 
                        </div>
                    @else
                        <div class="alert alert-info">
                            🍵 You can register upto 4 spouses 
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add Spouse 👧
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Register A Spouse</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    @livewire('add')
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endif

                    <div class="card-header mb-2 font-weight-bold pt-5">{{ __('Spouses') }}</div>
                        @if (count($spouses) > 0)
                            @foreach ($spouses as $spouse)
                                <div class="row mb-1" style="padding-left: 3%;">
                                    <div class="col-sm-7">
                                        {{$spouse->name}}
                                    </div>
                                    <div class="col">
                                        <a href="" class="btn btn-secondary">Details👁️ </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModa2">Divorce 💢 </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure and willing to divorce her immediately or do you want to think more before
                                                    that? if that's so then click close to end this trial other wise click i agreed to divorce
                                                    her immediately.
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">I Agreed 👊 </button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            @endforeach
                        @else
                           <div class="alert alert-warning">
                               No Spouse found.
                           </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
