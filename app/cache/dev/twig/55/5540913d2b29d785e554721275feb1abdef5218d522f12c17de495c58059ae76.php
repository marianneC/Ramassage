<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_747e969167bd9e200d0af87f195aa5909bdeae9cca847e0d31750c1fa5f2ce50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf85bcdc55a8dd12120791ff278278f38f24caeb2ef4ec98e6435f0b8d068d30 = $this->env->getExtension("native_profiler");
        $__internal_cf85bcdc55a8dd12120791ff278278f38f24caeb2ef4ec98e6435f0b8d068d30->enter($__internal_cf85bcdc55a8dd12120791ff278278f38f24caeb2ef4ec98e6435f0b8d068d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf85bcdc55a8dd12120791ff278278f38f24caeb2ef4ec98e6435f0b8d068d30->leave($__internal_cf85bcdc55a8dd12120791ff278278f38f24caeb2ef4ec98e6435f0b8d068d30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2a7f9c04aaf83fb85832c84b00ee4a7db9218a004cefcbceb9773242a46ed76 = $this->env->getExtension("native_profiler");
        $__internal_e2a7f9c04aaf83fb85832c84b00ee4a7db9218a004cefcbceb9773242a46ed76->enter($__internal_e2a7f9c04aaf83fb85832c84b00ee4a7db9218a004cefcbceb9773242a46ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e2a7f9c04aaf83fb85832c84b00ee4a7db9218a004cefcbceb9773242a46ed76->leave($__internal_e2a7f9c04aaf83fb85832c84b00ee4a7db9218a004cefcbceb9773242a46ed76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
