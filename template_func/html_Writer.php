<?php

class html_writer{
  public $title = "";
  public $title_bottom;
  public $nav_title = "";
  public $nav_items;
  public $noindex = 1;


  private function nav(){
	$nav_item = "";
	if(is_array($this->nav_items)) foreach($this->nav_items as $item){
	  $active = "";
	  if($item[2]) $active = 'class="active"';
	  $nav_item .= "<li {$active}><a href=\"{$item[0]}\">{$item[1]}</a></li>";
	}
	$html = <<<"EPD"
  <div class="container">
	<nav class="navbar  navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <a class="navbar-brand" href="./">{$this->nav_title}</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
		  {$nav_item}
		  </ul>
		</div>
	  </div>
	</nav>
EPD;
	return $html;
  }

  function head(){
	if($this->noindex) $noindex = '<meta name="robots" content="noindex">';
	$head = <<<"EOD"

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{$noindex}
	<title>{$this->title}</title>
	  <!-- Bootstrap -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template_csjs/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="jumbotron">
    <div class="container">
    <h1>{$this->title}</h1>
    {$this->title_bottom}
    </div>
    </div>
        {$this->nav()}
EOD;
	echo $head;
  }

  function foot(){
	$foot = <<<"EOD"
	</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boostrap/js/bootstrap.min.js"></script>
  </body>
</html>
EOD;
	echo $foot;
  }
}