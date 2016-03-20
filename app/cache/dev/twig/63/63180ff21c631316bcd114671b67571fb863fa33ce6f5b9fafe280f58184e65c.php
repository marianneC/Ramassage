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
        $__internal_0344d847f580d358260ebda5e99deebb1cababc5e37f156ce2f3238a5a187998 = $this->env->getExtension("native_profiler");
        $__internal_0344d847f580d358260ebda5e99deebb1cababc5e37f156ce2f3238a5a187998->enter($__internal_0344d847f580d358260ebda5e99deebb1cababc5e37f156ce2f3238a5a187998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0344d847f580d358260ebda5e99deebb1cababc5e37f156ce2f3238a5a187998->leave($__internal_0344d847f580d358260ebda5e99deebb1cababc5e37f156ce2f3238a5a187998_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddc4c2e78b43472667196634e91f9bd88c6c3d7bdf134dda60a169775a95196c = $this->env->getExtension("native_profiler");
        $__internal_ddc4c2e78b43472667196634e91f9bd88c6c3d7bdf134dda60a169775a95196c->enter($__internal_ddc4c2e78b43472667196634e91f9bd88c6c3d7bdf134dda60a169775a95196c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ddc4c2e78b43472667196634e91f9bd88c6c3d7bdf134dda60a169775a95196c->leave($__internal_ddc4c2e78b43472667196634e91f9bd88c6c3d7bdf134dda60a169775a95196c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9870af4c7a16c317c443a520f26969fe35b28c3e21cf7d382a5e933d01c27ac9 = $this->env->getExtension("native_profiler");
        $__internal_9870af4c7a16c317c443a520f26969fe35b28c3e21cf7d382a5e933d01c27ac9->enter($__internal_9870af4c7a16c317c443a520f26969fe35b28c3e21cf7d382a5e933d01c27ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9870af4c7a16c317c443a520f26969fe35b28c3e21cf7d382a5e933d01c27ac9->leave($__internal_9870af4c7a16c317c443a520f26969fe35b28c3e21cf7d382a5e933d01c27ac9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8436c4c3db9d72a907f60149d82c58656bae52dd666921b91dc348a4eb928638 = $this->env->getExtension("native_profiler");
        $__internal_8436c4c3db9d72a907f60149d82c58656bae52dd666921b91dc348a4eb928638->enter($__internal_8436c4c3db9d72a907f60149d82c58656bae52dd666921b91dc348a4eb928638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8436c4c3db9d72a907f60149d82c58656bae52dd666921b91dc348a4eb928638->leave($__internal_8436c4c3db9d72a907f60149d82c58656bae52dd666921b91dc348a4eb928638_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13ace22c84816f74989377a73ca9795c9868c396115b3de89e5e489b82c4276f = $this->env->getExtension("native_profiler");
        $__internal_13ace22c84816f74989377a73ca9795c9868c396115b3de89e5e489b82c4276f->enter($__internal_13ace22c84816f74989377a73ca9795c9868c396115b3de89e5e489b82c4276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13ace22c84816f74989377a73ca9795c9868c396115b3de89e5e489b82c4276f->leave($__internal_13ace22c84816f74989377a73ca9795c9868c396115b3de89e5e489b82c4276f_prof);

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
