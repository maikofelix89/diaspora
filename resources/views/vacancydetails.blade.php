@extends('layout')

@section('content')
  <div class="container">
  
    <div class="row">
     <div class="col s12">
    <div class="card-panel">
       <h3 align="center" id="headtext">Job Title :{{ $vacancydet->job_title}}</h3>

      
         <h5>Job Code : {{ $vacancydet->job_code}} </h5>
         <h5>Location : {{ $vacancydet->job_location  }}</h5>

         <br>

         <h5>Job Summary</h5>
         <p>{{ $vacancydet->job_summary  }}</p>
         <br>
         <h5>Duties and Responsibilities</h5>
         <p>{{ $vacancydet->job_duties  }}</p>
         <br>
         <h5>Personal Specifications</h5>
         <p>{{ $vacancydet->job_specs }}</p>
         <br>
        <h5>Application Procedure</h5>
         <p>To apply for the above position, send an application detailing why you deserve to be 
         considered for the position. Attach your detailed CV with your daytime contacts and email
          address in word or PDF to hrm@diasporadesignbuild.com Do not attach scans of 
          certificates and testimonials. 
         Only shortlisted candidates shall be contacted by email or phone</p>
         <p>Applications should be received latest by {{ $vacancydet-> deadline }}.</p> 
         <p>Canvassing shall lead to automatic disqualification.</p>
         <br>
      
     </div>
     </div>
    </div>
  
  </div>


@endsection