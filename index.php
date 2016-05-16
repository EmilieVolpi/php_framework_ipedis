<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="chrome=1"><link rel="stylesheet" type="text/css" href="/php_framework_ipedis/stylesheets/stylesheet.css" media="screen"><link rel="stylesheet" type="text/css" href="/php_framework_ipedis/stylesheets/github-dark.css" media="screen"><link rel="stylesheet" href="/php_framework_ipedis/bootstrap/css/bootstrap.css"><link rel="stylesheet" href="/php_framework_ipedis/bootstrap/css/bootstrap-responsive.css"><link rel="stylesheet" href="/php_framework_ipedis/bootstrap/css/bootstrap-responsive.min.css"><title>Php framework Ipedis by Emilie Volpi</title></head><body>  
      <?php require 'Autoloader.php';
        Autoloader::register();
      ?><header><div class="container">
        <h1>Php framework ipedis</h1>
        <h2>Test writing a PHP Framework for Ipedis</h2>
	<br><section id="downloads"><a href="https://github.com/EmilieVolpi/php_framework_ipedis/zipball/master" class="btn">Download as .zip</a>
          <a href="https://github.com/EmilieVolpi/php_framework_ipedis/tarball/master" class="btn">Download as .tar.gz</a>
          <a href="https://github.com/EmilieVolpi/php_framework_ipedis" class="btn btn-github"><span class="icon"></span>View on GitHub</a>
        </section></div>
    </header>
        <div class="container">
       <?php //initialisation
            $model = new Model();
            $controller = new Controller($model);
            $view = new View($controller, $model);

            //loading page after connexion
            if(!empty($_POST) && $_POST['form_name'] == 'connection_form')
            {
               $controller->connectionForm(); 
            } 
        ?> 
      <section id="connexion">
          <!--connexion form-->
          <form action="#" method="post" class="form-actions">
              <input type="hidden" name="form_name" value="connection_form"><?php echo $view->input('text', 'name');
                echo $view->input('radio', 'gender', 'male');
                echo $view->input('radio', 'gender', 'female');
                echo $view->submit();
            ?>
          </form>       
        </section>
        <section id="message"></section>
        </div>
  </body></html>
