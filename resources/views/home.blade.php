@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')



    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">

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
                    <div class="card-deck">
                        <div class="card">
                            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                            <div class="card-body">
                                <h5 class="card-title">Sopra</h5>
                                <p class="card-text">Sopra Banking Software</p>
                                <a target="_blank" href="https://www.soprabanking.com" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">Visiter</a>
                            </div>
                        </div>
                        <div class="card">
                            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                            <div class="card-body">
                                <h5 class="card-title">Xwiki</h5>
                                <p class="card-text">Xwiki</p>
                                <a target="_blank" href="http://swininducasa02.ptx.fr.sopra:8080/xwiki-enterprise-web-8.4.5/" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">Visiter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->


        </div>
    </div>

@endsection