@extends('layouts.app')

@section('content')
<h4 class="d-flex justify-content-center contact-heading" style="color: black">
    Account Information
</h4>
<div class="container">
    <table class="table">
        
        <tbody>
          <tr>
            <th scope="row" style="border: none">
                Name
            </th>
            <td style="border: none">Example Example</td>
            
          </tr>

          <tr>
            <th scope="row" style="border: none">
                Shipping Address
            </th>
            <td style="border: none">Narayanghat, Chitwan</td>
            
          </tr>

          <tr>
            <th scope="row" style="border: none">
                Email Address
            </th>
            <td style="border: none"> Example@xample.com</td>
            
          </tr>

          <tr>
            <th scope="row" style="border: none">
                Phone NUmber
            </th>
            <td style="border: none">+97798123467</td>
            
          </tr>

        </tbody>
      </table>
</div>
@endsection