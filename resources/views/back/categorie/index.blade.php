@extends('back.layout.main')
@section('breadcrumb_first')
    Categorie
@stop
@section('breadcrumb_second')
    List
@stop
    @section('content')
            <!-- widget grid -->
    <section id="widget-grid" class="">

        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-2" data-widget-editbutton="true">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="true">

                    data-widget-colorbutton="true"
                    data-widget-editbutton="true"
                    data-widget-togglebutton="true"
                    data-widget-deletebutton="true"
                    data-widget-fullscreenbutton="true"
                    data-widget-custombutton="true"
                    data-widget-collapsed="true"
                    data-widget-sortable="true"

                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>

                        <h2>List </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">
                        <div class="col-xs-12">
                            <a href="/admin/categorie/create" class="btn btn-primary" >Create</a>
                        </div>
                            <table id="datatable_col_reorder" class="table table-striped table-bordered table-hover"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">name</th>
                                    <th data-hide="phone">status</th>
                                    <th data-hide="phone">icone</th>
                                    <th data-hide="phone">order</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $value)
                                    <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->icone }}</td>
                                        <td>{{ $value->order }}</td>
                                        <td>
                                            <ul class="demo-btns">
                                                <li>
                                                    <a href="/admin/categorie/edit/{{ $value->id }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/categorie/delete/{{ $value->id }}" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>
                                                        Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $categories->links() }}
                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->
            </article>
            <!-- WIDGET END -->
        </div>
        <!-- end row -->
        <!-- end row -->
    </section>
    <!-- end widget grid -->
    @stop
    @section('scripts')
            <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{asset('assets/back/js/plugin/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/back/js/plugin/datatables/dataTables.colVis.min.js')}}"></script>
    <script src="{{asset('assets/back/js/plugin/datatables/dataTables.tableTools.min.js')}}"></script>
    <script src="{{asset('assets/back/js/plugin/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/back/js/plugin/datatable-responsive/datatables.responsive.min.js')}}"></script>

    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function () {

            pageSetUp();

            /* // DOM Position key index //

             l - Length changing (dropdown)
             f - Filtering input (search)
             t - The Table! (datatable)
             i - Information (records)
             p - Pagination (paging)
             r - pRocessing
             < and > - div elements
             <"#id" and > - div with an id
             <"class" and > - div with a class
             <"#id.class" and > - div with an id and class

             Also see: http://legacy.datatables.net/usage/features
             */

            /* END COLUMN SHOW - HIDE */
        })
    </script>
@stop