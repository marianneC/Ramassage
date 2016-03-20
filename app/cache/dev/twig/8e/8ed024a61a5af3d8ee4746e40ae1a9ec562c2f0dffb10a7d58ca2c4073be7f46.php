<?php

/* @CCIRamSco/Yasmina/Group/list.html.twig */
class __TwigTemplate_cbceed676ce5fabbe562c4c0a9f2c5c532c0db6c3e9e840ab065b1961a562b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Group/list.html.twig", 1);
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
        $__internal_d496391aaab1412ad040b5a0c5d5bde250e089997f494938fb560bc9f7c7fca2 = $this->env->getExtension("native_profiler");
        $__internal_d496391aaab1412ad040b5a0c5d5bde250e089997f494938fb560bc9f7c7fca2->enter($__internal_d496391aaab1412ad040b5a0c5d5bde250e089997f494938fb560bc9f7c7fca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d496391aaab1412ad040b5a0c5d5bde250e089997f494938fb560bc9f7c7fca2->leave($__internal_d496391aaab1412ad040b5a0c5d5bde250e089997f494938fb560bc9f7c7fca2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f410dbe2dbc0bfa7e468239f72a3306b2e22d41b0629ebc76bcdb2be93dc949b = $this->env->getExtension("native_profiler");
        $__internal_f410dbe2dbc0bfa7e468239f72a3306b2e22d41b0629ebc76bcdb2be93dc949b->enter($__internal_f410dbe2dbc0bfa7e468239f72a3306b2e22d41b0629ebc76bcdb2be93dc949b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@CCIRamSco/Yasmina/Group/list.html.twig", 4)->display($context);
        
        $__internal_f410dbe2dbc0bfa7e468239f72a3306b2e22d41b0629ebc76bcdb2be93dc949b->leave($__internal_f410dbe2dbc0bfa7e468239f72a3306b2e22d41b0629ebc76bcdb2be93dc949b_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
