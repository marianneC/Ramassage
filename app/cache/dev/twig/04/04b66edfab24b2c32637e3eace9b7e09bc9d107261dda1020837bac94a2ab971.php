<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_c1ed0d359c886bc018b3b620ba565bf435c433b86b9de504c9367fa077239e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_fdbd89b6b569889262fd8a492a7963024ab0b1512cae74c95f08c8b0f8741b68 = $this->env->getExtension("native_profiler");
        $__internal_fdbd89b6b569889262fd8a492a7963024ab0b1512cae74c95f08c8b0f8741b68->enter($__internal_fdbd89b6b569889262fd8a492a7963024ab0b1512cae74c95f08c8b0f8741b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdbd89b6b569889262fd8a492a7963024ab0b1512cae74c95f08c8b0f8741b68->leave($__internal_fdbd89b6b569889262fd8a492a7963024ab0b1512cae74c95f08c8b0f8741b68_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3488981f2630fa0c45ec1bea530b530de1bbbd190d158c7548fa9f997f3068e6 = $this->env->getExtension("native_profiler");
        $__internal_3488981f2630fa0c45ec1bea530b530de1bbbd190d158c7548fa9f997f3068e6->enter($__internal_3488981f2630fa0c45ec1bea530b530de1bbbd190d158c7548fa9f997f3068e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3488981f2630fa0c45ec1bea530b530de1bbbd190d158c7548fa9f997f3068e6->leave($__internal_3488981f2630fa0c45ec1bea530b530de1bbbd190d158c7548fa9f997f3068e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
