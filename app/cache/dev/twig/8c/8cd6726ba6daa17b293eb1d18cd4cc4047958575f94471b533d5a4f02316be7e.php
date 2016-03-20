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
        $__internal_ff0ec870c609f159ff71260e2cd78ea01ad382211d5c56c17c4fbcbf05d0c717 = $this->env->getExtension("native_profiler");
        $__internal_ff0ec870c609f159ff71260e2cd78ea01ad382211d5c56c17c4fbcbf05d0c717->enter($__internal_ff0ec870c609f159ff71260e2cd78ea01ad382211d5c56c17c4fbcbf05d0c717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0ec870c609f159ff71260e2cd78ea01ad382211d5c56c17c4fbcbf05d0c717->leave($__internal_ff0ec870c609f159ff71260e2cd78ea01ad382211d5c56c17c4fbcbf05d0c717_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b78d8f8bf655e9eb2b6b27f18f429908079d7109f719c3dc5545f6759e61fb2c = $this->env->getExtension("native_profiler");
        $__internal_b78d8f8bf655e9eb2b6b27f18f429908079d7109f719c3dc5545f6759e61fb2c->enter($__internal_b78d8f8bf655e9eb2b6b27f18f429908079d7109f719c3dc5545f6759e61fb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b78d8f8bf655e9eb2b6b27f18f429908079d7109f719c3dc5545f6759e61fb2c->leave($__internal_b78d8f8bf655e9eb2b6b27f18f429908079d7109f719c3dc5545f6759e61fb2c_prof);

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
