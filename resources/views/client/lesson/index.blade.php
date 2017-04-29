@extends('layouts.app')

@section('fixed-nav-top')
    style="margin: 0"
    @endsection
@section('head-style')
    <link href="{{ asset('codemirrormini/lib/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/theme/dracula.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/scroll/simplescrollbars.css') }}" rel="stylesheet">
    <script src="{{ asset('codemirrormini/lib/codemirror.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/css/css.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('codemirrormini/scroll/simplescrollbars.js') }}"></script>
    @endsection

@section('on_load')
    onload="con_cac()"
    @endsection

@section('content')
    <div class="container-fluid" onload="con_cac()">
        <div class="row">
            <div class="col-md-4" style="overflow-y: scroll;position: absolute;padding: 0; top: 7%; right: 66.66666666666667%; bottom: 5%;left: 0%;">
                <div class="panel panel-default" style="padding: 0;height: 100%">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-book"></i>
                        Learn
                    </div>
                    <div id="ss"class="panel-body" style="padding: 0 10px 0 10px;">
                        {{$tasks->content}}
                        <div class="panel panel-default" style="margin: 0">
                            <div class="panel-heading">
                                <p>Heading 2</p>
                            </div>
                            <div class="panel panel-body">
                                <p>In the code editor to the right, type your name in between  and , then press Run.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="background-color: #282a36;position: absolute;top: 7%; right: 33.33333333333334% ; bottom: 5%; left: 33.33333333333333%;">
                <form method="get" id="submit-form" style="height: 100%">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">index.html</a></li>
                        <li><a data-toggle="tab" href="#menu1">style.css</a></li>
                    </ul>
                    <div class="tab-content" style="height: 85%">
                        <div id="home" class="tab-pane fade in active" style="height: 100%">
                            <textarea id="editor-html">{{$tasks->source_code_html}}</textarea>
                        </div>
                        <div id="menu1" class="tab-pane fade" style="height: 100%">
                            <textarea id="editor-css">{{$tasks->source_code_css}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">
                        RUN
                    </button>
                </form>
            </div>
            <div class="col-md-4" style="padding: 0; position: absolute;top: 7%; right: 0%; bottom: 5%;left: 66.66666666666666%;%;">
                <iframe id="result-content" style="height: 99%;width: 100%"></iframe>
            </div>
        </div>
    </div>
    <script>
        var editor_html = CodeMirror.fromTextArea(document.getElementById("editor-html"), {
            mode: "text/html",
            theme: "dracula",
            lineNumbers: true,
            lineWrapping: true,
            scrollbarStyle: "overlay"
        });

        var editor_css = CodeMirror.fromTextArea(document.getElementById("editor-css"), {
            mode: "text/css",
            theme: "dracula",
            scrollbarStyle: "overlay"
        });

        function con_cac() {
            var html = $('#editor-html').val();
            var css = $('#editor-css').val();
            var result = $('#result-content');
            result.ready(function () {
                result.contents().find("head").append('<style>'+css+'</style>');
                result.contents().find("body").html(html);
            });
        }

    </script>
@endsection