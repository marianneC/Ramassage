<?php

/* base.html.twig */
class __TwigTemplate_75800fd6a571a63a494279d55153b4bffff1992da019119ab83b5d957bec8f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c9f68258ef5a79fb28dbab13b26bdb2d51108532ba8331596ae623aa667cb6e = $this->env->getExtension("native_profiler");
        $__internal_2c9f68258ef5a79fb28dbab13b26bdb2d51108532ba8331596ae623aa667cb6e->enter($__internal_2c9f68258ef5a79fb28dbab13b26bdb2d51108532ba8331596ae623aa667cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2c9f68258ef5a79fb28dbab13b26bdb2d51108532ba8331596ae623aa667cb6e->leave($__internal_2c9f68258ef5a79fb28dbab13b26bdb2d51108532ba8331596ae623aa667cb6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1826952d31d4184290781e0fabd57d1ebed0db507df9321e16f53feb37e3893b = $this->env->getExtension("native_profiler");
        $__internal_1826952d31d4184290781e0fabd57d1ebed0db507df9321e16f53feb37e3893b->enter($__internal_1826952d31d4184290781e0fabd57d1ebed0db507df9321e16f53feb37e3893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1826952d31d4184290781e0fabd57d1ebed0db507df9321e16f53feb37e3893b->leave($__internal_1826952d31d4184290781e0fabd57d1ebed0db507df9321e16f53feb37e3893b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9997f6e580d70bfd74e7a2358c8dab599e99c208daeaf8311823d8b8981a568a = $this->env->getExtension("native_profiler");
        $__internal_9997f6e580d70bfd74e7a2358c8dab599e99c208daeaf8311823d8b8981a568a->enter($__internal_9997f6e580d70bfd74e7a2358c8dab599e99c208daeaf8311823d8b8981a568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9997f6e580d70bfd74e7a2358c8dab599e99c208daeaf8311823d8b8981a568a->leave($__internal_9997f6e580d70bfd74e7a2358c8dab599e99c208daeaf8311823d8b8981a568a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a06f050a1de09635314de792a5271fcd576e61d421ea4441cbb0cadeee561c6d = $this->env->getExtension("native_profiler");
        $__internal_a06f050a1de09635314de792a5271fcd576e61d421ea4441cbb0cadeee561c6d->enter($__internal_a06f050a1de09635314de792a5271fcd576e61d421ea4441cbb0cadeee561c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a06f050a1de09635314de792a5271fcd576e61d421ea4441cbb0cadeee561c6d->leave($__internal_a06f050a1de09635314de792a5271fcd576e61d421ea4441cbb0cadeee561c6d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6ad12cd5846a81c4485e36b8d1c2afa89d886f080397d6101ab157831cc081e = $this->env->getExtension("native_profiler");
        $__internal_f6ad12cd5846a81c4485e36b8d1c2afa89d886f080397d6101ab157831cc081e->enter($__internal_f6ad12cd5846a81c4485e36b8d1c2afa89d886f080397d6101ab157831cc081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6ad12cd5846a81c4485e36b8d1c2afa89d886f080397d6101ab157831cc081e->leave($__internal_f6ad12cd5846a81c4485e36b8d1c2afa89d886f080397d6101ab157831cc081e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
