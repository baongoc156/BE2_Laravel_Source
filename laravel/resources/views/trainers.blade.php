<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('head')
    <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Trainers</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        
        @include('nav')
        <a class="p-2 text-dark" href="/trainers/search">Search</a>
        
      </nav>
      <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">List of Trainers</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Company ID</th>
            <th scope="col">Company Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($trainers as $trainer)
          <tr>
              <th scope="row">{!! $trainer->trainer_id !!}</th>
              <td>{!! $trainer->trainer_name !!}</td>
              <td>{!! $trainer->company->company_name !!}</td>
              <td>{!! $trainer->company_id !!}</td>
              <td>{!! $trainer->trainer_email !!}</td>
              {{-- <td>{!! $trainer->trainer_code !!}</td> --}}
              <td>{!! $trainer->trainer_phone !!}</td>
      
            </tr>
          @endforeach
        
      
        </tbody>
      </table>
      <div class="pag">  {{ $trainers->withQueryString()->links() }}</div>

    </div>

    @include('footer')
  

<iframe id="nr-ext-rsicon" __idm_frm__="213" style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe><div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div></body>
</html>
