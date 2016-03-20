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
        $__internal_79ced2bb08f61c2ae017199646ff04f928e73e5b09130a3884435278aa496eec = $this->env->getExtension("native_profiler");
        $__internal_79ced2bb08f61c2ae017199646ff04f928e73e5b09130a3884435278aa496eec->enter($__internal_79ced2bb08f61c2ae017199646ff04f928e73e5b09130a3884435278aa496eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ced2bb08f61c2ae017199646ff04f928e73e5b09130a3884435278aa496eec->leave($__internal_79ced2bb08f61c2ae017199646ff04f928e73e5b09130a3884435278aa496eec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a2b2fee737f5665be9545ef4dd9d04ba44185931f1bbe2dd85a3eccaff069c6 = $this->env->getExtension("native_profiler");
        $__internal_9a2b2fee737f5665be9545ef4dd9d04ba44185931f1bbe2dd85a3eccaff069c6->enter($__internal_9a2b2fee737f5665be9545ef4dd9d04ba44185931f1bbe2dd85a3eccaff069c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9a2b2fee737f5665be9545ef4dd9d04ba44185931f1bbe2dd85a3eccaff069c6->leave($__internal_9a2b2fee737f5665be9545ef4dd9d04ba44185931f1bbe2dd85a3eccaff069c6_prof);

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
