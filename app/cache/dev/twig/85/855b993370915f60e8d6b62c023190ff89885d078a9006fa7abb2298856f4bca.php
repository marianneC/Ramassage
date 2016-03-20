<?php

/* @CCIRamSco/Yasmina/Profile/show_content.html.twig */
class __TwigTemplate_db1197a00674765caf43706d2096acb17fb503d4f9eea2cfb73638e7529df5fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab206c970eb54dd2e6c8919cc68b265f4e305a5a91148b6be0b6eccbff0e60fb = $this->env->getExtension("native_profiler");
        $__internal_ab206c970eb54dd2e6c8919cc68b265f4e305a5a91148b6be0b6eccbff0e60fb->enter($__internal_ab206c970eb54dd2e6c8919cc68b265f4e305a5a91148b6be0b6eccbff0e60fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ab206c970eb54dd2e6c8919cc68b265f4e305a5a91148b6be0b6eccbff0e60fb->leave($__internal_ab206c970eb54dd2e6c8919cc68b265f4e305a5a91148b6be0b6eccbff0e60fb_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
