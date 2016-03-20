<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0a0910b8cf789eca6f326c0d36efaefca56a4b78da3dac440e2dfc9d1cff8e74 extends Twig_Template
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
        $__internal_c1c45896ad715b26b112bd145a5b47bd7f55df00ca1df7e7bf22429924fdb448 = $this->env->getExtension("native_profiler");
        $__internal_c1c45896ad715b26b112bd145a5b47bd7f55df00ca1df7e7bf22429924fdb448->enter($__internal_c1c45896ad715b26b112bd145a5b47bd7f55df00ca1df7e7bf22429924fdb448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c1c45896ad715b26b112bd145a5b47bd7f55df00ca1df7e7bf22429924fdb448->leave($__internal_c1c45896ad715b26b112bd145a5b47bd7f55df00ca1df7e7bf22429924fdb448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
