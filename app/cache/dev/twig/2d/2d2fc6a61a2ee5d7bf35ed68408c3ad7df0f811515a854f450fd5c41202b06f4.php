<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6a6c519ef686953b6397acbf74740508f90268b159304acd36118dc561c0c6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0b9871fc186b937f821393c571240594402cac1dc517f77535c9b33c7c8ef295 = $this->env->getExtension("native_profiler");
        $__internal_0b9871fc186b937f821393c571240594402cac1dc517f77535c9b33c7c8ef295->enter($__internal_0b9871fc186b937f821393c571240594402cac1dc517f77535c9b33c7c8ef295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b9871fc186b937f821393c571240594402cac1dc517f77535c9b33c7c8ef295->leave($__internal_0b9871fc186b937f821393c571240594402cac1dc517f77535c9b33c7c8ef295_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9390e921f82919745e8cbc7ed14991279f19cbffd55bafd2fa0ce397725ea19a = $this->env->getExtension("native_profiler");
        $__internal_9390e921f82919745e8cbc7ed14991279f19cbffd55bafd2fa0ce397725ea19a->enter($__internal_9390e921f82919745e8cbc7ed14991279f19cbffd55bafd2fa0ce397725ea19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9390e921f82919745e8cbc7ed14991279f19cbffd55bafd2fa0ce397725ea19a->leave($__internal_9390e921f82919745e8cbc7ed14991279f19cbffd55bafd2fa0ce397725ea19a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
