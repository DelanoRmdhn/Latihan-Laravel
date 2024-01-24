<table class="container ms-auto mt-5 table-process">
  <thead>
    <tr>
    @yield('dataTittle')
    </tr>
  </thead>
  <tbody >
    <tr class="table-content">
      <th scope="row">1</th>
      @yield('dataContent1')
      @yield('status')
      @yield('editData')
    </tr>
    <tr class="table-content">
      <th scope="row">2</th>
      @yield('dataContent2')
      @yield('status')
      @yield('editData')
    </tr>
  </tbody>
</table>