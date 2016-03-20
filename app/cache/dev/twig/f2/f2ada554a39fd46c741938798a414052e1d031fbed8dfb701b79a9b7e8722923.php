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
        $__internal_9aad478c1ae679714bb39bd7bde48cfcdf410adc8319a2e9205c6cf9a031055a = $this->env->getExtension("native_profiler");
        $__internal_9aad478c1ae679714bb39bd7bde48cfcdf410adc8319a2e9205c6cf9a031055a->enter($__internal_9aad478c1ae679714bb39bd7bde48cfcdf410adc8319a2e9205c6cf9a031055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9aad478c1ae679714bb39bd7bde48cfcdf410adc8319a2e9205c6cf9a031055a->leave($__internal_9aad478c1ae679714bb39bd7bde48cfcdf410adc8319a2e9205c6cf9a031055a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e5e3666b47aba39891537f6bc43c3cd87e2eb8e3d2b64fab03337c1828f6a59 = $this->env->getExtension("native_profiler");
        $__internal_2e5e3666b47aba39891537f6bc43c3cd87e2eb8e3d2b64fab03337c1828f6a59->enter($__internal_2e5e3666b47aba39891537f6bc43c3cd87e2eb8e3d2b64fab03337c1828f6a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2e5e3666b47aba39891537f6bc43c3cd87e2eb8e3d2b64fab03337c1828f6a59->leave($__internal_2e5e3666b47aba39891537f6bc43c3cd87e2eb8e3d2b64fab03337c1828f6a59_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e074363f1c78076df7da8dc40c5585f4530638d94c62d0e83359e5adee78835f = $this->env->getExtension("native_profiler");
        $__internal_e074363f1c78076df7da8dc40c5585f4530638d94c62d0e83359e5adee78835f->enter($__internal_e074363f1c78076df7da8dc40c5585f4530638d94c62d0e83359e5adee78835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e074363f1c78076df7da8dc40c5585f4530638d94c62d0e83359e5adee78835f->leave($__internal_e074363f1c78076df7da8dc40c5585f4530638d94c62d0e83359e5adee78835f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_33ed4f62f690fa8a9b1285745add3706997e69aa843945d8ddbd31ef3af13cf5 = $this->env->getExtension("native_profiler");
        $__internal_33ed4f62f690fa8a9b1285745add3706997e69aa843945d8ddbd31ef3af13cf5->enter($__internal_33ed4f62f690fa8a9b1285745add3706997e69aa843945d8ddbd31ef3af13cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_33ed4f62f690fa8a9b1285745add3706997e69aa843945d8ddbd31ef3af13cf5->leave($__internal_33ed4f62f690fa8a9b1285745add3706997e69aa843945d8ddbd31ef3af13cf5_prof);

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
