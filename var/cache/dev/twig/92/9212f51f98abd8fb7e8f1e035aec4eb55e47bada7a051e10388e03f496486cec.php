<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_616d0d5457f7dc09ccf25ff8212164132d508b76bac5a40432bab682d9dbfbb2 extends Twig_Template
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
        $__internal_d0a7b5d83d64f382f91ad4420f647f63b4234248d112d6bf1b03165b2611f632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a7b5d83d64f382f91ad4420f647f63b4234248d112d6bf1b03165b2611f632->enter($__internal_d0a7b5d83d64f382f91ad4420f647f63b4234248d112d6bf1b03165b2611f632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d0a7b5d83d64f382f91ad4420f647f63b4234248d112d6bf1b03165b2611f632->leave($__internal_d0a7b5d83d64f382f91ad4420f647f63b4234248d112d6bf1b03165b2611f632_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
