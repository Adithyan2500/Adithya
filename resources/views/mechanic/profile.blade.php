@extends('layouts.master1')


@section('title')
   user profile
@endsection
        


@section('content')
<div class="container ">
<div class="row justify-content-center">
        <div class="col-md-7">
          <div class="card bg-secondary text-white " >
            <div class="row justify-content-center" style="margin-top:50px;"><img src="user1.png" alt="" style="width:200px;height:200px;"></div>
            
            <div class="card-header">
              <h4 class="card-title text-center">User Profile</h4>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
            </div>
            <div class="card-body ">
              <div class="table-responsive">
                <table class="table ">
                  
                  <tbody >                 
                     
                    <tr>
                      <th>
                         NAME
                     </th>
                      <td >
                        {{ Auth::user()->name }}
                      </td>
                    </tr>
                    <tr>
                      <th>
                        EMAIL
                    </th>
                     <td>
                       {{ Auth::user()->email }}
                     </td>
                    </tr>
                    <tr>
                     <th>
                        LOCATION
                    </th>
                     <td>
                       {{ Auth::user()->location }}
                     </td>
                                           
                    </tr>
                    <tr>
                    <th>
                       GENDER
                    </th>
                    <td>
                    {{ Auth::user()->gender }}
                    </td>                      
                    </tr>
                    <tr>
                      <th>
                         PHONE
                      </th>
                      <td>
                      {{ Auth::user()->phone }}
                      </td>                      
                      </tr>
                      <tr>
                        <th>
                           SERVICE TYPE
                        </th>
                        <td>
                        {{ Auth::user()->servicetype }}
                        </td>                      
                        </tr>
                   <tr> 
                     <td></td> 
                        <td class="text-right" >
                        <a href="/reg-edit" class="btn btn-success">Edit details</a>
                      </td>
                       
                     
                    </tr>
                </tbody>                      
                                        
                       
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div> 
@endsection


@section('scripts')

@endsection

    