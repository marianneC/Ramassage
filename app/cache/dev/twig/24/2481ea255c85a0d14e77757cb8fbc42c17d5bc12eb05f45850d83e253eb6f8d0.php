<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6d0512bdb29107a0d56cf448774bc730dec66b846142926883a0d07ee6217026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_bad765d9648140c7a4a1f886889b22c564f9da619c53694784aacee81949293f = $this->env->getExtension("native_profiler");
        $__internal_bad765d9648140c7a4a1f886889b22c564f9da619c53694784aacee81949293f->enter($__internal_bad765d9648140c7a4a1f886889b22c564f9da619c53694784aacee81949293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad765d9648140c7a4a1f886889b22c564f9da619c53694784aacee81949293f->leave($__internal_bad765d9648140c7a4a1f886889b22c564f9da619c53694784aacee81949293f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1796c99787f41ae09dddee6f7127674c44c669a995dc3fc86c6d38e6b435a53 = $this->env->getExtension("native_profiler");
        $__internal_b1796c99787f41ae09dddee6f7127674c44c669a995dc3fc86c6d38e6b435a53->enter($__internal_b1796c99787f41ae09dddee6f7127674c44c669a995dc3fc86c6d38e6b435a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b1796c99787f41ae09dddee6f7127674c44c669a995dc3fc86c6d38e6b435a53->leave($__internal_b1796c99787f41ae09dddee6f7127674c44c669a995dc3fc86c6d38e6b435a53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
