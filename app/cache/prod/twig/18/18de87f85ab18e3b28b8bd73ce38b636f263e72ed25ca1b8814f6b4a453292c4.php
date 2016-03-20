<?php

/* @CCIRamSco/layout.html.twig */
class __TwigTemplate_977319a76ace8330a5c90a94084ebcca6ee0b8be8e460c88ae0f7330fd5f8f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle:Yasmina:index.html.twig", "@CCIRamSco/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle:Yasmina:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Le tapis roulant";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@CCIRamSco/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  39 => 9,  36 => 8,  30 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle:Yasmina:index.html.twig" %}*/
/* */
/*   {% block title %}Le tapis roulant{% endblock %}*/
/*    */
/*     */
/*   */
/*   */
/*   {% block fos_user_content %}*/
/* {% block content %}*/
/* */
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
