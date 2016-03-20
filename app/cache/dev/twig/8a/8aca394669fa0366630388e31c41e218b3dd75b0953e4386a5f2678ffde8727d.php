<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_72d70dc2adf43846d399ad64cc6682e19da860b9b3237e787a6f75fad115026d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7844e89e1321e7b57c098b4e5b8e00d312810bfdc4e710e57bb65633f0bd562a = $this->env->getExtension("native_profiler");
        $__internal_7844e89e1321e7b57c098b4e5b8e00d312810bfdc4e710e57bb65633f0bd562a->enter($__internal_7844e89e1321e7b57c098b4e5b8e00d312810bfdc4e710e57bb65633f0bd562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7844e89e1321e7b57c098b4e5b8e00d312810bfdc4e710e57bb65633f0bd562a->leave($__internal_7844e89e1321e7b57c098b4e5b8e00d312810bfdc4e710e57bb65633f0bd562a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd82f29e029af848691f52e6160c777a9fad57581612befcaccb545b75d74055 = $this->env->getExtension("native_profiler");
        $__internal_dd82f29e029af848691f52e6160c777a9fad57581612befcaccb545b75d74055->enter($__internal_dd82f29e029af848691f52e6160c777a9fad57581612befcaccb545b75d74055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dd82f29e029af848691f52e6160c777a9fad57581612befcaccb545b75d74055->leave($__internal_dd82f29e029af848691f52e6160c777a9fad57581612befcaccb545b75d74055_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
