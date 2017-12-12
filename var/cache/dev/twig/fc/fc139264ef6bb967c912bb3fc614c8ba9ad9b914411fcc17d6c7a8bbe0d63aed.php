<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a08de0b30cdcfc4649bec7b6cf102d0668b6de3835f176cb3fd32e0c1a27eb9 extends Twig_Template
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
        $__internal_416d1b0f23d025311722f3cd8304f2852d543ec89ebdaee8e997981de582a66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416d1b0f23d025311722f3cd8304f2852d543ec89ebdaee8e997981de582a66b->enter($__internal_416d1b0f23d025311722f3cd8304f2852d543ec89ebdaee8e997981de582a66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_416d1b0f23d025311722f3cd8304f2852d543ec89ebdaee8e997981de582a66b->leave($__internal_416d1b0f23d025311722f3cd8304f2852d543ec89ebdaee8e997981de582a66b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
