<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_96b013638dc8d1ae405978c5525e0113d5971675791e0aeb2bfad6822a7c07c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_eadc1ea035f63f049b10ee1ce368b9a47817e98ed92f9643541c8ca528882c7c = $this->env->getExtension("native_profiler");
        $__internal_eadc1ea035f63f049b10ee1ce368b9a47817e98ed92f9643541c8ca528882c7c->enter($__internal_eadc1ea035f63f049b10ee1ce368b9a47817e98ed92f9643541c8ca528882c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eadc1ea035f63f049b10ee1ce368b9a47817e98ed92f9643541c8ca528882c7c->leave($__internal_eadc1ea035f63f049b10ee1ce368b9a47817e98ed92f9643541c8ca528882c7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dfa230ab588b5a0d96264a6b5a0b5bde86aa9fe75bf850bae208346dee57cd2 = $this->env->getExtension("native_profiler");
        $__internal_0dfa230ab588b5a0d96264a6b5a0b5bde86aa9fe75bf850bae208346dee57cd2->enter($__internal_0dfa230ab588b5a0d96264a6b5a0b5bde86aa9fe75bf850bae208346dee57cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0dfa230ab588b5a0d96264a6b5a0b5bde86aa9fe75bf850bae208346dee57cd2->leave($__internal_0dfa230ab588b5a0d96264a6b5a0b5bde86aa9fe75bf850bae208346dee57cd2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
