

@extends('voyager::master')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_title', "Resultats de l'evaluation")

@section('page_header')
    <h1 class="page-title">
        <i class=""></i>Resultats de l'evaluation de "{{$user}}"</h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="col-md-12 col-lg-12">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Categories de Questions</th>
                        <th>Questions</th>
                        <th>Reponses</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reponses->contenu as $key => $reponse)
                    @if ($reponse != "")
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{explode('_',$key)[1]}}</td>
                        <td>@if (explode('_',$key)[1] == "probleme") @foreach ($problemes as $probleme) @if ($probleme->id == explode('_',$key)[2]) {{$probleme->question}}  @endif @endforeach
                            @elseif (explode('_',$key)[1] == "developpement") @foreach ($developpements as $developpement) @if ($developpement->id == explode('_',$key)[2]) {{$developpement->question}}  @endif @endforeach
                            @elseif (explode('_',$key)[1] == "client") @foreach ($clients as $client) @if ($client->id == explode('_',$key)[2]) {{$client->question}}  @endif @endforeach
                            @elseif (explode('_',$key)[1] == "performance") @foreach ($performances as $performance) @if ($performance->id == explode('_',$key)[2]) {{$performance->question}}  @endif @endforeach
                            @elseif (explode('_',$key)[1] == "produit") @foreach ($produits as $produit) @if ($produit->id == explode('_',$key)[2]) {{$produit->question}}  @endif @endforeach
                            @endif</td>
                        <td>{{$reponse}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Categories de Questions</th>
                        <th>Question</th>
                        <th>Reponse</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@stop

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
 
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', footer: false },
            { extend: 'excelHtml5', footer: false },
            { extend: 'csvHtml5', footer: false },
            { extend: 'pdfHtml5', footer: false },
        ]
    } );
  $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).append( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

} );
</script>
@stop
