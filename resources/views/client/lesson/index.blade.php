@extends('layouts.app')

@section('fixed-nav-top')
    style="margin: 0"
    @endsection
@section('head-style')
    <link href="{{ asset('codemirrormini/lib/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/theme/dracula.css') }}" rel="stylesheet">
    <script src="{{ asset('codemirrormini/lib/codemirror.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/css/css.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/javascript/javascript.js') }}"></script>
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="overflow-y: scroll;position: absolute;padding: 0; top: 7%; right: 66.66666666666667%; bottom: 5%;left: 0%;">
                <div class="panel panel-default" style="padding: 0;height: 100%">
                    <div class="panel-heading">
                        <i class="glyphicon glyphicon-book"></i>
                        Learn
                    </div>
                    <div id="ss"class="panel-body" style="padding: 0 10px 0 10px;">
                        <p>HTML is the language used to create the web pages you visit everyday. It provides a logical way to structure content for web pages.</p>
                        <p>Let's analyze the acronym "HTML", as it contains a lot of useful information. HTML stands for HyperText Markup Language.</p>
                        <p>Let's analyze the acronym "HTML", as it contains a lot of useful information. HTML stands for HyperText Markup Language.</p>
                        <p>HyperText is text displayed on a computer or device that provides access to other text through links, also known as  “hyperlinks”. In fact, you probably clicked on many, many hyperlinks on your path to this Codecademy course!</p>
                        <p>In this course, you'll learn how to use the fundamentals of HTML to structure, present, and link content. You'll also learn how to use CSS, or Cascading Style Sheets, to style the HTML content you add to web pages.</p>
                        <p>Let's get started!</p>
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
                <form id="submit-form" style="height: 100%">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">index.html</a></li>
                        <li><a data-toggle="tab" href="#menu1">style.css</a></li>
                    </ul>
                    <div class="tab-content" style="height: 85%">
                        <div id="home" class="tab-pane fade in active" style="height: 100%">
                            <textarea id="editor-html">HTML</textarea>
                        </div>
                        <div id="menu1" class="tab-pane fade" style="height: 100%">
                            <textarea id="editor-css">CSS</textarea>
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
            height: "500px",
            tabMode: "indent",
            theme: "dracula",
            lineNumbers: true,
        });

        var editor_css = CodeMirror.fromTextArea(document.getElementById("editor-css"), {
            mode: "text/css",
            tabMode: "indent",
            theme: "dracula",
            lineNumbers: true
        });
    </script>
@endsection