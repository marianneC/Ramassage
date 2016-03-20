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
        $__internal_408369a76038a8089a4540b277d4c716f34f03e050f565d370c6571aecb32955 = $this->env->getExtension("native_profiler");
        $__internal_408369a76038a8089a4540b277d4c716f34f03e050f565d370c6571aecb32955->enter($__internal_408369a76038a8089a4540b277d4c716f34f03e050f565d370c6571aecb32955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408369a76038a8089a4540b277d4c716f34f03e050f565d370c6571aecb32955->leave($__internal_408369a76038a8089a4540b277d4c716f34f03e050f565d370c6571aecb32955_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b25940dd385c382636028b9abd927a5eefe7c2d9020a0ae9b62be61c72d00f1c = $this->env->getExtension("native_profiler");
        $__internal_b25940dd385c382636028b9abd927a5eefe7c2d9020a0ae9b62be61c72d00f1c->enter($__internal_b25940dd385c382636028b9abd927a5eefe7c2d9020a0ae9b62be61c72d00f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b25940dd385c382636028b9abd927a5eefe7c2d9020a0ae9b62be61c72d00f1c->leave($__internal_b25940dd385c382636028b9abd927a5eefe7c2d9020a0ae9b62be61c72d00f1c_prof);

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
