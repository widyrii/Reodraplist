@extends('layouts.app')

@section('content')

<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
 data-animsition-out="fade-out">>
   <div class="page-content vertical-align-middle">
     <div class="brand">
       <img class="brand-img" src="../../assets/images/logo.png" alt="...">
       <h2 class="brand-text">Remark</h2>
     </div>
     <p>Sign into your pages account</p>
     <form method="post">
       <div class="form-group">
         <label class="sr-only" for="inputName">Name</label>
         <input type="text" class="form-control" id="inputName" placeholder="Name">
       </div>
       <div class="form-group">
         <label class="sr-only" for="inputEmail">Email</label>
         <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
       </div>
       <div class="form-group">
         <label class="sr-only" for="inputPassword">Password</label>
         <input type="password" class="form-control" id="inputPassword" name="password"
         placeholder="Password">
       </div>
       <div class="form-group clearfix">
         <div class="checkbox-custom checkbox-inline pull-left">
           <input type="checkbox" id="inputCheckbox" name="checkbox">
           <label for="inputCheckbox">Remember me</label>
         </div>
         <a class="pull-right" href="forgot-password.html">Forgot password?</a>
       </div>
       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
     </form>
     <p>Still no account? Please go to <a href="register.html">Register</a></p>

     <footer class="page-copyright">
       <p>WEBSITE BY amazingSurge</p>
       <p>© 2015. All RIGHT RESERVED.</p>
       <div class="social">
         <a href="javascript:void(0)">
           <i class="icon bd-twitter" aria-hidden="true"></i>
         </a>
         <a href="javascript:void(0)">
           <i class="icon bd-facebook" aria-hidden="true"></i>
         </a>
         <a href="javascript:void(0)">
           <i class="icon bd-dribbble" aria-hidden="true"></i>
         </a>
       </div>
     </footer>
   </div>
 </div>

 @endsection
