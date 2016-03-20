<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_25059279e5afa23b7ecef34f39eb5a09dd321ecf956158b85ea3e5d48288a677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8abc3f3da09c0d6dad437ce21fe423601a6637de828548b4f5ad688f0de077cb = $this->env->getExtension("native_profiler");
        $__internal_8abc3f3da09c0d6dad437ce21fe423601a6637de828548b4f5ad688f0de077cb->enter($__internal_8abc3f3da09c0d6dad437ce21fe423601a6637de828548b4f5ad688f0de077cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abc3f3da09c0d6dad437ce21fe423601a6637de828548b4f5ad688f0de077cb->leave($__internal_8abc3f3da09c0d6dad437ce21fe423601a6637de828548b4f5ad688f0de077cb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a2be90a9705e3c8c0efa8c7e3c4c62609ce39649b3d130a786b64462456ba43 = $this->env->getExtension("native_profiler");
        $__internal_6a2be90a9705e3c8c0efa8c7e3c4c62609ce39649b3d130a786b64462456ba43->enter($__internal_6a2be90a9705e3c8c0efa8c7e3c4c62609ce39649b3d130a786b64462456ba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6a2be90a9705e3c8c0efa8c7e3c4c62609ce39649b3d130a786b64462456ba43->leave($__internal_6a2be90a9705e3c8c0efa8c7e3c4c62609ce39649b3d130a786b64462456ba43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
