<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center"> Login Here </h1>
        	<form method="post" action="<?=base_url();?>User_con/login_us">
        		<fieldset>
        			<legend>login </legend>
        			
          			<div class="form-group id="f2">
            			<label for="example">Email</label>
            			<input type="email" class="form-control" id="e111" placeholder="email" name="email">
          			</div>
          			<div class="form-group id="f91">
            			<label for="example">password</label>
            			<input type="password" class="form-control" id="em" placeholder="password" name="password">
          			</div>
          			<button type="submit" name="login "class="btn btn-info"> Login</button>
          			<button type="reset" class="btn btn-primary"> cancel</button>
        		</fieldset>
        	</form>
        </div>
    </div>
</div>