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
		
		<!-- Fonts -->
		<style>
		@font-face {
		font-family: Hero;
		font-style: normal;
		font-weight: normal;
		src: url('<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/fonts/Hero.otf') format('opentype');
		}
		
		@font-face {
		font-family: Hero Light;
		font-style: normal;
		font-weight: normal;
		src: url('<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/fonts/Hero Light.otf') format('opentype');
		}
		</style>
		
		
        <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/foundation.css" />
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr.js"></script>
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/styles.css" rel="stylesheet" type="text/css">
		
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.js"></script>
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/foundation.min.js"></script>
        <script>
      $(document).foundation();
    </script>
	<?php if($this->params->get("slickcarousel")): ?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/slick/slick-theme.css"/>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/slick/slick.min.js"></script>
	
	<?php endif; ?>
	
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/consult.js"></script>
	<?php if($this->countModules('customStyle')):?>
    <style>
	<jdoc:include type="modules" name="customStyle" style="none" />
	</style>
	<?php endif; ?>
	
	<?php if($this->countModules('customHead')):?>
	<jdoc:include type="modules" name="customHead" style="none" />
	<?php endif; ?>
	</head>
    <body>
	
	<?php if($this->countModules('xpert-1')): ?>
	<jdoc:include type="modules" name="xpert-1" style="none" />
	<?php endif; ?>
	
	<?php if($this->countModules('logo') or $this->countModules('language-selection')):?>
        <div id="logo-row" class="row">
            <div id="logo" class="columns layout small-12 medium-6 large-6"> 
                <jdoc:include type="modules" name="logo" style="none" />
            </div>
            <div id="language-selection" class="columns layout medium-6 large-6 small-12"> 
                <jdoc:include type="modules" name="language-selection" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('xpert-2')): ?>
	<jdoc:include type="modules" name="xpert-2" style="none" />
	<?php endif; ?>
	
	<?php if($this->countModules('navbar')): ?>
        <div id="navbar-row" class="row">
            <div id="navbar" class="columns medium-12 small-12 large-12 layout">
                <jdoc:include type="modules" name="navbar" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('xpert-3')): ?>
	<jdoc:include type="modules" name="xpert-3" style="none" />
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
	
	<?php if($this->countModules('xpert-4')): ?>
	<jdoc:include type="modules" name="xpert-4" style="none" />
	<?php endif; ?>
	
	
	
	<?php if($this->countModules('custom-article-start') or $this->countModules('custom-article-end')): ?>
		<jdoc:include type="modules" name="custom-article-start" style="none" />
		        <jdoc:include type="message" />
				<jdoc:include type="component" />
		<jdoc:include type="modules" name="custom-article-end" style="none" />
				
	<?php else: ?>
        <div class="row">
            <div id="article" class="columns medium-12 large-12 small-12 layout"> 
                <jdoc:include type="message" />
				<jdoc:include type="component" />   
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('xpert-5')): ?>
	<jdoc:include type="modules" name="xpert-5" style="none" />
	<?php endif; ?>	
	
	<?php if($this->countModules('position-3')): ?>
        <div class="row">
            <div id="position-3" class="columns medium-12 large-12 small-12 layout"> 
                <jdoc:include type="modules" name="position-3" style="none" />
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('xpert-6')): ?>
	<jdoc:include type="modules" name="xpert-6" style="none" />
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
	
	<?php if($this->countModules('xpert-7')): ?>
	<jdoc:include type="modules" name="xpert-7" style="none" />
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
	
	
	<?php if($this->countModules('xpert-8')): ?>
	<jdoc:include type="modules" name="xpert-8" style="none" />
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
