@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12">
       <div class="card mt-4">
          <div class="card-body">
             <h5 class="card-title">Daftar Antrian</h5>
             <table class="table table-bordered">
                <thead>
                   <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">No PPK</th>
                      <th scope="col">Waktu Antri</th>
                      <th scope="col">Action</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <th scope="row">1</th>
                      <td>Brandon Jacob</td>
                      <td>12345</td>
                      <td>2016-05-25</td>
                   </tr>
                   <tr>
                      <th scope="row">2</th>
                      <td>Bridie Kessler</td>
                      <td>67891</td>
                      <td>2014-12-05</td>
                   </tr>
                   <tr>
                      <th scope="row">3</th>
                      <td>Ashleigh Langosh</td>
                      <td>01234</td>
                      <td>2011-08-12</td>
                   </tr>
                   <tr>
                      <th scope="row">4</th>
                      <td>Angus Grady</td>
                      <td>56789</td>
                      <td>2012-06-11</td>
                   </tr>
                   <tr>
                      <th scope="row">5</th>
                      <td>Raheem Lehner</td>
                      <td>01234</td>
                      <td>2011-04-19</td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
@endsection