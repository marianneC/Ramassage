<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_72d70dc2adf43846d399ad64cc6682e19da860b9b3237e787a6f75fad115026d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_42d6e52be7d007898a9a092f22d50495effc4aebdc1b1bf43fa56193ac82a68a = $this->env->getExtension("native_profiler");
        $__internal_42d6e52be7d007898a9a092f22d50495effc4aebdc1b1bf43fa56193ac82a68a->enter($__internal_42d6e52be7d007898a9a092f22d50495effc4aebdc1b1bf43fa56193ac82a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d6e52be7d007898a9a092f22d50495effc4aebdc1b1bf43fa56193ac82a68a->leave($__internal_42d6e52be7d007898a9a092f22d50495effc4aebdc1b1bf43fa56193ac82a68a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dcb915ba7c135b3ccc7ee38073d782bd3eed0e89b26d739042a4bdc5b2fa0f3 = $this->env->getExtension("native_profiler");
        $__internal_4dcb915ba7c135b3ccc7ee38073d782bd3eed0e89b26d739042a4bdc5b2fa0f3->enter($__internal_4dcb915ba7c135b3ccc7ee38073d782bd3eed0e89b26d739042a4bdc5b2fa0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4dcb915ba7c135b3ccc7ee38073d782bd3eed0e89b26d739042a4bdc5b2fa0f3->leave($__internal_4dcb915ba7c135b3ccc7ee38073d782bd3eed0e89b26d739042a4bdc5b2fa0f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
