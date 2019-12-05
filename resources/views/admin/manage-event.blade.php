@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
                  <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="">Manage Event Post</a></li>
                </ol>
                <div class="col-md-12">
                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Event Post Information
                             </div>
                             <div class="col-md-3 text-right">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                              <thead class="table_head">
                                <tr>
                                      <th>Name</th>
                                      <th>Event Type</th>
                                      <td>Description</td>
                                      <td>Action</td>
                                    </tr>
                              </thead>
                              
                                <tbody>
                                  <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                </tbody>
                                 <!--delete data modal-->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          
                                          <div class="modal-body">
                                            <form action=""  method="post">
                                              @csrf
                                              <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                            </form>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--data modal-->
                               
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->

               

@endsection