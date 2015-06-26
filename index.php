<?php defined('_JEXEC') or die;
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$params = $app->getTemplate(true)->params;
?>

<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <jdoc:include type="head" />
		
		
        <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/foundation.css" />
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr.js"></script>
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/styles.css" rel="stylesheet" type="text/css">
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.js"></script>
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/foundation.min.js"></script>
        <script>
      $(document).foundation();
    </script>
    </head>
    <body>
	
	<?php if($this->countModules('logo') or $this->countModules('language-selection')):?>
        <div class="row">
            <div id="logo" class="columns layout small-6 medium-6 large-6"> 
                <jdoc:include type="modules" name="logo" style="none" />
            </div>
            <div id="language-selection" class="columns layout medium-6 large-6 small-6"> 
                <jdoc:include type="modules" name="language-selection" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('navbar')): ?>
        <div class="row">
            <div id="navbar" class="columns medium-12 small-12 large-12 layout">
                <jdoc:include type="modules" name="navbar" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('position-1')): ?>
        <div class="row">
            <div id="position-1" class="columns medium-12 small-12 large-12 layout">
                 <jdoc:include type="modules" name="position-1" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('position-2')): ?>
        <div class="row">
            <div id="position-2" class="columns medium-12 large-12 small-12 layout"> 
                <jdoc:include type="modules" name="position-2" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	
        <div class="row">
            <div id="article" class="columns medium-12 large-12 small-12 layout"> 
                <jdoc:include type="message" />
				<jdoc:include type="component" />   
            </div>
        </div>
		
	<?php if($this->countModules('position-3')): ?>
        <div class="row">
            <div id="position-3" class="columns medium-12 large-12 small-12 layout"> 
                <jdoc:include type="modules" name="position-3" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-6')): ?>
        <div class="row">
            <div id="position-4" class="columns layout small-4 medium-4 large-4"> 
                <jdoc:include type="modules" name="position-4" style="none" />
            </div>
            <div id="position-5" class="columns layout small-4 medium-4 large-4"> 
                <jdoc:include type="modules" name="position-5" style="none" />
            </div>
            <div id="position-6" class="columns layout small-4 medium-4 large-4"> 
                <jdoc:include type="modules" name="position-6" style="none" />
            </div>
        </div>
	<?php endif; ?>	
	
	<?php if($this->countModules('position-7')): ?>	
        <div class="row">
            <div id="position-7" class="columns medium-12 large-12 small-12 layout"> 
                <jdoc:include type="modules" name="position-7" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('bottom-navbar')): ?>
        <div class="row">
            <div id="bottom-navbar" class="columns medium-12 small-12 large-12 layout">
                <jdoc:include type="modules" name="bottom-navbar" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('footer')): ?>
        <div class="row">
            <div id="footer" class="columns medium-12 small-12 large-12 layout">
                <jdoc:include type="modules" name="footer" style="none" />
            </div>
        </div>
	<?php endif; ?>

    </body>
</html>
