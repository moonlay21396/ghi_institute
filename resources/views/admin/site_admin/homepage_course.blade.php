@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">


@endsection

@section('nav_bar_text')
    Course
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Start Date
                                    </th>
                                    <th>
                                        Duration
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th></th>
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

        {{-- insert_model --}}


        <!-- edit modal -->


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

            load();

            function load(){
                $.ajax({
                    type: "POST",
                    url: "{{url('get_all_other_course')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        //console.log(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                            t.row.add( [
                                no++,
                                '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                                data_return[i]['name'],
                                data_return[i]['start_date'],
                                data_return[i]['duration'],
                                data_return[i]['description'].replace(/(<([^>]+)>)/ig,"").length > 40 ? data_return[i]['description'].replace(/(<([^>]+)>)/ig,"").substring(0,40)+'.....' : data_return[i]['description'],
                                data_return[i]['forhome'],
                                '<button class="btn btn-info btn-sm" onclick="change_home('+data_return[i]['id']+')">home</button>',
                                '<button class="btn btn-danger btn-sm" onclick="change_default('+data_return[i]['id']+')">default</button>'
                            ] ).draw( false );
                        }

                        $('#image').attr('src','{{asset('images/default.jpg')}}');

                    }
                });
            }


            change_home=function(id){
                if(confirm('Are you sure You want to change!')==true){
                    $.ajax({
                        type: "POST",
                        url: "../change_home/course/"+id,

                        cache: false,
                        success: function(data){
                            //console.log(data);
                            toastr.success('Successful');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }

            change_default=function(id){
                if(confirm('Are you sure You want to change!')==true){
                    $.ajax({
                        type: "POST",
                        url: "../change_default/course/"+id,

                        cache: false,
                        success: function(data){
                            //console.log(data);
                            toastr.success('Successful');
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