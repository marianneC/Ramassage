<?php

/* CCIRamScoBundle:Yasmina/Registration:checkEmail.html.twig */
class __TwigTemplate_10d28cd1eb82196539af302f46b522ff48e1c4eee2069d85fee1d05c24e5f858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Registration:checkEmail.html.twig", 1);
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
        $__internal_f16ee93dba0ebb2e225137bf5201b1344e47e8b4befb5dbe7ad88ae32c5ee9cd = $this->env->getExtension("native_profiler");
        $__internal_f16ee93dba0ebb2e225137bf5201b1344e47e8b4befb5dbe7ad88ae32c5ee9cd->enter($__internal_f16ee93dba0ebb2e225137bf5201b1344e47e8b4befb5dbe7ad88ae32c5ee9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16ee93dba0ebb2e225137bf5201b1344e47e8b4befb5dbe7ad88ae32c5ee9cd->leave($__internal_f16ee93dba0ebb2e225137bf5201b1344e47e8b4befb5dbe7ad88ae32c5ee9cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1d6ba821428d3e6b0b63d570ba4b71cbc6a076b7bc73aac8c2d66857036055f = $this->env->getExtension("native_profiler");
        $__internal_b1d6ba821428d3e6b0b63d570ba4b71cbc6a076b7bc73aac8c2d66857036055f->enter($__internal_b1d6ba821428d3e6b0b63d570ba4b71cbc6a076b7bc73aac8c2d66857036055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b1d6ba821428d3e6b0b63d570ba4b71cbc6a076b7bc73aac8c2d66857036055f->leave($__internal_b1d6ba821428d3e6b0b63d570ba4b71cbc6a076b7bc73aac8c2d66857036055f_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Registration:checkEmail.html.twig";
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
