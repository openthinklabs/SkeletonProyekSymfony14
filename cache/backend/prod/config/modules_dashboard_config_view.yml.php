<?php
// auto-generated by sfViewConfigHandler
// date: 2014/10/09 23:56:25
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Adhi Persada Properti', false, false);
  $response->addMeta('description', 'Adhi Persada Properti', false, false);
  $response->addMeta('keywords', 'Adhi Persada Properti', false, false);
  $response->addMeta('language', 'id', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('navbar-fixed-top.css', '', array ());
  $response->addStylesheet('font-awesome.min.css', '', array ());
  $response->addJavascript('html5shiv.min.js', '', array ());
  $response->addJavascript('respond.min.js', '', array ());
  $response->addJavascript('jquery.min.js', '', array ());
  $response->addJavascript('bootstrap.min.js', '', array ());


