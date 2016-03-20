<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9bd75a5cddb7a21f5bcfc204b5b2a77b0b75e3580149212dee21a13d4cc86548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f6eb8c00f15942bfc3456e6c54ccdd50a4d8902712df507152ad1c776eac9769 = $this->env->getExtension("native_profiler");
        $__internal_f6eb8c00f15942bfc3456e6c54ccdd50a4d8902712df507152ad1c776eac9769->enter($__internal_f6eb8c00f15942bfc3456e6c54ccdd50a4d8902712df507152ad1c776eac9769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6eb8c00f15942bfc3456e6c54ccdd50a4d8902712df507152ad1c776eac9769->leave($__internal_f6eb8c00f15942bfc3456e6c54ccdd50a4d8902712df507152ad1c776eac9769_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5becfe1dbbcce59810103e32fb6ed1765c1aebb07210fefa4ad91a79775f6c53 = $this->env->getExtension("native_profiler");
        $__internal_5becfe1dbbcce59810103e32fb6ed1765c1aebb07210fefa4ad91a79775f6c53->enter($__internal_5becfe1dbbcce59810103e32fb6ed1765c1aebb07210fefa4ad91a79775f6c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5becfe1dbbcce59810103e32fb6ed1765c1aebb07210fefa4ad91a79775f6c53->leave($__internal_5becfe1dbbcce59810103e32fb6ed1765c1aebb07210fefa4ad91a79775f6c53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
