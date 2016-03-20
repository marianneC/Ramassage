<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8922498e250329dfe90db404293ca86649b4d3b08bfe2fa692b979d3bd08539b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a4eed2a8f079d2e5c77e2bb73256bff5fbc48ff5dc74fe1843e25b40203bb19b = $this->env->getExtension("native_profiler");
        $__internal_a4eed2a8f079d2e5c77e2bb73256bff5fbc48ff5dc74fe1843e25b40203bb19b->enter($__internal_a4eed2a8f079d2e5c77e2bb73256bff5fbc48ff5dc74fe1843e25b40203bb19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4eed2a8f079d2e5c77e2bb73256bff5fbc48ff5dc74fe1843e25b40203bb19b->leave($__internal_a4eed2a8f079d2e5c77e2bb73256bff5fbc48ff5dc74fe1843e25b40203bb19b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0634964790dd0804476c246a18342ea2b3a4ac6b3105d0b4bead6380f43f9ef6 = $this->env->getExtension("native_profiler");
        $__internal_0634964790dd0804476c246a18342ea2b3a4ac6b3105d0b4bead6380f43f9ef6->enter($__internal_0634964790dd0804476c246a18342ea2b3a4ac6b3105d0b4bead6380f43f9ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0634964790dd0804476c246a18342ea2b3a4ac6b3105d0b4bead6380f43f9ef6->leave($__internal_0634964790dd0804476c246a18342ea2b3a4ac6b3105d0b4bead6380f43f9ef6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
