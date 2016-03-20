<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e0161b0a2b539389e7346707b3e0fd0c2b4f25c5ac5e55a22d86e2caff052a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_8fef30c40c62b585f05d684016cc906723294a43992ed2d7a926f5b645752364 = $this->env->getExtension("native_profiler");
        $__internal_8fef30c40c62b585f05d684016cc906723294a43992ed2d7a926f5b645752364->enter($__internal_8fef30c40c62b585f05d684016cc906723294a43992ed2d7a926f5b645752364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fef30c40c62b585f05d684016cc906723294a43992ed2d7a926f5b645752364->leave($__internal_8fef30c40c62b585f05d684016cc906723294a43992ed2d7a926f5b645752364_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e41d6e451a165b955c4ade6b321b245e79ca54f93304e0dee15ef294d24c3ba = $this->env->getExtension("native_profiler");
        $__internal_7e41d6e451a165b955c4ade6b321b245e79ca54f93304e0dee15ef294d24c3ba->enter($__internal_7e41d6e451a165b955c4ade6b321b245e79ca54f93304e0dee15ef294d24c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_7e41d6e451a165b955c4ade6b321b245e79ca54f93304e0dee15ef294d24c3ba->leave($__internal_7e41d6e451a165b955c4ade6b321b245e79ca54f93304e0dee15ef294d24c3ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
