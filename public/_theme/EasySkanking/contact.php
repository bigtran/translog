<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docs | Documentation HTML Template</title>
    <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/20.png" >
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/uikit.js"></script>
</head>

<body>

<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
  <?php require("inc/header.php");?>
</div>

<div class="uk-section">
  <div class="uk-container uk-container-xsmall">
    <article class="uk-article">
      <h1 class="uk-article-title">Got Any Questions</h1>
      <div class="article-content link-primary">
        <h5 id="morbi-varius-in-accumsan-blandit-elit-ligula-velit-luctus-mattis-ante-nulla-nulla">Morbi varius in
          accumsan blandit, elit ligula velit, luctus mattis ante nulla nulla.</h5>
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
          dolores eos qui ratione voluptatem sequi nesciunt.</p>
        <form class="uk-form-stacked uk-margin-medium-top" method="POST" action="https://formspree.io/my_name@gmail.com"
          accept-charset="UTF-8">
          <div class="uk-margin-medium-bottom">
            <label class="uk-form-label uk-margin-small-bottom" for="name">Name</label>
            <div class="uk-form-controls">
              <input id="name" class="uk-input uk-form-large uk-border-rounded" name="name" type="text" required="">
            </div>
          </div>
          <div class="uk-margin-medium-bottom">
            <label class="uk-form-label uk-margin-small-bottom" for="_replyto">Email</label>
            <div class="uk-form-controls">
              <input id="_replyto" class="uk-input uk-form-large uk-border-rounded" name="_replyto" type="email" required="">
            </div>
          </div>
          <div class="uk-margin-medium-bottom">
            <label class="uk-form-label uk-margin-small-bottom" for="_subject">Subject</label>
            <div class="uk-form-controls">
              <input id="_subject" class="uk-input uk-form-large uk-border-rounded" name="_subject" type="text">
            </div>
          </div>
          <div class="uk-margin-medium-bottom">
            <label class="uk-form-label uk-margin-small-bottom" for="message">Message</label>
            <div class="uk-form-controls">
              <textarea id="message" class="uk-textarea uk-form-large uk-border-rounded" name="message" rows="5" minlength="10"
                required=""></textarea>
            </div>
          </div>
          <div>
            <input type="hidden" name="_next" value="https://docs.jekyll.plus/thanks/">
            <input type="text" name="_gotcha" style="display:none">
            <input class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit" value="Send">
          </div>
        </form>
      </div>
    </article>
  </div>
</div>

<div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <h5 class="uk-margin-top">Getting Started</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="doc.html">Template setup</a></li>
      <li><a href="doc.html">Basic theme setup</a></li>
      <li><a href="doc.html">Navigation bar</a></li>
      <li><a href="doc.html">Footer options</a></li>
      <li><a href="doc.html">Creating your first post</a></li>
      <li><a href="doc.html">Creating docs posts</a></li>
      <li><a href="doc.html">Enabling comments</a></li>
      <li><a href="doc.html">Google Analytics</a></li>
    </ul>
    <h5 class="uk-margin-top">Product Features</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Hero page header</a></li>
      <li><a href="doc.html">Category boxes section</a></li>
      <li><a href="doc.html">Fearured docs section</a></li>
      <li><a href="doc.html">Video lightbox boxes section</a></li>
      <li><a href="doc.html">Frequently asked questions section</a></li>
      <li><a href="doc.html">Team members section</a></li>
      <li><a href="doc.html">Call to action section</a></li>
      <li><a href="doc.html">Creating a changelog</a></li>
      <li><a href="doc.html">Contact form</a></li>
      <li><a href="doc.html">Adding media to post and doc content</a></li>
      <li><a href="doc.html">Adding table of contents to docs</a></li>
      <li><a href="doc.html">Adding alerts to content</a></li>
    </ul>
    <h5 class="uk-margin-top">Customization</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Translation</a></li>
      <li><a href="doc.html">Customization</a></li>
      <li><a href="doc.html">Development</a></li>
      <li><a href="doc.html">Sources and credits</a></li>
    </ul>
    <h5 class="uk-margin-top">Help</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Contacting support</a></li>
    </ul>
  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Docs</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top">
      <li ><a href="index.html">Home</a></li>
      <li ><a href="doc.html">Docs</a></li>
      <li ><a href="blog.html">Blog</a></li>
      <li class="uk-active"><a href="contact.html">Contact</a></li>
      <li>
        <div class="uk-navbar-item"><a class="uk-button uk-button-success" href="contact.html">Contact</a></div>
      </li>
    </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="uk-section uk-text-center uk-text-muted">
	<div class="uk-container uk-container-small">
		<div>
			<ul class="uk-subnav uk-flex-center">
				<li><a href="#">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="uk-margin-medium">
			<div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
				<div class="uk-first-column">
					<a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link uk-icon" target="_blank"></a>
				</div>
				<div>
					<a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div>
				<div>
					<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div>
				<div>
					<a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link uk-icon" target="_blank"></a>
				</div>
			</div>
		</div>
		<div class="uk-margin-medium uk-text-small copyright link-secondary">Made by a <a
				href="https://ivanchromjak.com/">human</a> somewhere on the planet earth.</div>
	</div>
</footer>

<script src="js/awesomplete.js"></script>
<script src="js/custom.js"></script>


</body>

</html>