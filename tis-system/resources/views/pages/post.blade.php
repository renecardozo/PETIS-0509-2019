@extends('layouts.app')

@section('content')
    <script type="text/javascript">
        function onCancel(){
            var contentEditor = CKEDITOR.instances['article-ckeditor'].getData();
            if (contentEditor !== "") {
                CKEDITOR.instances['article-ckeditor'].setData('');
            }
        }
        function onSend() {
            var contentEditor = CKEDITOR.instances['article-ckeditor'].getData();
            if (contentEditor === "") {
                $('#warning-modal').modal('show');
            } else {
                $('#success-modal').modal('show');
            }
        }
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="article-ckeditor"></div>
            </div>
        </div>
        <div class="row">
            <div class="post-separator"></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <button class="btn btn-default" onclick="onCancel()">
                    Cancelar
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <button class="btn btn-success" onclick="onSend()">
                    Enviar
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Warning modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="warning-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-alert"></span>
                </h4>
            </div>
            <div class="modal-body">
                <p>Escriba su carta por favor&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Success modal-->
    <!-- Warning modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="success-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-ok"></span>
                </h4>
            </div>
            <div class="modal-body">
                <p>Se ha enviado su carta&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection