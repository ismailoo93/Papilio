@extends('layouts.master')


@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Filiales
                    </h3>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">

                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{ url()->current() }}/create" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="fa fa-plus"></i>
													<span >
														Nouvelle Filiale
													</span>
												</span>
                                </a>
                            </li>
                            <li class="m-portlet__nav-item"></li>

                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="m_table_1_length">
                                {{-- <ul class="a77">
                                     <li><span>Afficher</span> </li>
                                     <li><select name="m_table_1_length" aria-controls="m_table_1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> </li>
                                     <li><span>entrées</span></li>



                                 </ul>--}}
                            </div></div><div class="col-sm-12 col-md-6"><div id="m_table_1_filter" class="dataTables_filter">

                                <ul class="a77_left">
                                    <li><span>Recherche : </span></li>
                                    <li><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1"></li>
                                </ul>
                            </div></div></div>
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="">
                        <thead>
                        <tr>
                            <!--<th>
                                Filiale
                            </th>-->
                            <th>
                                Filiale
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody id="app">
                        @foreach($affiliates as $affiliate)
                            <tr>
                                <td>
                                    {{ $affiliate->name }}
                                </td>
                                <td>
                                    <a href="/affiliates/{{ $affiliate->id }}">
                                        <button class="action"><span class="fa fa-eye"></span></button>
                                    </a>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->


        </div>
    </div>

@endsection



