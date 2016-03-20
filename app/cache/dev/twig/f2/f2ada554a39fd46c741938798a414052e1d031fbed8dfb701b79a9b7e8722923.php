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
        $__internal_fc830e99fec25f605a8b043ae183f1517a6fcb6fb1ec981f95627ab0f5abbd71 = $this->env->getExtension("native_profiler");
        $__internal_fc830e99fec25f605a8b043ae183f1517a6fcb6fb1ec981f95627ab0f5abbd71->enter($__internal_fc830e99fec25f605a8b043ae183f1517a6fcb6fb1ec981f95627ab0f5abbd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc830e99fec25f605a8b043ae183f1517a6fcb6fb1ec981f95627ab0f5abbd71->leave($__internal_fc830e99fec25f605a8b043ae183f1517a6fcb6fb1ec981f95627ab0f5abbd71_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_82802fc5b01485ce9bed4dedc6e34aaf169e8163ef441d9531b882c8e5ca69f8 = $this->env->getExtension("native_profiler");
        $__internal_82802fc5b01485ce9bed4dedc6e34aaf169e8163ef441d9531b882c8e5ca69f8->enter($__internal_82802fc5b01485ce9bed4dedc6e34aaf169e8163ef441d9531b882c8e5ca69f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_82802fc5b01485ce9bed4dedc6e34aaf169e8163ef441d9531b882c8e5ca69f8->leave($__internal_82802fc5b01485ce9bed4dedc6e34aaf169e8163ef441d9531b882c8e5ca69f8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b9dd1b4e89191d0157ebaa8865a9f8bdbef5d62c8a69e1cc0ce4dab87a5f842a = $this->env->getExtension("native_profiler");
        $__internal_b9dd1b4e89191d0157ebaa8865a9f8bdbef5d62c8a69e1cc0ce4dab87a5f842a->enter($__internal_b9dd1b4e89191d0157ebaa8865a9f8bdbef5d62c8a69e1cc0ce4dab87a5f842a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b9dd1b4e89191d0157ebaa8865a9f8bdbef5d62c8a69e1cc0ce4dab87a5f842a->leave($__internal_b9dd1b4e89191d0157ebaa8865a9f8bdbef5d62c8a69e1cc0ce4dab87a5f842a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e29b7a2a9974bbdd8bfc584d7bf339db2d8cec09da66357f9f4f353fb1984ef3 = $this->env->getExtension("native_profiler");
        $__internal_e29b7a2a9974bbdd8bfc584d7bf339db2d8cec09da66357f9f4f353fb1984ef3->enter($__internal_e29b7a2a9974bbdd8bfc584d7bf339db2d8cec09da66357f9f4f353fb1984ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e29b7a2a9974bbdd8bfc584d7bf339db2d8cec09da66357f9f4f353fb1984ef3->leave($__internal_e29b7a2a9974bbdd8bfc584d7bf339db2d8cec09da66357f9f4f353fb1984ef3_prof);

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
