<?php

/* @CCIRamSco/Yasmina/Registration/checkEmail.html.twig */
class __TwigTemplate_0bf4a03bf97bae8e1245b3e6b49e9e6cdcd5f3660de53d0ee59b606f3cffb46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Registration/checkEmail.html.twig", 1);
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
        $__internal_a21d7f5888d8d63f8e4df30c6d2dca2b44ac28e90a81a3b2592af354849566eb = $this->env->getExtension("native_profiler");
        $__internal_a21d7f5888d8d63f8e4df30c6d2dca2b44ac28e90a81a3b2592af354849566eb->enter($__internal_a21d7f5888d8d63f8e4df30c6d2dca2b44ac28e90a81a3b2592af354849566eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21d7f5888d8d63f8e4df30c6d2dca2b44ac28e90a81a3b2592af354849566eb->leave($__internal_a21d7f5888d8d63f8e4df30c6d2dca2b44ac28e90a81a3b2592af354849566eb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07038afb3561acc06d462aa6598e0cddc477257b300215b7d0509b560b9c9548 = $this->env->getExtension("native_profiler");
        $__internal_07038afb3561acc06d462aa6598e0cddc477257b300215b7d0509b560b9c9548->enter($__internal_07038afb3561acc06d462aa6598e0cddc477257b300215b7d0509b560b9c9548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_07038afb3561acc06d462aa6598e0cddc477257b300215b7d0509b560b9c9548->leave($__internal_07038afb3561acc06d462aa6598e0cddc477257b300215b7d0509b560b9c9548_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Registration/checkEmail.html.twig";
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
