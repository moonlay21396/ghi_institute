@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">


@endsection

@section('nav_bar_text')
    Project
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-primary pull-right" data-keyboard="false" data-backdrop="static"></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Event Name
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Job Title
                                    </th>
                                    <th>
                                        Education
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th></th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {

            var t=$("#datatable").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
                // "bFilter": true,
                // "bAutoWidth": false
            });
            // function reset(){
            //     $('#update_data')[0].reset();
            // }

            load();

            function load(){
                $.ajax({
                    type: "post",
                    url: "{{url('get_all_enrollment')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        console.log(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                            t.row.add( [
                                no++,
                                data_return[i]['event_id'],
                                data_return[i]['name'],
                                data_return[i]['email'],
                                data_return[i]['phone'],
                                data_return[i]['job'],
                                data_return[i]['education'],
                                data_return[i]['address'],
                                // '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                            ] ).draw( false );
                        }

                    }
                });
            }

            delete_data=function(id){
                if(confirm('Are you sure You want to delete!')==true){
                    $.ajax({
                        type: "POST",
                        url: "../delete/enrolllment/"+id,

                        cache: false,
                        success: function(data){
                            toastr.success('Delete data successful');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }


        });
    </script>
@endsection