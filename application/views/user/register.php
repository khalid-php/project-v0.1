<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
            <h1> Register  Information </h1>
        	<form method="post" action="<?=base_url();?>User_con/save">
        		<fieldset>
        			<legend>Profile Information </legend>
        			<div class="form-group id="f1">
            			<label for="example" id="mf1">Name</label>
            			<input type="text" class="form-control" id="e12" placeholder="name" name="name">
          			</div>
          			<div class="form-group id="f2">
            			<label for="example">Email</label>
            			<input type="email" class="form-control" id="e111" placeholder="email" name="email">
          			</div>
          			<div class="form-group id="f334">
            			<label for="example">contact</label>
            			<input type="text" class="form-control" id="e121" placeholder="contact" name="contact">
          			</div>
          			<div class="form-group id="f01">
            			<label for="example">address</label>
            			<input type="text" class="form-control" id="e120" placeholder="address" name="address">
          			</div>
          			<div class="form-group id="f91">
            			<label for="example">password</label>
            			<input type="password" class="form-control" id="em" placeholder="password" name="password">
          			</div>
          			<button type="submit" name="save "class="btn btn-info"> submit</button>
          			<button type="reset" class="btn btn-primary"> cancel</button>
        		</fieldset>
        	</form>
        </div>
    </div>
</div>