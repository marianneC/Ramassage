<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4ba4ece708f19390c397c675e054fc539a0ba83275cfacfe1b6129b16b9e3749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccf7b0280a83dc41d360f68cd7855585af3a4d001ba46cb6872f0e56386691ec = $this->env->getExtension("native_profiler");
        $__internal_ccf7b0280a83dc41d360f68cd7855585af3a4d001ba46cb6872f0e56386691ec->enter($__internal_ccf7b0280a83dc41d360f68cd7855585af3a4d001ba46cb6872f0e56386691ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ccf7b0280a83dc41d360f68cd7855585af3a4d001ba46cb6872f0e56386691ec->leave($__internal_ccf7b0280a83dc41d360f68cd7855585af3a4d001ba46cb6872f0e56386691ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
