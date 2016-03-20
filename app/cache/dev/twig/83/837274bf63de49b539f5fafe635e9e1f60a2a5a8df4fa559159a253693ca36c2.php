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
        $__internal_0be609d005a9f4684db28fcae38d9ac0ceaa076b20aad5efe9a70e0c18ea0cd9 = $this->env->getExtension("native_profiler");
        $__internal_0be609d005a9f4684db28fcae38d9ac0ceaa076b20aad5efe9a70e0c18ea0cd9->enter($__internal_0be609d005a9f4684db28fcae38d9ac0ceaa076b20aad5efe9a70e0c18ea0cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be609d005a9f4684db28fcae38d9ac0ceaa076b20aad5efe9a70e0c18ea0cd9->leave($__internal_0be609d005a9f4684db28fcae38d9ac0ceaa076b20aad5efe9a70e0c18ea0cd9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7af2d8ba58c16b980bb65ac4c888bcb103c002383be152956019ded5b1c7c364 = $this->env->getExtension("native_profiler");
        $__internal_7af2d8ba58c16b980bb65ac4c888bcb103c002383be152956019ded5b1c7c364->enter($__internal_7af2d8ba58c16b980bb65ac4c888bcb103c002383be152956019ded5b1c7c364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7af2d8ba58c16b980bb65ac4c888bcb103c002383be152956019ded5b1c7c364->leave($__internal_7af2d8ba58c16b980bb65ac4c888bcb103c002383be152956019ded5b1c7c364_prof);

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
