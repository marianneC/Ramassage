<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_61417b920649c02a1e2a1b648497146b57f1b1ff0c83ecb5448b6796678ba3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_215426e10b5723e0a51d5be1283a9622d777a4b1849d0d4d4cc8e336f95bcc00 = $this->env->getExtension("native_profiler");
        $__internal_215426e10b5723e0a51d5be1283a9622d777a4b1849d0d4d4cc8e336f95bcc00->enter($__internal_215426e10b5723e0a51d5be1283a9622d777a4b1849d0d4d4cc8e336f95bcc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_215426e10b5723e0a51d5be1283a9622d777a4b1849d0d4d4cc8e336f95bcc00->leave($__internal_215426e10b5723e0a51d5be1283a9622d777a4b1849d0d4d4cc8e336f95bcc00_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_62ea48167eee3144b79d3f04adf7f81313fe9529c604d4d80bfa9231f17f6cd2 = $this->env->getExtension("native_profiler");
        $__internal_62ea48167eee3144b79d3f04adf7f81313fe9529c604d4d80bfa9231f17f6cd2->enter($__internal_62ea48167eee3144b79d3f04adf7f81313fe9529c604d4d80bfa9231f17f6cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_62ea48167eee3144b79d3f04adf7f81313fe9529c604d4d80bfa9231f17f6cd2->leave($__internal_62ea48167eee3144b79d3f04adf7f81313fe9529c604d4d80bfa9231f17f6cd2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b0fdbdc7586af9425ea2040cce2d5d3cf5b337ae6df6a5e840cf14d5fce77929 = $this->env->getExtension("native_profiler");
        $__internal_b0fdbdc7586af9425ea2040cce2d5d3cf5b337ae6df6a5e840cf14d5fce77929->enter($__internal_b0fdbdc7586af9425ea2040cce2d5d3cf5b337ae6df6a5e840cf14d5fce77929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b0fdbdc7586af9425ea2040cce2d5d3cf5b337ae6df6a5e840cf14d5fce77929->leave($__internal_b0fdbdc7586af9425ea2040cce2d5d3cf5b337ae6df6a5e840cf14d5fce77929_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9170404cb28f667f54ce7c5fe8ea8f1098b5589863efff9fc1e4c9dd5ef263dc = $this->env->getExtension("native_profiler");
        $__internal_9170404cb28f667f54ce7c5fe8ea8f1098b5589863efff9fc1e4c9dd5ef263dc->enter($__internal_9170404cb28f667f54ce7c5fe8ea8f1098b5589863efff9fc1e4c9dd5ef263dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9170404cb28f667f54ce7c5fe8ea8f1098b5589863efff9fc1e4c9dd5ef263dc->leave($__internal_9170404cb28f667f54ce7c5fe8ea8f1098b5589863efff9fc1e4c9dd5ef263dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
