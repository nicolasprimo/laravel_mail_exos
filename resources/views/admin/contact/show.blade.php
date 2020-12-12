@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    {{-- <h1 class="m-0 text-dark">Email : {{$mail->id}}</h1> --}}
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Read Mail id : {{$mail->id}}</h3>
    
                  {{-- <div class="card-tools">
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                  </div> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="mailbox-read-info">
                    <h5>{{$mail->subject->name}}</h5>
                    <h6>From: {{$mail->email}}
                      <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
                  </div>
                  <!-- /.mailbox-read-info -->
                  {{-- <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="far fa-trash-alt"></i></button>
                      <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                        <i class="fas fa-reply"></i></button>
                      <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                        <i class="fas fa-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                      <i class="fas fa-print"></i></button>
                  </div> --}}
                  <!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    {{$mail->text}}
                  </div>
                  <!-- /.mailbox-read-message -->
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
                <div class="card-footer">
                    <form class=" d-sm-inline-block" action="{{route('contact.destroy',$mail)}}" method="POST">
                        @csrf
                        @method('delete')                                
                       <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
                    </form>
                  {{-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> --}}
                </div>
                <!-- /.card-footer -->
              </div>
        </div>
    </div>
@stop
