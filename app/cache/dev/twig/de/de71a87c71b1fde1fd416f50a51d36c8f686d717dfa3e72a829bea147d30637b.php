<?php

/* @CCIRamSco/Yasmina/Registration/confirmed.html.twig */
class __TwigTemplate_4389865f726589cfe7de1849f44272db158a03833215c9881941b6d2df01e777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Registration/confirmed.html.twig", 1);
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
        $__internal_5bd1f4f8a7e9ee5085da31cdcc68539d305adcc8d4be3e75f5c2abfc92651475 = $this->env->getExtension("native_profiler");
        $__internal_5bd1f4f8a7e9ee5085da31cdcc68539d305adcc8d4be3e75f5c2abfc92651475->enter($__internal_5bd1f4f8a7e9ee5085da31cdcc68539d305adcc8d4be3e75f5c2abfc92651475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd1f4f8a7e9ee5085da31cdcc68539d305adcc8d4be3e75f5c2abfc92651475->leave($__internal_5bd1f4f8a7e9ee5085da31cdcc68539d305adcc8d4be3e75f5c2abfc92651475_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad8383bd957e5f40a79ee31d73fb158028ea4c42776251c9f796e9f9fdade561 = $this->env->getExtension("native_profiler");
        $__internal_ad8383bd957e5f40a79ee31d73fb158028ea4c42776251c9f796e9f9fdade561->enter($__internal_ad8383bd957e5f40a79ee31d73fb158028ea4c42776251c9f796e9f9fdade561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ad8383bd957e5f40a79ee31d73fb158028ea4c42776251c9f796e9f9fdade561->leave($__internal_ad8383bd957e5f40a79ee31d73fb158028ea4c42776251c9f796e9f9fdade561_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Registration/confirmed.html.twig";
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
