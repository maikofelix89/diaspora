@extends('layout')

@section('content')

 <div class="row" id="contactus">
<div class="section white">
<div class="col offset-s1 s5" id="location">
   <h1 align="center" id="headtext"><i class="mdi-communication-location-on"></i>Head Office</h1>
  <p>Design Build Factory</p>
  <p>(Off Mombasa Road, Opposite Total Petrol Station, ImaraDaima)</p>
  <p>P.O. Box 16491-00100</p>
  <p>Nairobi, Kenya</p>
  <p><i class="mdi-communication-phone"></i>Tel: 254-020 3588300, 254-020 2098822</p>
  <p><i class="mdi-communication-stay-current-portrait"></i>Cell: 254-720- 270011</p>

  <p><i class=" mdi-communication-email"></i>E-mail: admin@diasporadesignbuild.com</p>

  <p><i class="mdi-action-language"></i>Website: www.diasporadesignbuild.com</p>
 </div>
 <div class="col s4" id="locationimage">
 <img src="images/dbl" width="100%" height="auto" />
 </div><!-- end of col s4 -->
 </div><!-- end of section white -->
 </div><!-- end of contact us row -->
 <div class="divider"></div>


<div class="row" id="contactus">
<div class="section white">


<div class="col offset-s4 s4">
<h1 align="center" id="headtext">Get in touch</h1>
<form>
      <div class="row">
       <div class="input-field col s12">
          <i class="mdi-action-account-circle prefix"></i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Name</label>
        </div>
        <div class="input-field col s12">
          <i class="mdi-communication-email prefix"></i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Your Email</label>
        </div>
        <div class="input-field col s12">
          <i class="mdi-editor-mode-edit prefix"></i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Message</label>
        </div>
        <div class="col offset-s7">
        <button class="btn waves-effect waves-light" id="sendbutton" type="submit" name="action">Send
    <i class="mdi-content-send right"></i>
  </button>
  </div>
      </div>
    </form>
    </div>

  

    <!-- end of col s4 -->
 
</div>


<!-- end of section -->

</div>






        


@endsection