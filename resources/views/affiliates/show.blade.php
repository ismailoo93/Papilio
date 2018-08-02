@extends('layouts.master')

@section('title')
    {{ $affiliate->name }}
@endsection


@section('content')


    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        {{ $affiliate->name }}
                    </h3>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">

                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="m_table_1_length">

                            </div></div><div class="col-sm-12 col-md-6"><div id="m_table_1_filter" class="dataTables_filter">

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
                        <tr>
                            <td>
                                {{ $affiliate->name }}
                            </td>
                            <td>
                                {{ $affiliate->country }}
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->


        </div>
    </div>
@endsection

