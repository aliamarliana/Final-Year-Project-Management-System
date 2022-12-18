@include("admin.formcss")
<form class="my-form">
  <div class="container">
    <h1>Get in touch!</h1>
    <ul>
      <li><select>
  <option selected disabled>-- Please choose an option --</option>
  <option>Request Quote</option>
  <option>Send Resume</option>
  <option>Other</option>      
</select></li> </br>   
      <li><div class="grid grid-2">
  <input type="text" placeholder="Name" required>  
  <input type="text" placeholder="Surname" required>
</div></li>   <br> 
      <li><div class="grid grid-2">
  <input type="email" placeholder="Email" required>  
  <input type="tel" placeholder="Phone">
</div></li>    <br>
      <li><textarea placeholder="Message"></textarea></li>    
      <li><div class="grid grid-3">
  <button class="btn-grid" type="submit" disabled>
    <span class="front">SUBMIT</span>
  </button>
  <button class="btn-grid" type="reset" disabled>
    <span class="front">RESET</span>
  </button> 
</div></li>
    </ul>
  </div>
</form>
