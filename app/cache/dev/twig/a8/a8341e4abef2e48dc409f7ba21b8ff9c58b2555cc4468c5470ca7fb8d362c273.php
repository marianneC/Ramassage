<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c5b99b3ea55cc47ad0228dc2c4d61b303b23e38c84f85e8d5dc5f74c93ea9451 extends Twig_Template
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
        $__internal_37d8961da0b0b3fcaa8cfdfa68174bf4ce1152e29d8e0018060111a77ba467d9 = $this->env->getExtension("native_profiler");
        $__internal_37d8961da0b0b3fcaa8cfdfa68174bf4ce1152e29d8e0018060111a77ba467d9->enter($__internal_37d8961da0b0b3fcaa8cfdfa68174bf4ce1152e29d8e0018060111a77ba467d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_37d8961da0b0b3fcaa8cfdfa68174bf4ce1152e29d8e0018060111a77ba467d9->leave($__internal_37d8961da0b0b3fcaa8cfdfa68174bf4ce1152e29d8e0018060111a77ba467d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
