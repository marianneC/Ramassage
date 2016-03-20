<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_04b4640e32738f780d3e899808a4fedf3df9dc3b50a8552154b335b7ebbf2323 extends Twig_Template
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
        $__internal_179bf19697f776f4e88d8380efc63b11676f06ac2db5a6f4a8da3cca5bcc9e85 = $this->env->getExtension("native_profiler");
        $__internal_179bf19697f776f4e88d8380efc63b11676f06ac2db5a6f4a8da3cca5bcc9e85->enter($__internal_179bf19697f776f4e88d8380efc63b11676f06ac2db5a6f4a8da3cca5bcc9e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_179bf19697f776f4e88d8380efc63b11676f06ac2db5a6f4a8da3cca5bcc9e85->leave($__internal_179bf19697f776f4e88d8380efc63b11676f06ac2db5a6f4a8da3cca5bcc9e85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
