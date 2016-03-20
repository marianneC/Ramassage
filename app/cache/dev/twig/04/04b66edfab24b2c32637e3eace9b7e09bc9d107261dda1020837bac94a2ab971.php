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
        $__internal_cfbac6b04f3481a256f46aa98eff2c48b36f9431ac62cbf73e9862a7729607a3 = $this->env->getExtension("native_profiler");
        $__internal_cfbac6b04f3481a256f46aa98eff2c48b36f9431ac62cbf73e9862a7729607a3->enter($__internal_cfbac6b04f3481a256f46aa98eff2c48b36f9431ac62cbf73e9862a7729607a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbac6b04f3481a256f46aa98eff2c48b36f9431ac62cbf73e9862a7729607a3->leave($__internal_cfbac6b04f3481a256f46aa98eff2c48b36f9431ac62cbf73e9862a7729607a3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40465b5f6166aa9212e8d639de8bb7820e70ec1e17991d31c6706513853c2c40 = $this->env->getExtension("native_profiler");
        $__internal_40465b5f6166aa9212e8d639de8bb7820e70ec1e17991d31c6706513853c2c40->enter($__internal_40465b5f6166aa9212e8d639de8bb7820e70ec1e17991d31c6706513853c2c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_40465b5f6166aa9212e8d639de8bb7820e70ec1e17991d31c6706513853c2c40->leave($__internal_40465b5f6166aa9212e8d639de8bb7820e70ec1e17991d31c6706513853c2c40_prof);

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
