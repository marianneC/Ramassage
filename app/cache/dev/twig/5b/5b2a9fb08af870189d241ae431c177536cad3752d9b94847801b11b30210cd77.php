<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b310e4230853e78fcfa7b4421bf48fcd79cbecf212a9a74aa6b85f4a27caaf27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_b98b35e195da8eec27b8488e6fc339dfc3c7814ee1d07822da0f4529a92b725f = $this->env->getExtension("native_profiler");
        $__internal_b98b35e195da8eec27b8488e6fc339dfc3c7814ee1d07822da0f4529a92b725f->enter($__internal_b98b35e195da8eec27b8488e6fc339dfc3c7814ee1d07822da0f4529a92b725f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b98b35e195da8eec27b8488e6fc339dfc3c7814ee1d07822da0f4529a92b725f->leave($__internal_b98b35e195da8eec27b8488e6fc339dfc3c7814ee1d07822da0f4529a92b725f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b7a7d37dda9477b08a32478c5f5686059037d23d6e927d4d3269c4da58d5d68 = $this->env->getExtension("native_profiler");
        $__internal_0b7a7d37dda9477b08a32478c5f5686059037d23d6e927d4d3269c4da58d5d68->enter($__internal_0b7a7d37dda9477b08a32478c5f5686059037d23d6e927d4d3269c4da58d5d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0b7a7d37dda9477b08a32478c5f5686059037d23d6e927d4d3269c4da58d5d68->leave($__internal_0b7a7d37dda9477b08a32478c5f5686059037d23d6e927d4d3269c4da58d5d68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
