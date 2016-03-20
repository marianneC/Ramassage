<?php

/* CCIRamScoBundle:Yasmina/Group:show.html.twig */
class __TwigTemplate_ebdc894c6d0417f185fbc081e061672b0f9043136bc22a96b5f5ee9c4a20b90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Group:show.html.twig", 1);
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
        $__internal_27ed53f21bdb1609b9e72e347456616f75e9b8fbf66f45a1753e222eb0f46d0f = $this->env->getExtension("native_profiler");
        $__internal_27ed53f21bdb1609b9e72e347456616f75e9b8fbf66f45a1753e222eb0f46d0f->enter($__internal_27ed53f21bdb1609b9e72e347456616f75e9b8fbf66f45a1753e222eb0f46d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ed53f21bdb1609b9e72e347456616f75e9b8fbf66f45a1753e222eb0f46d0f->leave($__internal_27ed53f21bdb1609b9e72e347456616f75e9b8fbf66f45a1753e222eb0f46d0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_942b5d77b39283c41d59d50bdf283baea749e9d74d99a5ef202fb4d9244dba5a = $this->env->getExtension("native_profiler");
        $__internal_942b5d77b39283c41d59d50bdf283baea749e9d74d99a5ef202fb4d9244dba5a->enter($__internal_942b5d77b39283c41d59d50bdf283baea749e9d74d99a5ef202fb4d9244dba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "CCIRamScoBundle:Yasmina/Group:show.html.twig", 4)->display($context);
        
        $__internal_942b5d77b39283c41d59d50bdf283baea749e9d74d99a5ef202fb4d9244dba5a->leave($__internal_942b5d77b39283c41d59d50bdf283baea749e9d74d99a5ef202fb4d9244dba5a_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Group:show.html.twig";
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
