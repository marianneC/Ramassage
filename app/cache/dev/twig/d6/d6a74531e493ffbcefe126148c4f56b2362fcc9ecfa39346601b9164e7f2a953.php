<?php

/* @CCIRamSco/Yasmina/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_07b198df7608d628ca3a2300b5912046dc06cfff2418514d566177eeced790e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fb017d0616bee54d8c55747f6663bfc2914e768e343bf9080981b8638155e0b7 = $this->env->getExtension("native_profiler");
        $__internal_fb017d0616bee54d8c55747f6663bfc2914e768e343bf9080981b8638155e0b7->enter($__internal_fb017d0616bee54d8c55747f6663bfc2914e768e343bf9080981b8638155e0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb017d0616bee54d8c55747f6663bfc2914e768e343bf9080981b8638155e0b7->leave($__internal_fb017d0616bee54d8c55747f6663bfc2914e768e343bf9080981b8638155e0b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a47a47b97fb28da9dcf0bea8ac64fb1325589a1fe23c472635d2ab1aec71583 = $this->env->getExtension("native_profiler");
        $__internal_2a47a47b97fb28da9dcf0bea8ac64fb1325589a1fe23c472635d2ab1aec71583->enter($__internal_2a47a47b97fb28da9dcf0bea8ac64fb1325589a1fe23c472635d2ab1aec71583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2a47a47b97fb28da9dcf0bea8ac64fb1325589a1fe23c472635d2ab1aec71583->leave($__internal_2a47a47b97fb28da9dcf0bea8ac64fb1325589a1fe23c472635d2ab1aec71583_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
