@extends('layouts.app')

@section('content')
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
          <h2 >
          Usuarios registrados
          </h2>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="text-center m-5" id="rol">
      <!--Filtro selección de cargo-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  
  
  <div class="select">
      <select id="age">
          <option value="">- Select -</option>
          <option value="Tokyo">Tokyo</option>
          <option value="Edinburgh">Edinburgh</option>
      </select>
  </div>
  
  <div class="select">
      <select id="position">
          <option value="">- Select -</option>
          <option value="accountant">Accountant</option>
          <option value="system architect">System Architect</option>
      </select>
  </div>
  
  
  <table id="example" class="display" style="width:100%">
      <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011-04-25</td>
              <td>$320,800</td>
          </tr>
          <tr>
              <td>Garrett Winters</td>
              <td>System Architect</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011-07-25</td>
              <td>$162,700</td>
          </tr>
          <tr>
              <td>Ashton Cox</td>
              <td>System Architect</td>
              <td>Accountant Land</td>
              <td>66</td>
              <td>2009-01-12</td>
              <td>$162,700</td>
          </tr>
          <tr>
              <td>Cedric Kelly</td>
              <td>Accountant</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012-03-29</td>
              <td>$433,060</td>
          </tr>
          <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>33</td>
              <td>2008-11-28</td>
              <td>$162,700</td>
          </tr>
      </tbody>
  </table>
    </div>
    </section>
@endsection
