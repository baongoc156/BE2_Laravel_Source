<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('head')
    <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Companies</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/companies">Company</a>
        <a class="p-2 text-dark" href="/trainers">Trainer</a>
        <a class="p-2 text-dark" href="/categories">Categories</a>
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

    <div class="container">
   
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">© 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

<iframe id="nr-ext-rsicon" __idm_frm__="213" style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe><div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div></body>
</html>
