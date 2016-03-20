<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a76c6d12c0a2c348ca032ddef1f291b1de084e56c1d63e20072dce1f75dfc5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_b45092ac2da078563194509e41deb395060362a33a55480610a90795e6e62654 = $this->env->getExtension("native_profiler");
        $__internal_b45092ac2da078563194509e41deb395060362a33a55480610a90795e6e62654->enter($__internal_b45092ac2da078563194509e41deb395060362a33a55480610a90795e6e62654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45092ac2da078563194509e41deb395060362a33a55480610a90795e6e62654->leave($__internal_b45092ac2da078563194509e41deb395060362a33a55480610a90795e6e62654_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_516bcbe84af6a378983db5ab4de75c14f6919168c6abb36a248eda533b1059c5 = $this->env->getExtension("native_profiler");
        $__internal_516bcbe84af6a378983db5ab4de75c14f6919168c6abb36a248eda533b1059c5->enter($__internal_516bcbe84af6a378983db5ab4de75c14f6919168c6abb36a248eda533b1059c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_516bcbe84af6a378983db5ab4de75c14f6919168c6abb36a248eda533b1059c5->leave($__internal_516bcbe84af6a378983db5ab4de75c14f6919168c6abb36a248eda533b1059c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
