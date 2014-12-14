
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dennisstevens.me</title>
    @yield('css')
    <!-- Bootstrap -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://dwa15.com">CSCI - E15</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.dennisstevens.me">Home</a></li>
            <li><a href="http://p1.dennisstevens.me">P1 Live</a></li>
            <li><a href="https://github.com/cnsdws/P1">P1 Github</a></li>
            <li><a href="http://p2.dennisstevens.me">P2 Live</a></li>
            <li><a href="https://github.com/cnsdws/P2">P2 Github</a></li>
            <li><a href="http://p3.dennisstevens.me">P3 Live</a></li>
            <li><a href="https://github.com/cnsdws/P3">P3 Github</a></li>
            <li><a href="http://p4.dennisstevens.me">P4 Live</a></li>
            <li><a href="https://github.com/cnsdws/P4">P4 Github</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        <a href="{{ action('PositionsController@index') }}" class="navbar-brand">Stock Positions</a>
        <a href="{{ action('PositionsController@create') }}" class="navbar-brand">Create Position</a>
        <a href="{{ action('TransactionsController@listTransactions') }}" class="navbar-brand">List Transactions</a>
      </div>
      </div>
  </div>
    <br>
    <br>
    <br>
    <div class="container">

       <!-- Password Generator -->
      <div class="starter-template">
        <ul class="media-list">
          <li class="media">
            <div class="media-body">
              
		            @yield('Index')
                @yield('Create')
                @yield('Edit')
                @yield('Delete')
                @yield('Transactions')
	              
                     
            </div>
          </li>
       </ul>
     	
     </div>

    </div>
    
    

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>