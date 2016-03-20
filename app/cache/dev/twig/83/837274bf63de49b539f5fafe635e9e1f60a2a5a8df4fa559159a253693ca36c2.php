<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_0e2bef6ce1353d67c112cb341c69f761c7460cebe243930e7655481792784273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_757658e8dd83190683522213ea8052fd465b272ff242f30f51d3a6175c2ac949 = $this->env->getExtension("native_profiler");
        $__internal_757658e8dd83190683522213ea8052fd465b272ff242f30f51d3a6175c2ac949->enter($__internal_757658e8dd83190683522213ea8052fd465b272ff242f30f51d3a6175c2ac949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757658e8dd83190683522213ea8052fd465b272ff242f30f51d3a6175c2ac949->leave($__internal_757658e8dd83190683522213ea8052fd465b272ff242f30f51d3a6175c2ac949_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d46cff7932a9d8c0c6ecdd50ad6c41699d09ac1249cfb10d864a2b1c2e3fca8 = $this->env->getExtension("native_profiler");
        $__internal_4d46cff7932a9d8c0c6ecdd50ad6c41699d09ac1249cfb10d864a2b1c2e3fca8->enter($__internal_4d46cff7932a9d8c0c6ecdd50ad6c41699d09ac1249cfb10d864a2b1c2e3fca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4d46cff7932a9d8c0c6ecdd50ad6c41699d09ac1249cfb10d864a2b1c2e3fca8->leave($__internal_4d46cff7932a9d8c0c6ecdd50ad6c41699d09ac1249cfb10d864a2b1c2e3fca8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
