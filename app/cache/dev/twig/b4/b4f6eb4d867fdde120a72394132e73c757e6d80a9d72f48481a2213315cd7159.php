<?php

/* CCIRamScoBundle:Yasmina/Resetting:email.txt.twig */
class __TwigTemplate_077deb3c443d3f08b5f3d6f55c58d8666df1a7c1046fb41bc74e2d2a3936a600 extends Twig_Template
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
        $__internal_d1e6b3b8f66c4b15c3b9029b349344a054d91ee570afa90b40f6f4b913582b81 = $this->env->getExtension("native_profiler");
        $__internal_d1e6b3b8f66c4b15c3b9029b349344a054d91ee570afa90b40f6f4b913582b81->enter($__internal_d1e6b3b8f66c4b15c3b9029b349344a054d91ee570afa90b40f6f4b913582b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d1e6b3b8f66c4b15c3b9029b349344a054d91ee570afa90b40f6f4b913582b81->leave($__internal_d1e6b3b8f66c4b15c3b9029b349344a054d91ee570afa90b40f6f4b913582b81_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7aba47b4f3745bcc7b753c4b749e731ce1aef14bf001b20de07f4d3e4d313ba5 = $this->env->getExtension("native_profiler");
        $__internal_7aba47b4f3745bcc7b753c4b749e731ce1aef14bf001b20de07f4d3e4d313ba5->enter($__internal_7aba47b4f3745bcc7b753c4b749e731ce1aef14bf001b20de07f4d3e4d313ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7aba47b4f3745bcc7b753c4b749e731ce1aef14bf001b20de07f4d3e4d313ba5->leave($__internal_7aba47b4f3745bcc7b753c4b749e731ce1aef14bf001b20de07f4d3e4d313ba5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3f2b79da3e92f0ac6e80ed0fc2fa119b1437b4917f4fbd5584cd06a29cdeb17e = $this->env->getExtension("native_profiler");
        $__internal_3f2b79da3e92f0ac6e80ed0fc2fa119b1437b4917f4fbd5584cd06a29cdeb17e->enter($__internal_3f2b79da3e92f0ac6e80ed0fc2fa119b1437b4917f4fbd5584cd06a29cdeb17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3f2b79da3e92f0ac6e80ed0fc2fa119b1437b4917f4fbd5584cd06a29cdeb17e->leave($__internal_3f2b79da3e92f0ac6e80ed0fc2fa119b1437b4917f4fbd5584cd06a29cdeb17e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_77d66b484e22ed1ecc9ac2f4043cbe5580757e07fb260c42bdbacfd11474ca2b = $this->env->getExtension("native_profiler");
        $__internal_77d66b484e22ed1ecc9ac2f4043cbe5580757e07fb260c42bdbacfd11474ca2b->enter($__internal_77d66b484e22ed1ecc9ac2f4043cbe5580757e07fb260c42bdbacfd11474ca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_77d66b484e22ed1ecc9ac2f4043cbe5580757e07fb260c42bdbacfd11474ca2b->leave($__internal_77d66b484e22ed1ecc9ac2f4043cbe5580757e07fb260c42bdbacfd11474ca2b_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
