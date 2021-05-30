<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('head')
    <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Companies</h5>
      <nav class="my-2 my-md-0 mr-md-3">
          @include('nav')
          
        <a class="p-2 text-dark" href="/companies/search">Search</a>
        
      </nav>
      <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">List of Companies</h1>
      {{-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> --}}
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Trainer Name</th>
            <th scope="col">Category ID</th>
            <th scope="col">Web</th>
            <th scope="col">Address</th>
            <th scope="col">Code</th>
            <th scope="col">Phone</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($companies as $company)
          <tr>
              <th scope="row">{!! $company->company_id !!}</th>
              <td>{!! $company->company_name !!}</td>
              <td>{!! $company->trainer->trainer_name !!}</td>
              <td>{!! $company->category_id !!}</td>
              <td>{!! $company->company_web !!}</td>
              <td>{!! $company->company_address !!}</td>
              <td>{!! $company->company_code !!}</td>
              <td>{!! $company->company_phone !!}</td>
      
            </tr>
          @endforeach
       
      
        </tbody>
      </table>
      <div class="pag">
      {{ $companies->links() }}

      </div>
    </div>

    @include('footer')
  

<iframe id="nr-ext-rsicon" __idm_frm__="213" style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe><div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div></body>
</html>
