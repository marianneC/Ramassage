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
        $__internal_b3c41e26eee5a032bee5d8e8e81fe2c56b67f054d9883144c1ae710dd0abff4f = $this->env->getExtension("native_profiler");
        $__internal_b3c41e26eee5a032bee5d8e8e81fe2c56b67f054d9883144c1ae710dd0abff4f->enter($__internal_b3c41e26eee5a032bee5d8e8e81fe2c56b67f054d9883144c1ae710dd0abff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c41e26eee5a032bee5d8e8e81fe2c56b67f054d9883144c1ae710dd0abff4f->leave($__internal_b3c41e26eee5a032bee5d8e8e81fe2c56b67f054d9883144c1ae710dd0abff4f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea3418299cefc55c3891c46df0d7da0097e194dfeb12720631922f3be1cd84af = $this->env->getExtension("native_profiler");
        $__internal_ea3418299cefc55c3891c46df0d7da0097e194dfeb12720631922f3be1cd84af->enter($__internal_ea3418299cefc55c3891c46df0d7da0097e194dfeb12720631922f3be1cd84af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ea3418299cefc55c3891c46df0d7da0097e194dfeb12720631922f3be1cd84af->leave($__internal_ea3418299cefc55c3891c46df0d7da0097e194dfeb12720631922f3be1cd84af_prof);

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
