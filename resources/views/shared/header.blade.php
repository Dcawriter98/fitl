<!--Header-->
		<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Career Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('jobrecords') }}">Job Records</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>        
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<!--End of header-->